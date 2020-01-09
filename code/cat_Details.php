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
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Edit Category</h1>
<table align="center" border="1" bordercolor="black" bgcolor="#DBB41A" width="300" height="150"  style="border:thick;  color:#942423;border:#000000">

<tr>
<td align="center"><b>Id</b></td>
<td align="center"><b>Category</b></td>
<td></td>

<td></td>
</tr>
<?php
$result=mysqli_query($con,"SELECT * FROM category");

while($row=mysqli_fetch_array($result))
{
?>

<tr>
<td><?php echo $row['id'];?> </td>
<td><?php echo $row['catName'];?> </td>
<td><a href="edit_cat.php?id=<?php echo $row['id'];?>">Edit</a> </td>

<td><a href="delete_cat.php?id=<?php echo $row['id'];?>">Delete</a>  </td>

</tr>
<?php
}
?>

</table>

</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>