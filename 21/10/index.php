<?php
	include_once "conn/conn.php";				//�������ݿ�
	require_once("system/system.inc.php");  	//����ָ�����ļ�
	$result=mysqli_query($conn,"select * from tb_book where id order by id limit 3"); 		//ִ��select��ѯ���
	$array=array();								//���������
	while($myrow=mysqli_fetch_array($result)){
		array_push($array,$myrow);				//����ȡ��������д�뵽������
	}
	if(!$array){		
		$smarty->assign("iscommo","F");		//�ж����ִ��ʧ�������ģ�����iscommo��ֵΪF 
	}else{
		$smarty->assign("iscommo","T");		//�ж����ִ�гɹ��������ģ�����iscommo��ֵΪT��
    	$smarty->assign("arraybook",$array);	//����ģ�����arraybook��������ݿ�������
	} 	
	$smarty->display('index.html');				//ִ��ģ���ļ�
?>