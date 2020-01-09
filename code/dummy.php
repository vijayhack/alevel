<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main" >
<?php include('header.php');
?>
<div class="body">
<br />
<div class="adminleft">
<?php include('left.php'); ?>
</div>
<div class="adminright">
<br />
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Customer Login</h1>



<form action="cust_action.php" method="post">
<table  border="0" bordercolor="black" bgcolor="#942423" width="300" height="150"  style="margin-left:120px">
<tr>
<td><b>Username</b></td><td><input type="text" name="username" placeholder="Enter Username"/></td>
</tr>
<tr>
<td><b>Password</b></td><td><input type="password" name="password" placeholder="Enter password" /></td>
</tr>
<td></td><td><input type="submit" class="button"  style="background-color:#DBB41A; color:#000000; border:#000000"/></td>
<?php
echo $_GET['error'];
?>
</tr>
</table>
</form>


</div></div>

<?php include('footer.php'); 
?>



</div>

</body>
</html>
