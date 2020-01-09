<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>A Level</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.10.2.min.js"></script>
<script type="text/javascript">
function getResult(str)
{   
    jQuery.ajax({
       type: "GET",
       url: "ajax_result.php",
       data: "catId=" + str,
       success: function(data)
       {

    
		 $("#show").html(data);
		 
       },
       error: function()
       {
       $("#show").html('loading Result..');
      }
     });
}
</script>
</head>

<body>
<div class="main" >
<?php include('header.php');
?>

<div class="body">
<div class="adminleft">
<?php include('left.php'); ?>
</div>
<table border="1" bgcolor="#CC0000" style="margin-top:50px; margin-left:270px; width:650px; color:#fff; background-color:#CC0000; height:30px" align="center"><tr><td valign="middle" align="center">Search By Pizza Category</td><td valign="middle">
 <select name="cat" onchange="getResult(this.value);">
<?php
include('config.php');
$result=mysqli_query($con,"SELECT * FROM category");

while($row=mysqli_fetch_array($result))
{
$cat=$row['catName'];
?>
<option value="<?php echo $row['id']; ?>-<?php echo $row['catName']; ?>"><?php echo $row['catName']; ?></option>
<?php

}
?>
</select></td></tr></table>
<br /><div class="adminright" id="show" >
<br>
<h2 style=" margin-left:28px; margin-right:10px;color:#942423"></h2>

<?php 
$scat=mysqli_Query($con,"Select * from subcategory order by id desc limit 6 ");
while($r=mysqli_fetch_array($scat))
{
?>


<div class="boxindex" style="margin-right:50px">
<h4 class="h1class2"><?php echo $r['sname'];?></h4><img src="<?php echo $r['path'];?>" width="75%" style="margin-bottom:10px">
<span style="font-size:14px"><?php echo $r['personal_price'];?>(REG)||<?php echo $r['medium_price'];?>(MED) ||<?php echo $r['family_price'];?>(LAG)</span>
<center><a href="pizzaMore.php?id=<?php echo $r['id']; ?>&cat=<?php echo $r['cname'];?>" style="text-decoration:none"><div class="button2">Order Now</div></a></center>
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
