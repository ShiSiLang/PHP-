<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>private私有成员</title>
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
	private $name = 'computer';		//声明私有变量$name
	public function setName($name){	//设置私有变量方法
		$this -> name = $name;
	}
	public function getName(){		//读取私有变量方法
		return $this -> name;
	}
}
class LBook extends Book{			//Book类的子类
}
$lbook = new LBook();				//实例化对象
echo '正确操作私有变量的方法:';
$lbook -> setName("PHP");			//正确操作私有变量
echo $lbook -> getName();
echo '<br>直接操作私有变量的结果:';		//错误操作私有变量
echo Book::$name;
?>
</body>
</html>
