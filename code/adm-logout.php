<?php
session_start();
if(session_destroy())
{
echo "<script>location.href='admin.php';</script>";
}
?>