<?php
    include("../config.php");
    $obj = array(array("id" => 1, "bigclass" => "�����ͼ��","smallclass" => array(array("s_id" => 1, "s_type" => "PHP"))),array("id" => 2, "bigclass" => "��ʷ����","smallclass" => array(array("s_id" => 2, "s_type" => "�й���ʷ"), array("s_id" => 3, "s_type" => "������ʷ"))),array("id" => 3, "bigclass" => "����С˵","smallclass" => array(array("s_id" => 4, "s_type" => "����С˵"),array("s_id" => 5, "s_type" => "�ƻ�С˵"))));
	$smarty->assign('title','sectionѭ������');
    $smarty->assign("obj", $obj);
    $smarty->display("08/index.html");
?> 
