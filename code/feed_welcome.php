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
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Feedback Details</h1>
<table class="bordered" style="font-size:16px;width: 90%;">
    <thead>

    <tr>
        <th>name</th>        
        <th>email</th>
        <th>Comments</th>
		
		 
    </tr>
    </thead>
	<?php
$result=mysqli_query($con,"SELECT * FROM feedback");

while($row=mysqli_fetch_array($result))
{
?>
    <tr>       
        <td><?php echo $row['name'];?> </td>
		 <td><?php echo $row['email'];?></td>  
		 <td><?php echo $row['comments'];?> </td>        
   
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
