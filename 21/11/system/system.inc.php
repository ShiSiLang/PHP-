<?php
require("system.smarty.inc.php");
require("system.class.inc.php");
//���ݿ�������ʵ����
$connobj=new ConnDB("mysql","localhost","root","111","db_database21",false);
$conn=$connobj->GetConnId();
//���ݿ������ʵ����
$admindb=new AdminDB();
//��ҳ��ʵ����
$seppage=new SepPage();

$smarty=new SmartyProject();

?>