<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	include_once("system/system.inc.php");
	$sql = "select * from tb_commo where isnom = 1 order by isnom,id desc limit 4";
	$nomarr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('nomarr',$nomarr);
	$smarty->assign('title','推荐商品');
?>