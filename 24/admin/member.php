<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select id,name,isfreeze from tb_user";
$memarr = $admindb->ExecSQL($sql,$conn);
$smarty->assign('title','会员管理');
$smarty->assign('memarr',$memarr);
$smarty->display('member.tpl');
?>