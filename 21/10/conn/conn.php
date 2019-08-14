<?php 
$conn=mysqli_connect("localhost","root","111") or die('连接失败:' . mysql_error());
mysqli_select_db($conn,"db_database21") or die ('数据库选择失败:' . mysql_error());
mysqli_query($conn,"set names gb2312");
?>
