<?php
session_start();
include("config.php");
// username and password sent from form 

$myusername=$_POST['username']; 
$mypassword=$_POST['password']; 


$result=mysqli_query($con,"SELECT * FROM customer WHERE email='$myusername' and pass='$mypassword'");

$row=mysqli_fetch_array($result);

$count=mysqli_num_rows($result);


// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1)
{
//setcookie("user", $row['fname'], time() + 60*60,"","","");
$_SESSION['login_user']=$row['email'];
$_SESSION['login_name']=$row['fname'];
$_SESSION['login_id']=$row['id'];
$_SESSION['login_addr']=$row['address'];

echo "<script>location.href='cust-welcome.php';</script>";
}
else 
{
$error="Your Login Name or Password is invalid";
echo "<script>location.href='cust_log.php?error=$error';</script>";
}
?>