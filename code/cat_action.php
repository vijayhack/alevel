<?php
session_start();
include('adm-lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A Level</title>
</head>

<body>

<?php
$catName= $_POST['cat'];

/*echo "your details are below :";
echo "<br>";
echo "catName= ".$catName."<br>"; */

include("config.php");
$sql=mysqli_query($con,"Insert into category values(null,'$catName')");

if($sql)
{
echo "<script>location.href='cat_Details.php';</script>";
}
else
{
echo "record not inserted";
}
?>


</body>
</html>
