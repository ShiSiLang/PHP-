<?php
	$conn=mysqli_connect("localhost","root","111") or die("数据库连接失败".mysql_error());
	mysqli_select_db($conn,"db_database15");
	mysqli_query($conn,"set names gb2312");
?>
