<?php
$name=$_POST['name']; 
$email=$_POST['em'];
$comments=$_POST['com'];
 

include("config.php");
$sql=mysqli_query($con,"Insert into feedback values('$name','$email','$comments')");

if($sql)
{

echo "<meta http-equiv='refresh' content='0;url=Thankyou.php?msg=Thankyou for your feedback. We will get back to you soon.'>";
//<script> window.location.href="Thankyou.php?msg=Thankyou for your feedback. We will get back to you soon.";  </script>
    
}
else
{
echo "record not inserted";
}
?>