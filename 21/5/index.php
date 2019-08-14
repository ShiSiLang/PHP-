<?php
	include_once "../config.php";
	$str1 = '这是一个实例。';
	$str2 = "\n图书->计算机类->php\n书名：《php从入门到精通》";
	$str3 = "\n价格：￥59/本。";
	$smarty->assign('title','使用变量修饰方法');
	$smarty->assign('str',$str1.$str2.$str3);
	$smarty->display('05/index.html');
?>