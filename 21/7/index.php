<?php
	include_once '../config.php';
	$infobook = array('object'=>'book','type'=>'computer','name'=>'PHP从入门到精通','publishing'=>'清华大学出版社');
	$smarty->assign('title','使用foreach循环输出数组内容');
	$smarty->assign('infobook',$infobook);
	$smarty->display('07/index.html');
?>