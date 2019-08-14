<?php
	include_once "conn/conn.php";				//连接数据库
	require_once("system/system.inc.php");  	//调用指定的文件
	$result=mysqli_query($conn,"select * from tb_book where id order by id limit 3"); 		//执行select查询语句
	$array=array();								//定义空数组
	while($myrow=mysqli_fetch_array($result)){
		array_push($array,$myrow);				//将读取到的数据写入到数组中
	}
	if(!$array){		
		$smarty->assign("iscommo","F");		//判断如果执行失败则输出模板变量iscommo的值为F 
	}else{
		$smarty->assign("iscommo","T");		//判断如果执行成功，则输出模板变量iscommo的值为T，
    	$smarty->assign("arraybook",$array);	//定义模板变量arraybook，输出数据库中数据
	} 	
	$smarty->display('index.html');				//执行模板文件
?>