<?php
session_start();
include('adm-lock.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"Delete from category where id='$id'");
if($sql)
{
echo "<script>location.href='cat_Details.php';</script>";
}
?>