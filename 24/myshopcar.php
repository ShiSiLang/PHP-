<?php
$select = "select id,shopping from tb_user where name ='".$_SESSION['member']."'";
$rst = $admindb->ExecSQL($select,$conn);
if($rst[0]['shopping']==""){
	echo "<p>";
	echo '购物车中暂时没有商品!';
	exit();
}
$commarr = array();
foreach($rst[0] as  $value){
	$tmpnum = explode('@',$value);
	$shopnum = count($tmpnum);						//商品类数
	$sum = 0;
	foreach($tmpnum as $key => $vl){ 
		$s_commo = explode(',',$vl);
		$sql2 = "select id,name,m_price,fold,v_price from tb_commo";
		$commsql = $sql2." where id = ".$s_commo[0];
		$arr = $admindb->ExecSQL($commsql,$conn);
		@$arr[0]['num'] = $s_commo[1];
		@$arr[0]['total'] = $s_commo[1]*$arr[0]['v_price'];
		$sum += $arr[0]['total'];
		$commarr[$key] = $arr[0];
	}
	
	}
	$smarty->assign('shoparr',$shopnum);
	$smarty->assign('commarr',$commarr);
	$smarty->assign('sum',$sum);
?>