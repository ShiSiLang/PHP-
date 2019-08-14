<?php
$path = './tmp/';
session_save_path($path);					
session_start();
$_SESSION['username'] = true;
echo "最后得到的session_id是：" , session_id();
?>