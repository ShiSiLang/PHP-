<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select * from tb_commo where id = '".$_GET['id']."' order by id desc";
$arr = $admindb->ExecSQL($sql,$conn);
$smarty->assign('title','商品信息');
$smarty->assign('shoarr',$arr);
$smarty->display('showcommo.tpl');
?>