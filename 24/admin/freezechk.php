<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  
$id = (int)$_GET['key'];	
$reback = '5';
$sql="update tb_user set isfreeze='".$_GET['state']."' where id = '".$id."' ";	
$rst = $admindb->ExecSQL($sql,$conn);
if($rst == false){
	$reback = '3';
}else{
	$reback = '1';
}
echo $reback;
?>