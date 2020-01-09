<?php
session_start();
include('adm-lock.php');
$id=$_GET['id'];
$sql=mysqli_query($con,"Delete from subcategory where id='$id'");
if($sql)
{
echo "<script>location.href='sub_Details.php';</script>";
}
?>