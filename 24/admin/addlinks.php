<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$name = $_POST['names'];
$url = $_POST['url'];
$sql="insert into tb_links(name,url)values('$name','$url')";	
$rst = $admindb->ExecSQL($sql,$conn);
if($rst){
	echo "<script>alert('添加成功');location=('showlinks.php');</script>";
}else{
	echo "<script>alert('添加失败');location=('addlinks.php');</script>";
}
?>
