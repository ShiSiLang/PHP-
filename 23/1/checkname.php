<?php
	header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
	$link=mysqli_connect("localhost","root","111");
	mysqli_select_db($link,"db_database23");
	//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
	mysqli_query($link,"set names gb2312");
	$username=$_GET['username'];
	$sql=mysqli_query($link,"select * from tb_user where name='".$username."'");
	$info=mysqli_fetch_array($sql);
	if ($info){
		echo "�ܱ�Ǹ!�û���[".$username."]�Ѿ���ע��!";
	}else{
		echo "ף����!�û���[".$username."]û�б�ע��!";
	}
?>
