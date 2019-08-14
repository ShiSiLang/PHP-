<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$smarty->assign('title','新用户注册');
$smarty->display('register.tpl');
?>