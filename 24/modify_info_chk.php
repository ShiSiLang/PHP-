<?php
session_start(); 
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "update tb_user set realname='".$_POST['realname']."',card='".$_POST['card']."',tel='".$_POST['tel']."',phone='".$_POST['phone']."',Email='".$_POST['email']."',QQ='".$_POST['qq']."',code='".$_POST['code']."',address='".$_POST['address']."' where id = '".$_POST['userid']."'";
$arr = $admindb->ExecSQL($sql,$conn);
if($arr)
	echo "<script>alert('修改成功');location=('index.php');</script>"; 
else
	echo "<script>alert('修改失败');history.go(-1);</script>";
?>