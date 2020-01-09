<?php
error_reporting(E_ALL ^ E_DEPRECATED);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
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
</body>
</html>