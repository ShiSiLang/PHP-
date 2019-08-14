<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>break语句</title>
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
while(true){								//使用while循环
	$tmp = rand(1,20);						//声明一个随机数变量$tmp
	echo $tmp." ";							//输出随机数
	if($tmp == 10){							//判断随机数是否等于10
		echo "<p>变量等于10，终止循环";
		break;								//如果等于10，跳出循环
	}
}
?>
</body>
</html>
