<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$title = iconv("gbk","utf-8",$_GET['title']);
$content = iconv("gbk","utf-8",$_GET['content']);
$reback = '0';
$sql="insert into tb_public(title,content,addtime)values('$title','$content','".date("Y-m-d H:i:s")."')";
$rst = $admindb->ExecSQL($sql,$conn);
if($rst){
	$reback = '1';
}else{
	$reback = '2';
}
echo $reback;
?>
