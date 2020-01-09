<?php
session_start();
include('lock.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A Level</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main" >
<?php include('header.php');
?>

<div class="body">
<div class="adminleft">
<?php include('custLeft.php'); ?>
</div>

<div class="adminright">
<br>
<h1 style=" margin-left:0px; margin-right:10px;color:#942423"></h1>
<?php
$result=mysqli_query($con,"SELECT * FROM subcategory");
//echo $_SESSION['login_name'];
while($row=mysqli_fetch_array($result))
{
?>
<div class="boxindex">
<img src="<?php echo $row['path'];?>" width="75%"><br />
<?php echo $row['sname'];?><br />
Rs.<?php echo $row['personal_price'];?> |Rs.<?php echo $row['medium_price'];?> |Rs.<?php echo $row['family_price'];?><br /><br />
<center><a href="pizzaMore.php?id=<?php echo $row['id']; ?>&cat=<?php echo $row['cname']; ?>" style="text-decoration:none"><div class="button">Order Now</div></a></center>
</div>
<?php
}
?>




</div>
</div>
<?php include('footer.php'); ?>

</div>

</div>

</body>
</html>
