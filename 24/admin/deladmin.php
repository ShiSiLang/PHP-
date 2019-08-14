<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$reback = '0';
$id = (int)($_GET['id']);
$sql = 'delete from tb_admin where id = '.$id;
$arr = $admindb->ExecSQL($sql,$conn);
if(false == $arr){
	$reback = '3';
}else{
	$reback = '1';
}
echo $reback;
?>