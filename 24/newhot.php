<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	include_once("system/system.inc.php");
	$newsql = "select id,name,pics,m_price,v_price from tb_commo where isnew = 1 order by id desc limit 4";
	$hotsql = "select id,name,pics,m_price,v_price from tb_commo order by sell,id desc limit 4";
	$sql = "select id,name,pics,m_price,v_price from tb_commo where isnom = 1 order by id desc limit 4";		
	$newarr = $admindb->ExecSQL($newsql,$conn);
	$hotarr = $admindb->ExecSQL($hotsql,$conn);
	$nomarr = $admindb->ExecSQL($sql,$conn);
	$smarty->assign('newarr',$newarr);
	$smarty->assign('hotarr',$hotarr);	
	$smarty->assign('nomarr',$nomarr);
?>