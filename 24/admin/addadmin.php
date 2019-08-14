<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$name = $_GET['name'];
$pwd = md5($_GET['pwd']);
$reback = '0';
$sql = "insert into tb_admin(name,pwd)values('".iconv("gbk","utf-8",$name)."','".iconv("gbk","utf-8",$pwd)."')";
$arr = $admindb->ExecSQL($sql,$conn);
if(false == $arr){
	$reback = '3';
}else{
	$reback = '1';
}
echo $reback;
?>