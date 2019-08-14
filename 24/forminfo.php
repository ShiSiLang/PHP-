<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
include_once("system/system.inc.php");
$sql = "select * from tb_form where formid='".$_GET['fid']."'";
$formarr = $admindb->ExecSQL($sql,$conn);
$commname = explode(',',$formarr[0]['commo_name']);
$commnumber = explode(',',$formarr[0]['commo_num']);
$commagoprice = explode(',',$formarr[0]['agoprice']);
$commfold = explode(',',$formarr[0]['fold']);
$smarty->assign('formarr',$formarr[0]);
$smarty->assign('commname',$commname);
$smarty->assign('commnumber',$commnumber);
$smarty->assign('commagoprice',$commagoprice);
$smarty->assign('commfold',$commfold);
$smarty->assign('title','订单提交成功');
$smarty->display('forminfo.tpl');	
?>