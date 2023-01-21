<?php
    session_start();
    require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>s1 CRUD</title>
</head>
<body>
  
    <div class="container mt-4">

     

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Students  Details
                            <a href="index.html" class="btn btn-primary float-end">Back</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>First  Name</th>
                                    <th>Last name</th>
                                    <th>Gender</th>
                                    <th>Address</th>
                                    <th>Mobile no</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                    $query = "SELECT * FROM student";
                                    $query_run = mysqli_query($con, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {  
                                        echo"fdvfdbb";
                                        foreach($query_run as $s1)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $s1['studentID']; ?></td>
                                                <td><?= $s1['firstname']; ?></td>
                                                <td><?= $s1['lastname']; ?></td>
                                                <td><?= $s1['Gender']; ?></td>
                                                <td><?= $s1['Address']; ?></td>
                                                <td><?= $s1['mobileno']; ?></td>
                                            
                                   


                                                
                                                <td>
                                                   
                                                    <a href="s1-view.php?studentID=<?= $s1['studentID']; ?>" class="btn btn-info btn-sm">View</a>
                                                    <a href="s1-edit.php?studentID=<?= $s1['studentID']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                     <form action="onup.php" method="post" class="d-inline">
                                                        <button type="submit" name="delete_s1" value="<?=$s1['studentID'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>