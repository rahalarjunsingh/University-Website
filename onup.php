<?php
session_start();
require 'dbcon.php';

$server_name="localhost:3307";
   
$username="root";

$password="";

$database_name="test";

$con=mysqli_connect($server_name,$username,$password,$database_name);

if(isset($_POST['delete_s1']))
{
    $studentID = mysqli_real_escape_string($con, $_POST['delete_s1']);

    $query = "DELETE  FROM student WHERE studentID='$studentID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Student Deleted Successfully";
        header("Location: view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Deleted";
        header("Location: view.php");
        exit(0);
    }
}
if(isset($_POST['update_student']))
{
    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);

    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $Gender = mysqli_real_escape_string($con, $_POST['Gender']);
    $Address = mysqli_real_escape_string($con, $_POST['Address']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
   

    $query = "UPDATE student SET firstname='$firstname', lastname='$lastname', Gender='$Gender' ,Address='$Address' ,mobileno='$mobileno'  WHERE studentID='$studentID' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "<alert>Student Updated Successfully</alert>";
        header("Location: view.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Updated";
        header("Location: index.php");
        exit(0);
    }

}


if(isset($_POST['save']))
{    
    $studentID = mysqli_real_escape_string($con, $_POST['studentID']);
    $firstname = mysqli_real_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_real_escape_string($con, $_POST['lastname']);
    $mobileno = mysqli_real_escape_string($con, $_POST['mobileno']);
    

    $query = "INSERT INTO student (studentID,firstname,lastname,mobileno) VALUES ('$studentID','$firstname','$lastname','$mobileno')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        echo"Student Created Successfully";
        header("Location: milo.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "Student Not Created";
        header("Location: student-create.php");
        exit(0);
    }
}

?>