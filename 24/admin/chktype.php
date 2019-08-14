<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$name = iconv("gbk","utf-8",$_GET['name']);
if(isset($_GET['supid'])){
	$supid = $_GET['supid'];
	$sql = "select * from tb_class where name = '$name' and supid='$supid'";
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = '1';
	}else{
		$sqls = "insert into tb_class(name,supid)values('$name','$supid')";
		$rsts = $admindb->ExecSQL($sqls,$conn);
		if($rsts){
			$reback = '3';
		}else{
			$reback = '2';
		}
	}	

}else{
	$supid = 0;
	$sql = "select * from tb_class where name = '$name'";
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		$reback = '1';
	}else{
		$sqls = "insert into tb_class(name,supid)values('$name','$supid')";
		$rsts = $admindb->ExecSQL($sqls,$conn);
		if($rsts){
			$reback = '3';
		}else{
			$reback = '2';
		}
	}
}
echo $reback;
?>
