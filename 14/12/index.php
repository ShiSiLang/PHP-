<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>final关键字</title>
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
	final class SportObject{
		function  __construct(){
			echo 'initialize object';
		}
	}
	/* class MyBook extends SportObject{
		static function exam(){
			echo "You can't see me";
		}
	}   // 直接报错，无法执行 */
	// final修饰的类不可以被继承
	MyBook::exam();
?>
</body>
</html>
