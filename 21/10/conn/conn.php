<?php 
$conn=mysqli_connect("localhost","root","111") or die('����ʧ��:' . mysql_error());
mysqli_select_db($conn,"db_database21") or die ('���ݿ�ѡ��ʧ��:' . mysql_error());
mysqli_query($conn,"set names gb2312");
?>
