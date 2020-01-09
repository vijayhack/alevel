<?php
session_start();
include('lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<?php
$userid=$_SESSION['login_id'];
$uname=$_SESSION['login_name'];
$address= $_POST['del_address'];
$sid= $_POST['sid'];
$sname= $_POST['sname'];
$type= $_POST['type'];
$basic= $_POST['basic'];
$num= $_POST['num'];
$total= $_POST['total'];
$status= "Waiting for Confirmation";
$uid=rand(100,1000);
$orderid=$uid;
include("config.php");

//$sql=mysql_query("Insert into order values(Null,'$userid','$uname','$address','$sid','$sname','$type','$basic','$num','$total','$status')");

$sql=mysqli_query($con,"INSERT INTO `order` (
`id` ,
`uid` ,
`uname` ,
`address` ,
`sid` ,
`sname` ,
`type` ,
`basic` ,
`num` ,
`price` ,
`status`
)
VALUES (
NULL , '$userid', '$uname', '$address', '$sid', '$sname', '$type', '$basic', '$num', '$total', '$status'
)");


if($sql)
{
$lastid=mysqli_insert_id($con);
//$click="<a href='track_order.php'>Click Here</a>";
echo "<script>location.href='Thankyou.php?msg=Thankyou for placing your order on OrderPizza.com!! Your Order id is <b>$lastid</b>  and you can track your order by <a href=track_order.php>Click Here</a> .';</script>";
}
else
{
echo "record not inserted";
}
?>
</body>
</html>