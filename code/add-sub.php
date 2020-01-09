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
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Add SubCategory</h1>


<form action="sub_action.php" method="post" enctype="multipart/form-data">
<table align="center" border="0" bordercolor="black" bgcolor="#942423" width="300" height="150"  style="border:thick; border:#000000">
<tr>
<td><b>Category Name</b></td>
</tr>
<tr>
<td colspan="2" ><Select name="cat" style="width:308px">
<?php
$result=mysqli_query($con,"SELECT * FROM category");

while($row=mysqli_fetch_array($result))
{
?>
<option value="<?php echo $row['id']; ?>-<?php echo $row['catName']; ?>"><?php echo $row['catName']; ?></option>
<?php
}
?>

</Select> </td>
</tr>

<tr>
<td colspan="2" ><input type="text" name="sub" placeholder="SubCat name" style="width:100%"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="p_price" placeholder="Personal Price" style="width:100%"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="m_price" placeholder="Medium Price" style="width:100%"> </td>
</tr>
<tr>
<td colspan="2" ><input type="text" name="f_price" placeholder="Family Price" style="width:100%"> </td>
</tr>
<tr>
<td colspan="2" ><textarea name="toppings" rows="10" cols="20" style="width:99%" Placeholder="Enter Topping Deatils Here"></textarea> </td>
</tr>
<tr>
<td>

<input name="img" type="file" /><br />

</td></tr>

<tr>
<td colspan="2" align="center" style="height:45px;"><input type="submit" class="button"  style="background-color:#DBB41A; color:#000000; border:#000000"/></td>
</tr>
</table>

</form>

</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>