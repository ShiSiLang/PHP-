<?php
require_once("system/system.inc.php");  //����ָ�����ļ�
function unHtml($params) {				//�����Զ��庯��
	extract($params);					//�������е�����ת����������
	$str = htmlspecialchars ( $text);
	$str = str_replace ( '<br>', '\n', $str );
	$str = nl2br ( $str );
	$str = str_replace ( ' ', '&nbsp;', $str );
	return $str;
}
$smarty->register_function("Util", "unHtml");	//ע��ģ�庯��
$array=$admindb->ExecSQL("select * from tb_guestbook order by createtime desc",$conn); 		//ִ��select��ѯ���
if(!$array){		
	$smarty->assign("iscommo","F");		//�ж����ִ��ʧ�������ģ�����iscommo��ֵΪF 
}else{

	$smarty->assign("iscommo","T");	//�ж����ִ�гɹ��������ģ�����iscommo��ֵΪT��
    $smarty->assign("array",$array);	//����ģ�����arraybbstell��������ݿ�������
} 	
	$smarty->assign('title','Ӧ��register_function()����ע��Smartyģ�庯��');
	$smarty->display('index.html');		//ָ��ģ��ҳ
?>
