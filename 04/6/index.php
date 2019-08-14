<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>while do语句</title>
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
<div align="center">
<?php
	$num = 1;					//声明一个变量$num
	while($num != 1){			//使用while循环输出
		echo "while循环";		//这句话不会输出
	}
	do{							//使用do...while循环输出
		echo "do...while循环";	//这句话会输出
	}while($num != 1);
?>
</div>
</body>
</html>
