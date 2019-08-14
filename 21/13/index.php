<?php
	include_once "conn/conn.php";		//连接数据库
	require_once("system/system.inc.php");  //调用指定的文件
	$sql = "select * from tb_public";	//编写查询语句
	$rst = mysqli_query($conn,$sql);					//执行查询操作
	$arr=array();
	while($myrow=mysqli_fetch_array($rst)){
	 array_push($arr,$myrow);	
	}	
	$smarty->assign('arr',$arr);							//将返回的结果集存储到指定的Smarty模板变量中
	$smarty->display('index.html');							//执行模板文件
?>