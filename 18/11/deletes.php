<?php
header ( "Content-type: text/html; charset=utf-8" ); //设置文件编码格式
include_once("conn/conn.php");							//连接数据库
if($_POST['action'] == "delall"){						//判断是否执行删除操作
	if(count($_POST['chk']) <= 0){						//判断提交的删除记录是否为空
		echo "<script>alert('请选择记录');history.go(-1);</script>";
	}else{
		for($i = 0; $i < count($_POST['chk']); $i++){		//for语句循环读取复选框提交的值，
			$sqlstr = "delete from tb_demo02 where id = ".$_POST['chk'][$i];	//循环执行删除操作
			mysqli_query($conn,$sqlstr);						//执行删除操作
		}
		echo "<script>alert('删除成功');location='index.php';</script>";
	}

}
?>
