<?php
session_start();
?>
<title>Untitled Document</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="main" >
<?php include('header.php');
include("config.php");

?>

<div class="body">
<body>
<?php
$email= $_POST['em'];
$password=$_POST['ps'];

if(($email=='nav@gmail.com')&&($password=='nav123'))
{
 $_SESSION['email']="nav@gmail.com";
$_SESSION['password']="navneet123";
echo "<script>location.href='welcome.php';</script>";
}
else
{
echo "invalid choice";
}
?>

<br />
<br />
<br />
</div>
<?php include('footer.php'); ?>

</div>

</div>

</body>
</html>
