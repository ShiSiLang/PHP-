<?php	
require_once("system/system.inc.php");  //����ָ�����ļ�     
$shopping=$seppage->ShowDate("select * from tb_book where id order by id ",$conn,3,isset($_GET["page"])?$_GET["page"]:"");		//���÷�ҳ�࣬ʵ�ַ�ҳ����  
if(!$shopping){
    $smarty->assign("istr","F");
}else{
    $smarty->assign("istr","T");
	$smarty->assign("showpage",$seppage->ShowPage("ͼ��","��","","a1")); //���������ҳ���ݵ�ģ�����showpage
    $smarty->assign("shopping",$shopping);
}
	$smarty->assign('title','Smarty+Adodb������ݷ�ҳ��ʾ');
	$smarty->display('index.html');
	
?>
