<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>浏览目录</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php  
	$path = '/Users/youjunliang/Desktop/PHP/13/6';
	if(is_dir($path)){
		$dir = scandir($path);
		foreach($dir as $value){
			echo $value."<br>";
		}
	}else{
		echo "目录路径错误";
	}
?>
</body>
</html>
