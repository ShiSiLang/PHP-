<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件	$smarty->assign('title','找回密码');
$smarty->display('found.tpl');
?>

