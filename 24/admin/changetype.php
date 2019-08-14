<?php
	/**********************************
	$reback说明：
	0、未知错误
	1、类名重复
	2、操作失败
	3、操作成功
	4、有二级分类
	***********************************/
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$action = $_GET['action'];
$reback = '';
if($action == 'm'){
	$names = iconv("gbk","utf-8",$_GET['names']);
	$key = $_GET['key'];
	$sql = "select * from tb_class where name = '$names'";
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = '1';
	}else{
		$updatesql = "update tb_class set id='$key',name='$names' where id = ".$key;
		$rst = $admindb->ExecSQL($updatesql,$conn);
		if($rst){
			$reback = '3';
		}else{
			$reback = '2';
		}
	}	
}else if($action == 'sd'){
	$key = $_GET['key'];
	$delsql = "delete from tb_class where id = ".$key;
	$rst = $admindb->ExecSQL($delsql,$conn);
	if($rst){
		$reback = '3';
	}else{
		$reback = '2';
	}
}else if($action == 'bd'){
	$key = $_GET['key'];
	$sql = "select * from tb_class where supid = ".$key;
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = '4';
	}else{
		$delsql = "delete from tb_class where id = ".$key;
		$rst = $admindb->ExecSQL($delsql,$conn);
		if($rst){
			$reback = '3';
		}else{
			$reback = '2';
		}
	}
}else{
	$reback = '0';
}
echo $reback;
?>