<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件

$sql="insert into tb_form(formid,commo_id,commo_name,commo_num,agoprice,fold,total,vendee,taker,address,tel,code,pay_method,del_method,formtime,state)values(";
$formid=time();
$tmpid = explode(',',$_POST['fst']);
$tmpnm = explode(',',$_POST['snd']);
$number = count($tmpid);
$tmpna = array();
$tmpvp = array();
$tmpfd = array();
$tmptt = 0;
if($number >1){
	for($i = 0; $i < $number; $i++){
		$tmpsql = "select name,v_price,fold from tb_commo where id = '".$tmpid[$i]."'";
		$tmprst = $admindb->ExecSQL($tmpsql,$conn);
		$tmpna[$i] = $tmprst[0]['name'];
		$tmpvp[$i] = $tmprst[0]['v_price'];
		$tmpfd[$i] = $tmprst[0]['fold'];
		$tmptt += $tmprst[0]['v_price'] * $tmpnm[$i];
		@$tmpsell = $tmprst[0]['sell'] + 1;
		$addsql = "update tb_commo set sell = '".$tmpsell."' where id = '".$tmpid[$i]."'";
		$addrst = $admindb->ExecSQL($addsql,$conn);
	}
	
	$sql.="'".$formid."','".$_POST['fst']."','".implode(',',$tmpna)."','".$_POST['snd']."','".implode(',',$tmpvp)."','".implode(',',$tmpfd)."','".$tmptt."','".$_POST['uid']."'";
	
}else if($number == 1){
	$tmpsql = "select name,v_price,fold from tb_commo where id = '".$tmpid[0]."'";
	$tmprst = $admindb->ExecSQL($tmpsql,$conn);
	$tmptt= $tmprst[0]['v_price'] * $tmpnm[0];
	@$tmpsell = $tmprst[0]['sell'] + 1;
	$addsql = "update tb_commo set sell = '".$tmpsell."' where id = '".$tmpid[0]."'";
	$addrst = $admindb->ExecSQL($addsql,$conn);
	
	$sql.="'".$formid."','".$_POST['fst']."','".$tmprst[0]['name']."','".$_POST['snd']."','".$tmprst[0]['v_price']."','".$tmprst[0]['fold']."','".$tmptt."','".$_POST['uid']."'";
}else{
	echo 'error';
	exit();
}
$sql.=",'".$_POST['taker']."','".$_POST['address']."','".$_POST['tel']."','".$_POST['code']."','".$_POST['pay']."','".$_POST['del']."','".date("Y-m-d H:i:s")."',0)";
$InsertSQL = $admindb->ExecSQL($sql,$conn);
if(false == $InsertSQL){
	echo "<script>alert('购买失败');history.back;</script>";
}else{
	$updsql = "update tb_user set consume='".$tmptt."',shopping='' where name = '".$_POST['uid']."'";
	$updrst = $admindb->ExecSQL($updsql,$conn);
	echo "<script>top.opener.location.href='index.php';</script>";
	echo "<script>open('forminfo.php?fid=$formid','_blank','width=750 height=650',false);window.close();</script>";

}
?>