<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	include_once("system/system.inc.php");
	$id = $_GET['id'];
	$sql = "select * from tb_public where id = ".$_GET['id'];
	$arr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('title','查看公告');
	$smarty->assign('arr',$arr);
	$smarty->display('showpub.tpl');
?>