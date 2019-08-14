<?php
	include '../config.php';
	$arr = array("object"=>'book',"type"=>'computer');
	$str1 = array('name'=>'php');
	$str2 = array('publishing'=>'qinghua');
	$smarty->assign('title','สนำรappend');
	$smarty->assign('arr',$arr);
	$smarty->append('arr',$str1,true);
	$smarty->append('arr',$str2);
	$smarty->display('09/index.html');
?>