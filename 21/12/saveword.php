<?php
require_once("system/system.inc.php");  //����ָ�����ļ�
$title=$_POST['title'];					//��ȡ����
$content=$_POST['content'];				//��ȡ����
$createtime=date("Y-m-j H:i:s");		//��ȡ�ύʱ��
$arraybbstell=$admindb->ExecSQL("insert into tb_guestbook(title,content,createtime,integral) values ('$title','$content','$createtime',0)",$conn); 		//ִ����Ӳ���
if($arraybbstell){
 	echo "<script>alert('���Է���ɹ�!');window.location.href='index.php';</script>";
}else{
  	echo "<script>alert('���Է���ʧ��!');history.back();</script>";
} 
?>