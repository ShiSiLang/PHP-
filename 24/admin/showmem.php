<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  
$id = (int)$_GET['key'];
$sql = "select id,name,consume,realname,card,tel,phone,Email,QQ,code,address,isfreeze,addtime from tb_user where id = '".$id."'";
$rst = $admindb->ExecSQL($sql,$conn);
if(false == $rst){
	echo "<script>top.opener.location.reload();alert('会员不存在');window.close();</script>";
}else{
	$smarty->assign('viparr',$rst);	
}
	$smarty->assign('id',$id);
	$smarty->assign('title','会员信息');
	$smarty->display('showmem.tpl');
?>