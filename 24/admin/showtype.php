<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$bigsql = 'select id,name from tb_class where supid = 0';
$smallsql = 'select * from tb_class where supid != 0';
$bigarray = $admindb->ExecSQL($bigsql,$conn);
$smallarray = $admindb->ExecSQL($smallsql,$conn);
$smarty->assign('bigarray',$bigarray);
$smarty->assign('smallarray',$smallarray);
$smarty->display('showtype.tpl');
?>