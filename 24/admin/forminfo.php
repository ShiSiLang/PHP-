<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$id = $_GET['fid'];
$sql = "select * from tb_form where id = ".$id;
$commfold = $admindb->ExecSQL($sql,$conn);
$smarty->assign('formarr',$commfold);
$commname = explode(',',$commfold[0]['commo_name']);
$commnumber = explode(',',$commfold[0]['commo_num']);
$commagoprice = explode(',',$commfold[0]['agoprice']);
$commfold = explode(',',$commfold[0]['fold']);
$smarty->assign('commname',$commname);
$smarty->assign('commnumber',$commnumber);
$smarty->assign('commagoprice',$commagoprice);
$smarty->assign('commfold',$commfold);
$smarty->assign('title','查看订单信息');
$smarty->display('forminfo.tpl');	
?>