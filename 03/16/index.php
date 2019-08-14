<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>可变变量</title>
</head>
<body>
<?php
$a = "b";			//声明变量$a
$b = "我喜欢PHP";		//声明变量$b
echo $a ;     		//输出变量$a
echo "<br>" ;
echo $$a ;    		//通过可变变量输出$bֵ
?>

</body>
</html>
