<?php
session_start(); 
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql="select * from tb_user where name = '".$_SESSION['member']."' and password='".md5($_POST['old'])."' ";
$arr = $admindb->ExecSQL($sql,$conn);
if($arr){
	$sql = "update tb_user set password='".md5($_POST['new1'])."' where name = '".$_SESSION['member']."' and password='".md5($_POST['old'])."' ";
	$arr = $admindb->ExecSQL($sql,$conn);
	echo "<script>alert('密码修改成功！'); window.location.href='index.php';</script>";
}else{
	echo "<script>alert('密码修改失败！'); window.location.href='index.php';</script>";
}

?>
