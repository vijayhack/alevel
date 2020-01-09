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
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Place Order</h1>
<?php
$sid=$_POST['sid'];
$price=$_POST['type'];
$pizza=explode("-",$price);
$type=$pizza[0];
$type_price=$pizza[1];
?>

<form action="order_action.php" method="post">
<input type="hidden" name="sid" placeholder="Pizza name"  value="<?php echo $sid; ?>">

<table align="center" border="0" bordercolor="black" bgcolor="#942423" width="400" height="150"  style="border:thick; border:#000000; color:#FFFFFF;" cellpadding="2" cellspacing="3">
<tr>
<td><b>Pizza Name</b></td>

<td><input type="text" name="sname" placeholder="Pizza name"  value="<?php echo $_POST['sname']; ?>"> </td>
</tr>
<tr>
<td><b>Pizza Type</b></td>

<td ><input type="text" name="type" placeholder="Pizza name"  value="<?php echo $type; ?>"> </td>
</tr>
<tr>
<td><b>Pizza Quantity</b></td>

<td ><input type="text" name="num" placeholder="Pizza name"  id="num" value="1" onkeyup="calculate();"> </td>
</tr>
<tr>
<td><b>Pizza Price</b></td>

<td ><input type="text" name="basic" placeholder="Pizza name"  id="basic" value="<?php echo $type_price; ?>" readonly="readonly"> </td>
</tr>

<tr>
<td><b>Shiping Address</b></td>

<td ><textarea name="del_address" ><?php echo $_SESSION['login_addr']; ?></textarea> </td>
</tr>
<tr>
<td><b>Total Price</b></td>

<td ><input type="text" name="total" placeholder="Pizza name"  id="total" value="<?php echo $type_price; ?>" readonly="readonly"> </td>
</tr>
<tr>
<td colspan="2" align="center" style="height:45px;"><input type="submit" class="button"  style="background-color:#DBB41A; color:#000000; border:#000000"/></td>
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
