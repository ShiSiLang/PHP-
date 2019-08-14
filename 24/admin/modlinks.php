<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$reback = '0';
$names = $_GET['names'];
$names = iconv("gb2312","utf-8",$names);
$wurl = $_GET['wurl'];
$id = (int)$_GET['id'];
$sql = "update tb_links set name='$names',url='$wurl' where id = '$id'";
$rst = $admindb->ExecSQL($sql,$conn);
if($rst){
	$reback = '1';
}else{
	$reback = '2';
}
echo $reback;
?>