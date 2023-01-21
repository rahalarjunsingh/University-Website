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

    <title>Student Edit</title>
</head>
<body>
  
    <div class="container mt-5">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Student Edit 
                            <a href="index.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>

                    
                    <div class="card-body">

                        <?php
                        if(isset($_GET['studentID']))
                        {
                            echo $student_id = mysqli_real_escape_string($con, $_GET['studentID']);

                
                            $query = "SELECT * FROM student WHERE studentID='$student_id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $s1 = mysqli_fetch_array($query_run);
                                 ?>
                                <form action="onup.php" method="post">
                                    <input type="hidden" name="studentID" value="<?= $s1['studentID']; ?>">

                                    <div class="mb-3">
                                        <label>Student Name</label>
                                        <input type="text" name="firstname" value="<?=$s1['firstname'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>Student Last Name</label>
                                        <input type="text" name="lastname" value="<?=$s1['lastname'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Gender</label>
                                        <input type="text" name="Gender" value="<?=$s1['Gender'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Address</label>
                                        <input type="text" name="Address" value="<?=$s1['Address'];?>" class="form-control">
                                    </div>

                                    <div class="mb-3">
                                        <label>Student Phone</label>
                                        <input type="text" name="mobileno" value="<?=$s1['mobileno'];?>" class="form-control">
                                    </div>
                                   
                                    <div class="mb-3">
                                        <button type="submit" name="update_student" class="btn btn-primary">
                                            Update Student
                                        </button>
                                    </div>

                                </form>
                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        // ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>