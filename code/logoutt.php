<?php
session_destroy();
if(session_destroy())
{
echo "<script>location.href='cust_log.php';</script>";
}
?>