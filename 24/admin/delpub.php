<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$rd = $_GET['rd'];
$reback = "0";
$arr = explode(",",$rd);
for($i = 0; $i < count($arr); $i++){
	$sql = "delete from tb_public where id = ".$arr[$i];
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = "1";
		break;
	}
}
echo $reback;
?>