<?php	
require_once("system/system.inc.php");  //调用指定的文件     
$shopping=$seppage->ShowDate("select * from tb_book where id order by id ",$conn,3,isset($_GET["page"])?$_GET["page"]:"");		//调用分页类，实现分页功能  
if(!$shopping){
    $smarty->assign("istr","F");
}else{
    $smarty->assign("istr","T");
	$smarty->assign("showpage",$seppage->ShowPage("图书","本","","a1")); //定义输出分页数据的模板变量showpage
    $smarty->assign("shopping",$shopping);
}
	$smarty->assign('title','Smarty+Adodb完成数据分页显示');
	$smarty->display('index.html');
	
?>
