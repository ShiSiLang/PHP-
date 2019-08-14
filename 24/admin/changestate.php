<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$formid = $_GET['formid'];
$state = $_GET['state'];
$reback = '0';
$sql="update tb_form set state='$state' where formid = '".$formid."' ";
$formarr = $admindb->ExecSQL($sql,$conn);
if(false == $formarr){
	$reback = '3';
}else{
	$reback = '1';
}
	echo $reback;
?>