<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$con= mysqli_connect("localhost","id12166450_admin","admin");
mysqli_select_db($con,"id12166450_pizzaorder");
if($con)
{
//echo "mysql connected";
}
else
{
mysql_error();
}
?>