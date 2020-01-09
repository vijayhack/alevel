<div class="login">
<h1 class="h1class">User Dashboard</h1>
<div class="content">

<ul>
<li style="color:#fff"><?php
if(isset($_SESSION['login_name']))
{ echo $_SESSION['login_name']; 
}?> 
|| <a href="logout.php" style="color:#000"> <b>Logout</b></a></li>

</ul>
</div>
</div>


<div class="login">
<h1 class="h1class">Forms</h1>
<div class="content">
<ul>
<li><a href="index.php">Place Order</a></li>
<li><a href="track_order.php">Track Order</a></li>

</ul>
</div>
</div>

<div class="login">
<h1 class="h1class">Reports</h1>
<div class="content">
<ul>
<li><a href="myprofile.php">Your Profile</a></li>
<li><a href="order_history.php">Order History</a></li>

</ul>
</div>
</div>