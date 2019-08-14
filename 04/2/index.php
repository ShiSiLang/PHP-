<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>if else语句</title>
</head>
<body>
<?php
	$num = rand(1,31);			//生成一个1-31之内的数字
	if ($num % 2 == 0){			//判断变量是否是偶数
		echo "变量$num 是偶数";//如果为偶数
	}else {
		echo "变量$num 是奇数";//如果为奇数
	}
?>
</body>
</html>
