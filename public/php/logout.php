<?php
session_start();
session_destroy();
print "<script>window.location='../login2.php';</script>";
?>