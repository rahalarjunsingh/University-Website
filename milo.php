<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="q.css"> -->
    <link rel="stylesheet" href="rama.css">
    <title>Document</title>
</head>
<body>
<?php
   
   $server_name="localhost:3307";
   
   $username="root";
   
   $password="";
   
   $database_name="test";
   
   $conn=mysqli_connect($server_name,$username,$password,$database_name);
   //now check the connection
   if(!$conn)
   {

    die("Connection Failed:" . mysqli_connect_error());}
   if(isset($_POST['save']))
   {  
       
       $studentID = $_POST['studentID'];
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $Gender = $_POST['Gender'];
       $Address = $_POST['Address'];
       $mobileno = $_POST['mobileno'];
       
    //   if ( $studentID !="" && $firstname!="" && $lastname!="" &&  $Gender!="" && $Address!="" && $mobileno!="" ) {
      
      
       $sql_query = "INSERT INTO student(studentID, firstname,lastname,Gender,Address,mobileno)
       VALUES ('$studentID','$firstname','$lastname','$Gender','$Address','$mobileno')";
   //For inserting the values to mysql database 
   
   if (mysqli_query($conn, $sql_query))
   {
    echo '<script>alert("Data Enter Sucessfully")</script>';

 
   
   }
        else
        {
           echo "Error: " . $sql . "" . mysqli_error($conn);
        }

    
        // mysqli_close($conn);

     
   }
   ?>
   <!-- <input  type="submit" data-inline ="center" name="save" value="Save"> -->
<div class="container">

<form action="milo.php" method="post">
              <!-- <div class="col-md-6">
                <label for="inputCity" class="form-label">Course id</label>
                <input type="text" class="form-control"  name="courseID"  require  id="courseID" > -->

                <!-- <label for="inputCity" class="form-label">Year</label>
              <select id="year" name="courseID"  required >
              <option value=1>First Year</option>
            <option value=2>second Year</option>
            <option value=3>Third Year</option>
            <option value=4>Final Year</option>
</select> -->
            <!-- </div>  -->

            <!-- <div class="col-md-6">
                <label for="inputCity" class="form-label">Course id</label>
                <input type="text" class="form-control"  name="courseID"id="courseID">
            </div>  -->


            <label >Course ID  </label>
          <select id="courseID"   name="courseID" >
           <option value=201>Operating System(201)</option>
             <option value=202>Database management System(202)</option>

             <option value=203>Discreate Math(203)</option>

             <option value=204>Data Structure(204)</option>
             <option value=205>Object Oriended(205)</option>
             <option value=206>Mathmatics(206)</option>
             <option value=207>Discreate Math(207)</option>
             <option value=208>Complier Design(208)</option>
         
           </select>





            <div class="col-md-6">
              <label for="inputCity" class="form-label">student ID</label>
              <input type="text" class="form-control" name="studentID" require   id="studentID">
          </div>

          <div class="col-md-6">
              <label for="inputCity" class="form-label">Year</label>
              <select id="year" name="year"   required >
              <option value=1>First Year</option>
            <option value=2>second Year</option>
            <option value=3>Third Year</option>
            <option value=4>Final Year</option>
</select>

          </div>
          <div class="col-md-6">
              <label for="inputCity" class="form-label">Semester</label>
              <select id="sem" name="semester"  required >
              <option value="Winter">Winter</option>
            <option value="Summer">Summer</option>

</select>
          </div>


          <!-- <select id="Department_Name" name="Department_Name">
            <option value="Winter">Winter</option>
            <option value="Summer">Summer</option>
          </select>    -->

          
          <div class="col-12">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label" for="gridCheck">
                    Check me out
                </label>
            </div>
        </div>

        <input  type="submit" data-inline ="center" name="takes" value="Submit">
    </form> 
    

</div>
 
</body>
</html>

<?php
   
// $server_name="localhost";

// $username="root";

// $password="";

// $database_name="test";

// $conn=mysqli_connect($server_name,$username,$password,$database_name);
// //now check the connection
// if(!$conn)
// {die("Connection Failed:" . mysqli_connect_error());}
// if(isset($_POST['course']))
// {  
//     $studentID = $_POST['studentID'];
//     $courseID = $_POST['courseID'];
//     $semester = $_POST['semester'];
   
//     // $email = $_POST['email'];
//     $sql_query = "INSERT INTO takes(studentID, courseID,semester)
//     VALUES ('$studentID','$courseID','$semester')";
// //For inserting the values to mysql database 

// if (mysqli_query($conn, $sql_query))
// {
// echo "New Details Entry inserted successfully !";

// }
// 	 else
//      {
// 		echo "Error: " . $sql . "" . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// }


// teacher 


 // course

 $server_name="localhost:3307";

$username="root";

$password="";

$database_name="test";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['course']))
{ 

  
    $courseID = $_POST['courseID'];
    $title = $_POST['title'];
    // $email = $_POST['email'];

    $sql_query = "INSERT INTO course(courseID,title)
    VALUES ('$courseID','$title')";
 
//For inserting the values to mysql database 

if (mysqli_query($conn, $sql_query))
{
echo "New Details Entry inserted successfully !";
  
}
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
        
       
	 }
	 mysqli_close($conn);
}

// takes


// $server_name="localhost:3307";

// $username="root";

// $password="";

// $database_name="test";

// $conn=mysqli_connect($server_name,$username,$password,$database_name);
// // now check the connection
// if(!$conn)
// {die("Connection Failed:" . mysqli_connect_error());}
// if(isset($_POST['takes']))
// { 

  
//     $courseID = $_POST['courseID'];
//     $studentID = $_POST['studentID'];
//     // $year= $_POST['year'];
//     // $semester= $_POST['semester'];

//     // $studentID = $_POST['studentID'];
//     // $studentID = $_POST['studentID'];
//     // $email = $_POST['email'];

//     $sql_query = "INSERT INTO takes(courseID,studentID);
//     VALUES ('$courseID','$studentID')";
 
// //For inserting the values to mysql database 

// if (mysqli_query($conn, $sql_query))
// {
// echo "New Details Entry inserted successfully !";
// }
// 	 else
//      {
// 		echo "Error: " . $sql . "" . mysqli_error($conn);
// 	 }
// 	 mysqli_close($conn);
// }



$server_name="localhost:3307";

$username="root";

$password="";

$database_name="test";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['takes']))
{ 

  
    $courseID = $_POST['courseID'];
    $studentID = $_POST['studentID'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    // $email = $_POST['email'];

    $sql_query = "INSERT INTO takes(courseID,studentID,year,semester)
    VALUES ('$courseID','$studentID','$year','$semester')";
 
//For inserting the values to mysql database 

if (mysqli_query($conn, $sql_query))
{
echo '<script>alert("Data Enter Sucessfully")</script>';
header('Location:view.php'); 
}
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}

 ?>



