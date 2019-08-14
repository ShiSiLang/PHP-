<?php
header("Content-type:text/html;charset=utf-8"); //设置文件编码格式
include_once("conn/conn.php");//包含数据库连接文件
if($_POST['action'] == "update"){
	if(!($_POST['bookname'] and $_POST['price'] and $_POST['f_time'] and $_POST['type'])){
		echo "输入不允许为空。点击<a href='javascript:onclick=history.go(-1)'>这里</a>返回";
	}else{
		$sqlstr = "update tb_demo02 set bookname = '".$_POST['bookname']."', price = '".$_POST['price']."', f_time = '".$_POST['f_time']."', type = '".$_POST['type']."' where id = ".$_POST['id'];//定义更新语句
		$result = mysqli_query($conn,$sqlstr);//执行更新语句
		if($result){
			echo "修改成功,点击<a href='index.php'>这里</a>查看";
		}else{
			echo "修改失败.<br>$sqlstr";
		}
	}
}
?>