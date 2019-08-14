<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	include_once("system/system.inc.php");
	$sql = "select * from tb_commo order by sell,id desc";
	$hotarr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('hotarr',$hotarr);
	$smarty->assign('title','热门商品');
?>