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
    <script>
function calculate()
{
var basic=document.getElementById('basic').value;
var num=document.getElementById('num').value;

if(num=="")
{
	num=1;
}
//var amount=document.getElementById('pending').value;	
var final=basic*num;
document.getElementById('total').value=final;
//document.getElementById('am').innerHTML="Your Course Fee : " + total + " Rs.";
}
</script>
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
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Your Order History </h1>


<table class="bordered" style="font-size:16px;width: 90%;">
    <thead>

    <tr>
        <th>#</th>        
		
		<th>address</th>
		<th>sid</th>
		<th>sname </th>
		<th>type </th>
         <th>basic</th>
         <th>num</th>
         <th> price</th>
         <th>status</th>
	      </tr>
    </thead>
	<?php
	if(isset($_SESSION['login_id']))
	{
	$userid=$_SESSION['login_id'];
	//echo $userid;
	//exit;
$rst=mysqli_query($con,"SELECT * FROM `order` WHERE uid='$userid'");
while($ro=mysqli_fetch_array($rst))
{
?>
    <tr>
	<td><?php echo $ro['id'];?> </td> 
	
		  <td><?php echo $ro['address'];?> </td>    
		 <td><?php echo $ro['sid'];?> </td>        
        <td><?php echo $ro['sname'];?> </td>
		<td><?php echo $ro['type'];?> </td>
		 <td><?php echo $ro['basic'];?> </td>        
        <td><?php echo $ro['num'];?> </td>
		 <td><?php echo $ro['price'];?> </td>        
        <td><?php echo $ro['status'];?> </td>

    </tr>
	<?php
}
}
?>        
   
</table>
</div></div>

<?php include('footer.php'); 
?>

</div>



</body>
</html>
