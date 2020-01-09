<?php
//session_start();
//error_reporting(E_ALL ^ E_NOTICE);
//setcookie("user", $_SESSION['login_user'], time() + 60*60,"","","");
include('config.php');

if(isset($_SESSION['login_user']))
{
$user_check=$_SESSION['login_user'];

$ses_sql=mysqli_query($con,"select email from customer where email='$user_check' ");

$row=mysqli_fetch_array($ses_sql);

$login_session=$row['email'];

if(!isset($login_session))
{
echo "<script>location.href='cust_log.php';</script>";
}

}

?>
<?php

//if(isset($_COOKIE["user"])) {
//     echo "<script>location.href='cust_log.php?ms=Your time is expired,Please login again!!';</script>";
//}
?>