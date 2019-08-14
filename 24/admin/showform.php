<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = 'select id,formid,vendee,taker,total,pay_method,del_method,state from tb_form';
$formarr = $admindb->ExecSQL($sql,$conn);
$smarty->assign('formarr',$formarr);
$smarty->assign('title','查看订单');
$smarty->display('showform.tpl');
?>