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
<br />
<h1 style=" margin-left:10px; margin-right:10px;color:#942423">Login</h1>

<form action ="login_action.php" method="post">
<br />
<br />
<table border="8" cellspacing="5" cellpadding="5" align="center">
<tr>
<th colspan="2">Login Page </th>
</tr>
<tr>
<th> enter email </th>
<td><input type="text" name="em" placeholder="email"/>
</td>
</tr>
<tr>
<th> enter password </th>
<td><input type="password" name="ps" placeholder="password"/>
</td>
</tr>
<tr>
<td colspan="2">
<input type="submit" name="login" value="login" />
</td>
</tr>
</table>

</div>

<?php include('footer.php');
 ?>

</div>

</div>
</body>
</html>
