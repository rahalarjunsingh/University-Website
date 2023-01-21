<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="rama.css">
</head>
<body>
  <?php
   
   
$server_name="localhost:3307";

$username="root";

$password="";

$database_name="test";

$conn=mysqli_connect($server_name,$username,$password,$database_name);
// now check the connection
if(!$conn)
{die("Connection Failed:" . mysqli_connect_error());}
if(isset($_POST['indo']))
{ 

  
    $teacherID = $_POST['teacherID'];
    $teacher_name = $_POST['teacher_name'];
    $Gender = $_POST['Gender'];
    $mobileno = $_POST['mobileno'];
    $email = $_POST['email'];
    $Address = $_POST['Address'];
    

    $sql_query = "INSERT INTO teacher(teacherID,teacher_name,Gender,mobileno,email,Address)
    VALUES ('$teacherID','$teacher_name','$Gender','$mobileno','$email','$Address')";
 
//For inserting the values to mysql database 

if (mysqli_query($conn, $sql_query))
{
  echo '<script>alert("Data Enter Sucessfully")</script>';
}
	 else
     {
		echo "Error: " . $sql . "" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
  ?>  
<!-- 
// teches -->
<div class="container" class="row g-3">
        <form action="milo2.php" method="post">

            <label for="id">techer ID</label>
            <input type="text" id="tid" name="teacherID" placeholder="Your collage ID..">

      
            <label >Subject  </label>
          <select id="subject" name="subject">
           <option value="Operating System">Operating System(201)</option>
             <option value="Database management System">Database management System(202)</option>

             <option value="Discreate Math">Discreate Math(203)</option>

             <option value="Data Structure">Data Structure(204)</option>
             <option value="Object Oriended">Object Oriended(205)</option>
             <option value="Mathmatics">Mathmatics(206)</option>
             <option value="Discreate Math">Discreate Math(207)</option>
             <option value="Complier Design">Complier Design(208)</option>
         
           </select>   
      
      
          <label for="fname">Course ID</label>
          <input type="text" id="fname" name="courseID" placeholder="Your name.."> 



<!--       
          <label for="lname"> Subject</label> -->
          <!-- <input type="text" id="lname" name="subject" placeholder="Your last name..">
       -->

          <!-- <label for="mob">Moblie no</label>
          <input type="text" id="mob" name="mobileno" placeholder="Your Moblie no..">     -->
          
          <!-- <select name="subject">
                    <option value="Biology"  >Biology</option>
                    <option value="Chemistry" >Chemistry</option>
                    <option value="Mathmatics"  >Mathmatics</option>
                    <option value="Hindi" >Hindi</option>
                    <option value="Marathi ">Marathi </option>
                    <option value="English ">English </option>

                  </select>    -->

<input type="submit" name="teaches" value="Submit">
      

</body>
</html>

<?php
  
   
  $server_name="localhost:3307";

  $username="root";
  
  $password="";
  
  $database_name="test";
  
  $conn=mysqli_connect($server_name,$username,$password,$database_name);
  // now check the connection
  if(!$conn)
  {die("Connection Failed:" . mysqli_connect_error());}
  if(isset($_POST['teaches']))
  { 
  
    
      $teacherID = $_POST['teacherID'];
      $subject = $_POST['subject'];
      $courseID = $_POST['courseID'];
    //   $subject = $_POST['subject'];
    //   $mobileno = $_POST['mobileno'];
      // $email = $_POST['email'];
  
      $sql_query = "INSERT INTO techess(teacherID,subject,courseID)
      VALUES ('$teacherID','$subject','$courseID')";
   
  //For inserting the values to mysql database 
  
  if (mysqli_query($conn, $sql_query))
  {
    echo '<script>alert("Data Enter Sucessfully")</script>';
    header('Location:index.html'); 
  }
       else
       {
          echo "Error: " . $sql . "" . mysqli_error($conn);
       }
       mysqli_close($conn);
  }

?>