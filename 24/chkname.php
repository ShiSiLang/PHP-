<?php
session_start();
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$reback = '0';
$sql = "select * from tb_user where name='".$_GET['user']."'";
if(isset($_GET['password'])){
	$sql .= " and password = '".md5($_GET['password'])."'";
}
$rst = $admindb->ExecSQL($sql,$conn);
if($rst){
	/*  登录所用  */
	if($rst[0]['isfreeze'] != 0){
		$reback = '3';
	}else{
		$_SESSION['member'] = $rst[0]['name'];
		$_SESSION['id'] = $rst[0]['id'];
		$reback = '2';
	}
}else{
	$reback = '1';
}
echo $reback;
?>