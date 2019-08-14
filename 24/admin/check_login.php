<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$name = $_GET['user'];
$pwd = md5($_GET['pwd']);
$reback = '';
$sql = "select * from tb_admin where name = '$name' and pwd = '$pwd'";
$rst = $admindb->ExecSQL($sql,$conn);
if($rst){
	$_SESSION['admin'] = $rst[0]['name'];
	$reback = '1';
}else{
	$reback = '2';
	$reback = $sql;
}
echo $reback;
?>