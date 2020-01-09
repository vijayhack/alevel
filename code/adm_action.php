<?php
session_start();
include("config.php");
// username and password sent from form 

$myusername=$_POST['usern']; 
$mypassword=$_POST['pass']; 


$result=mysqli_query($con,"SELECT * FROM admin WHERE username='$myusername' and password='$mypassword'");

$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{

$_SESSION['admin_name']=$row['username'];
echo "<script>location.href='adm-welcome.php';</script>";
}
else 
{
$error="Your Login Name or Password is invalid";
echo "<script>location.href='admin.php?err=$error';</script>";
}


?>

