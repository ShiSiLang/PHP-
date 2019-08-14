<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>strstr函数</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
-->
</style></head>
<body>
<center>
<form method="post" action="index.php" enctype="multipart/form-data">
	<input type="hidden" name="action" value="upload" />
	<input type="file" name="u_file"/>
	<input type="submit" value="上传" />
</form>
<?php
	if(isset($_POST['action']) && $_POST['action'] == "upload"){			//判断提交按钮是否为空
		$file_path = "./uploads\\";			//定义图片在服务器的存储位置
		$picture_name=$_FILES['u_file']['name'];	//通过上传图片获取名称
		$picture_name=strstr($picture_name , ".");	//ͨ通过strstr()函数截取上传图片的后缀
		if($picture_name!= ".jpg"){					//根据后缀判断上传图片格式是否符合要求
			echo "<script>alert('上传图片格式不正确，请重新上传'); window.location.href='index.php';</script>";
		}else if($_FILES['u_file']['tmp_name']){
			move_uploaded_file($_FILES['u_file']['tmp_name'],$file_path.$_FILES['u_file']['name']);		//执行图片上传
			echo "图片上传成功!";
		}
		else
			echo "图片上传失败";
	}
?>
</center>
</body>
</html>
