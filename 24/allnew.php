<?php
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
	include_once("system/system.inc.php");
if(isset($_GET['page'])){
	$page=$_GET['page'];
}else{
	$page=1;
}	
	$rst1 = $seppage->ShowData("select * from tb_commo where isnew = 1 order by isnew,id desc",$conn,2,$page);	
	$smarty->assign("newarr",$rst1);
	$smarty->assign('rst1_page',$seppage->ShowPage("产品","个",$_GET['page_type'],'',"a"));

	$smarty->assign('title','最新商品');
	
?>
