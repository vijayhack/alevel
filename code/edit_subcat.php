<?php
session_start();
include('adm-lock.php');
?>
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

<div class="adminleft">
<?php include('adminleft.php'); 
?>
</div>

<div class="adminright">
<br />
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Edit Sub Category</h1>
<?php
$id=$_GET['id'];
$result=mysqli_query($con,"SELECT * FROM subcategory where id='$id'");

while($row=mysqli_fetch_array($result))
{
?>

<form action="update_cat.php" method="post">
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<table align="center" border="0" bordercolor="black" bgcolor="#942423" width="500" height="150"  style="border:thick; border:#000000">
<tr>
<td><b>Category Name</b></td>
</tr>


<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Cat name" style="width:100%" value="<?php echo $row['cname'];?>"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Sub Category name" style="width:100%" value="<?php echo $row['sname'];?>"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Personal Price" style="width:100%" value="<?php echo $row['personal_price'];?>"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Medium Price" style="width:100%" value="<?php echo $row['medium_price'];?>"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Family Price" style="width:100%" value="<?php echo $row['family_price'];?>"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="cat" placeholder="Toppings" style="width:100%" value="<?php echo $row['toppings'];?>"> </td>
</tr>
<tr><td></td></tr>
<tr>
<td colspan="2" align="center" style="height:45px;"><input type="submit" align="center" class="button"  value="Update" style="background-color:#DBB41A; color:#000000; border:#000000"/></td>
</tr>
</table><br />
<br />

</form>
<?php
}

?>

</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>
