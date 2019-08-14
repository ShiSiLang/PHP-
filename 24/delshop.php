<?php
session_start(); 
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
/*  xmlhttp返回参数  */				
$reback = '0';
/*	将传过来的变量以逗号分割	*/
$commid = explode(',',$_GET['rd']);
/*  更新数据库所需数组	*/
$newshop = array();
/*	查找当前用户	*/
$sql = "select id,shopping from tb_user where name = '".$_SESSION['member']."'";
$rst = $admindb->ExecSQL($sql,$conn);
if($rst==false){
	$reback = '2';
}else{
	/*	将shopping字段用@分割	*/
	if(!empty($rst[0]['shopping'])){
		$tmpshop = array();
		$shopping = explode('@',$rst[0]['shopping']);
		foreach($shopping as $ky => $vl){
			$tmp = explode(',',$vl);
			$boo = false;
			foreach($commid as $value){
				if($value == $tmp[0]){
					$boo = true;
				}
			}
			if(!$boo){
				$tmpshop[$ky] = $vl;
			}
		}
		if(!empty($tmpshop)){
			$update = "update tb_user set shopping='".implode('@',$tmpshop)."' where name = '".$_SESSION['member']."'";
		}else{
			$update = "update tb_user set shopping='' where name = '".$_SESSION['member']."'";
		}
		$shop = $admindb->ExecSQL($update,$conn);
		if($shop){
			$reback = 1;
		}else{
			$reback = 3;
		}
	}
}
echo $reback;
?>