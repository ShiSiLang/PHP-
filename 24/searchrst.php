<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
if(isset( $_GET['act']) &&  $_GET['act'] == "simple"){
	if(isset($_GET['cont'])){
		$sql = "select * from tb_commo where name like '%".$_GET['cont']."%'";
	}
}else if(isset( $_GET['act']) && $_GET['act'] == "high"){
	$name = iconv("gbk","utf-8",$_GET['name']);
	$model = iconv("gbk","utf-8",$_GET['model']);
	$class = iconv("gbk","utf-8",$_GET['stype']);
	$sql = "select * from tb_commo where name like '%".$name."%' and model like '%".$model."%' and class like '%".$class."%' ";
}
$searcharr = $admindb->ExecSQL($sql,$conn);
if($searcharr){
	$smarty->assign('result',"TRUE");
	$smarty->assign('searcharr',$searcharr);
}else{
	$smarty->assign('result',"FALSE");
}
$smarty->assign('title','查询结果');
$smarty->display('searchrst.tpl');
?>