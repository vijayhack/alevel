<?php
include('config.php');
$cat=explode("-",$_GET['catId']);
$cid=$cat[0];
$cname=$cat[1];
//echo $cid;
?>
<h2 style=" margin-left:28px; margin-right:10px;color:#942423"><?php echo $cname; ?></h2>

<?php 
$scat=mysqli_Query($con,"Select * from subcategory where cid='$cid'");
while($r=mysqli_fetch_array($scat))
{


?>


<div class="boxindex" style="margin-right:50px">
<h4 class="h1class2"><?php echo $r['sname'];?></h4><img src="<?php echo $r['path'];?>" width="75%" style="margin-bottom:10px">
<span style="font-size:14px"><?php echo $r['personal_price'];?>(REG)||<?php echo $r['medium_price'];?>(MED) ||<?php echo $r['family_price'];?>(LAG)</span>
<center><a href="pizzaMore.php?id=<?php echo $r['id']; ?>&cat=<?php echo $r['cname'];?>" style="text-decoration:none"><div class="button2">Order Now</div></a></center></div>
</hr>
<?php
}
?>




