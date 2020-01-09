<div class="header">
<div class="border" >

</div>
<div class="logo" style="margin-top:10px">

<h1 ><a href="index.php" style="color:#942423">OrderPizza.com</a></h1> 
<!-- <img src="images/logo.png" height="108" width="229" /> -->


</div>


<div class="menu">
<ul>
<li><a href="index.php">Home</a></li>
<li><a href="aboutUs.php">About</a></li>

<?php
if(!isset($_SESSION['login_name']) && !isset($_SESSION['admin_name']))
{
?>
<li><a href="cust_log.php">Login</a></li>
<li><a href="register.php">Register</a></li>
<li><a href="admin.php">Admin</a></li>
<?php } ?>



<?php
if(isset($_SESSION['login_name']))
{
?>
<li><a href="cust-welcome.php">Profile</a></li>
<li><a href="index.php">Order</a></li>
<li><a href="Feed_details.php">Feedback</a></li>
<li style="float:right;"><a href="logout.php"> <b>Logout</b></a></li>
<?php } ?>

<?php
if(isset($_SESSION['admin_name']))
{
?>
<li><a href="adm-welcome.php">Admin Profile</a></li>
<li style="float:right;"><a href="adm-logout.php"> <b>Logout</b></a></li>
<?php } ?>


</ul>
</div>
<!--<div class="contact">Contact Us:- <br /><font>999-999-9999</font> </div>
-->
<img src="images/banner.png" />
</div>