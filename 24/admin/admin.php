<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select * from tb_admin";
$man = $admindb->ExecSQL($sql,$conn);
$smarty->assign('arr',$man);
$smarty->assign('title','管理员管理');
$smarty->display('admin.tpl');
?>