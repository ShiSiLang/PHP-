<?php
session_start(); 
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select id,shopping from tb_user where name = '".$_SESSION['member']."'";
$rst = $admindb->ExecSQL($sql,$conn);
$reback = '0';
$changecar = array();
if(isset($_GET['fst']) && isset($_GET['snd'])){
	$fst = $_GET['fst'];
	$snd = $_GET['snd'];
	$farr = explode(',',$fst);
	$sarr = explode(',',$snd);
	$upcar = array();
	for($i = 0; $i < count($farr); $i++){
		$upcar[$i] = $farr[$i].','.$sarr[$i];
	}
	if(count($farr) > 1){
		$update = "update tb_user set shopping='".implode('@',$upcar)."' where name = '".$_SESSION['member']."'";
	}else{
		$update = "update tb_user set shopping='".$upcar[0]."' where name = '".$_SESSION['member']."'";
	}
	$shop = $admindb->ExecSQL($update,$conn);
	if($shop){
		$reback = 1;
	}else{
		$reback = 2;
	}
}
echo $reback;
?>