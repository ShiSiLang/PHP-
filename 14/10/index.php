<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>protected保护成员</title>
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
class Book{
	protected $name = 'computer';	//声明保护变量$name
}
class LBook extends Book{			//Book类的子类
	public function showMe(){
		echo '对于protected修饰的变量，子类中可以直接调用，如$name = '.$this -> name;
	}
}
$lbook = new LBook();								//实例化对象
$lbook -> showMe();
echo '<p>但在其他的地方是不可以调用的，否则:';			//对私有变量进行操作
$lbook -> name = 'history';
?>
</body>
</html>
