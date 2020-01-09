<?php
session_start();
include('adm-lock.php');
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
<?php include('adminleft.php'); 
?>
</div>

<div class="adminright">
<br />
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Add Category</h1>


<form action="cat_action.php" method="post">
<table align="center" border="0" bordercolor="black" bgcolor="#942423" width="300" height="150"  style="border:thick; border:#000000">
<tr>
<td><b>Category Name</b></td>
</tr>


<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Cat name"/style="width:100%"> </td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" class="button"  style="background-color:#DBB41A; color:#000000; border:#000000"/></td>
</tr>
</table><br />
<br />

</form>


</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>
