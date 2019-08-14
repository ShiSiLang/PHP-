<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>算术运算符</title>
</head>
<body>
<?php
	$a = -100;							//声明变量$a
	$b = 50;							//声明变量$b
	$c = 30;							//声明变量$c
	echo "\$a = ".$a.",";				//输出变量a
	echo "\$b = ".$b.",";				//输出变量b
	echo "\$c = ".$c."<p>";				//输出变量c
	echo "\$a + \$b = ".($a + $b)."<br>";	//加法运算
	echo "\$a - \$b = ".($a - $b)."<br>";;	//减法运算
	echo "\$a * \$b = ".($a * $b)."<br>";	//乘法运算
	echo "\$a / \$b = ".($a / $b)."<br>";	//除法运算
	echo "\$a % \$c = ".($a % $c)."<br>";	//求余运算
?>
</body>
</html>
