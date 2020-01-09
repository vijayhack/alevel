<?php
session_destroy();
if(session_destroy())
{
echo "<script>location.href='admin.php';</script>";
}
?>