<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$id = (int)$_GET['key'];
$sql = "select id,name,pics,area,model,class,brand,stocks,m_price,fold,v_price,isnew,isnom,addtime,info from tb_commo where id = '".$id."'";
$arr = $admindb->ExecSQL($sql,$conn);
if(false == $arr){
	echo "<script>top.opener.location.reload();alert('当前商品不存在');window.close();</script>";
}else{
	$smarty->assign('mcarr',$arr);	
}
$smarty->assign('id',$id);
$smarty->assign('title','修改商品');
$smarty->display('modifycommo.tpl');
?>