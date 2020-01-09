<?php
include('config.php');
$result=mysqli_query($con,"SELECT * FROM category");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
}

while($row=mysqli_fetch_array($result))
{
$cid=$row['id'];
?>
<div class="login">
<h1 class="h1class"><?php echo $row['catName'];?></h1>
<div class="content">
<ul>
<?php 
$scat=mysqli_Query($con,"Select * from subcategory where cid='$cid'");
while($r=mysqli_fetch_array($scat))
{
?>
<li><a href="pizzaMore.php?id=<?php echo $r['id']; ?>&cat=<?php echo $row['catName'];?>"><?php echo $r['sname']; ?></a></li>
<?php
}
?>

</ul>
</div>
</div>
<?php
}
?>

