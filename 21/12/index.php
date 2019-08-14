<?php
require_once("system/system.inc.php");  //调用指定的文件
function unHtml($params) {				//创建自定义函数
	extract($params);					//将数组中的数据转换到变量中
	$str = htmlspecialchars ( $text);
	$str = str_replace ( '<br>', '\n', $str );
	$str = nl2br ( $str );
	$str = str_replace ( ' ', '&nbsp;', $str );
	return $str;
}
$smarty->register_function("Util", "unHtml");	//注册模板函数
$array=$admindb->ExecSQL("select * from tb_guestbook order by createtime desc",$conn); 		//执行select查询语句
if(!$array){		
	$smarty->assign("iscommo","F");		//判断如果执行失败则输出模板变量iscommo的值为F 
}else{

	$smarty->assign("iscommo","T");	//判断如果执行成功，则输出模板变量iscommo的值为T，
    $smarty->assign("array",$array);	//定义模板变量arraybbstell，输出数据库中数据
} 	
	$smarty->assign('title','应用register_function()方法注册Smarty模板函数');
	$smarty->display('index.html');		//指定模板页
?>
