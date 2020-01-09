<?php

include('config.php');

$user_check=$_SESSION['admin_name'];

$ses_sql=mysqli_query($con,"select username from admin where username='$user_check' ");

$row=mysqli_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
echo "<script>location.href='admin.php';</script>";    
}
?>