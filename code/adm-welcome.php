<?php
session_start();
include('adm-lock.php');
?>
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main" >
<?php include('header.php'); ?>

<div class="body">
<div class="adminleft">
<?php include('adminleft.php'); ?>
</div>


<div class="adminright">
<table bgcolor="red" border="5">
<tr>
<td>
<?php
echo "Your email= ".$_SESSION['admin_name']."<br>";

?>
</td>
</tr>
</table>

</div>

</div>

<?php include('footer.php'); ?>

</body>
</html>