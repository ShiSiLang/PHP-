<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
include_once 'func/upfile.php';
$fileinfo = $_FILES['pics'];				//商品图片
/*  获取图片路径  */
$reback = uppic($fileinfo);
if($reback === false){
	echo '上传失败，类型错误，或超出大小';
	exit();
}else{
	$sql="update tb_commo set name='".$_POST['name']."',pics='".$reback."',info='".$_POST['info']."',addtime='".date("Y-m-d")."',area='".$_POST['area']."',model='".$_POST['model']."',class='".$_POST['stype']."',brand='". $_POST['brand']."',stocks='".$_POST['stocks']."',m_price='".$_POST['m_price']."',v_price='".(float)$_POST['m_price'] * (float)$_POST['fold'] / 10 ."',fold='".(float)$_POST['fold']."',isnew='".$_POST['isnew']."',isnom='".$_POST['isnom']."' where id = '".$_POST['id']."'";
	echo $sql;
	$rst = $admindb->ExecSQL($sql,$conn);
	if($rst){
		echo  "<script>top.opener.location.reload();alert('修改成功！');window.close();</script>";
	}else{
		echo  "<script>top.opener.location.reload();alert('修改失败！');window.close();</script>";
	}
}
?>