<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pwd']);
session_destroy();
header("location:index.php");
?>
