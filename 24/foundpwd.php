<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件	$smarty->assign('title','找回密码');
$reback = '0';
if(!isset($_GET['answer']) && !isset($_GET['password'])){
	$namesql = "select * from tb_user where name = '".$_GET['user']."'";
	$namerst = $admindb->ExecSQL($namesql,$conn);
	if($namerst){
		$question = $namerst[0]['question'];
		$reback = $question;
	}
}else if(isset($_GET['answer'])){
	$answersql = "select * from tb_user where name = '".$_GET['user']."' and answer = '".$_GET['answer']."'";
	$answerrst = $admindb->ExecSQL($answersql,$conn);
	if($answerrst){
		$reback = '1';
	}
}else if(isset($_GET['password'])){
	$sql="update tb_user set password='".md5($_GET['password'])."' where name='".$_GET['user']."'";
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = '1';
	}
}
echo $reback;
?>