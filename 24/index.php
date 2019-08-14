<?php 
session_start(); 
header ( "Content-type: text/html; charset=UTF-8" ); 						//设置文件编码格式
require("system/system.inc.php");  						//包含配置文件
if(isset($_GET["page_type"])){
	$page_type=$_GET["page_type"];
}else{
	$page_type="";
}
include_once("login.php");
include_once("public.php");
include_once("links.php");

switch($page_type){
	case "hyzx":
		include_once "member.php";
		$smarty->assign('admin_phtml','member.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'allpub':
	    include_once 'allpub.php';
		$smarty->assign('admin_phtml','allpub.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'nom':
		include_once 'allnom.php';
		$smarty->assign('admin_phtml','allnom.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'new':
		include_once 'allnew.php';
		$smarty->assign('admin_phtml','allnew.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'hot':
		include_once 'allhot.php';
		$smarty->assign('admin_phtml','allhot.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'shopcar':
		include_once 'myshopcar.php';
		$smarty->assign('admin_phtml','myshopcar.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'settle':
		include_once 'settle.php';
		$smarty->assign('admin_phtml','settle.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	case 'queryform':
		include_once 'queryform.php';
		$smarty->assign('admin_phtml','queryform.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变量
	break;
	default:
		include_once 'newhot.php';
		$smarty->assign('admin_phtml','newhot.tpl');	//将PHP脚本文件对应的模板文件名称赋给模板变
	break;
}
$smarty->display("index.tpl");							//指定模板页
?>
