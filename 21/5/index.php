<?php
	include_once "../config.php";
	$str1 = '����һ��ʵ����';
	$str2 = "\nͼ��->�������->php\n��������php�����ŵ���ͨ��";
	$str3 = "\n�۸񣺣�59/����";
	$smarty->assign('title','ʹ�ñ������η���');
	$smarty->assign('str',$str1.$str2.$str3);
	$smarty->display('05/index.html');
?>