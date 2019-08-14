<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$id = (int)$_GET['id'];
$old = md5($_GET['old']);
$new = md5($_GET['new']);
$reback = '0';
$sql="update tb_admin set pwd='".$new."' where id = '".$id."' and pwd = '".$old."'";
$arr = $admindb->ExecSQL($sql,$conn);
if( $arr == false){
	$reback = '2';
}else{
	$reback = '1';
}
echo $reback;
?>