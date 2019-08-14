<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
$sql = "select id,name,brand,area,model,stocks,sell,addtime from tb_commo order by sell";
$arr = $admindb->ExecSQL($sql,$conn);
$smarty->assign('commoarr',$arr);	
$smarty->assign('title','查看商品');
$smarty->display('showcommo.tpl');
?>