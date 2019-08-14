<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = 'select * from tb_links';
$linkarr = $admindb->ExecSQL($sql,$conn);
$smarty->assign('title','查看链接');
$smarty->assign('linkarr',$linkarr);
$smarty->display('showlinks.tpl');
?>