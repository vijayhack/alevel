<?php
session_start();
include('lock.php');
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
<?php include('custLeft.php'); 
?>
</div>

<div class="adminright">
<br />
<h1 style=" margin-left:10px; margin-right:10px;color:#942423"> Order History</h1>
	<?php
	$id=$_POST['oid'];
	//echo $id;
	$userid= $_SESSION['login_id'];
	
$res=mysqli_query($con,"SELECT * FROM `order` where id=$id and uid='$userid'");
$count=mysqli_num_rows($res);
if($count>0)
{    
	while($r=mysqli_fetch_array($res))
	{
?>

<table class="bordered" style="font-size:16px;width: 50%;">
    <thead>

    <tr>
        <th>#</th>        
        <td><?php echo $r['id'];?></td>
        </tr>
        <tr>
        <th>Pizza</th>        
        <td><?php echo $r['sname'];?></td>
        </tr>
         <tr>
        <th>Pizza Type</th>        
        <td><?php echo $r['type'];?></td>
        </tr>
        
         <tr>
        <th>Basic Price</th>        
        <td><?php echo $r['basic'];?> Rs.</td>
        </tr>
         <tr>
        <th>No. of Pizza</th>        
        <td><?php echo $r['num'];?></td>
        </tr>
         <tr>
        <th>Total Price</th>        
        <td><?php echo $r['price'];?> Rs.</td>
        </tr>
         <tr>
        <th>Status</th>        
        <td><?php echo $r['status'];?></td>
        </tr>
       
    </thead>

       
   
</table>
  
	<?php
  }


}
else 
{
echo "Sorry!! Order Not Found for This Orderid";
}
?> 
</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>
