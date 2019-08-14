<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select * from tb_public";
$rst = $admindb->ExecSQL($sql,$conn);
$smarty->assign('pubarr',$rst);
$smarty->assign('title','查看公告');
$smarty->display('showpub.tpl');
?>