<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  	
$rd = $_GET['rd'];
$reback = "1";
$arr = explode(",",$rd);
for($i = 0; $i < count($arr); $i++){
	$sql = "delete from tb_user where id = ".$arr[$i];
	$arr = $admindb->ExecSQL($sql,$conn);
	if(false == $arr){
		$reback = "0";
		break;
	}
}
echo $reback;
?>