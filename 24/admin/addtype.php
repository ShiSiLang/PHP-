<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select name,id from tb_class where supid = 0";
$rst = $admindb->ExecSQL($sql,$conn);
$smarty->assign('f_arr',$rst);
$smarty->display('addtype.tpl');
?>