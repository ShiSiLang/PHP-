<?php
	include_once '../config.php';
	$infobook = array('object'=>'book','type'=>'computer','name'=>'PHP�����ŵ���ͨ','publishing'=>'�廪��ѧ������');
	$smarty->assign('title','ʹ��foreachѭ�������������');
	$smarty->assign('infobook',$infobook);
	$smarty->display('07/index.html');
?>