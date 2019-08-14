<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>类的常量</title>
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
class SportObject{
	const BOOK_TYPE = '计算机图书';
	public $object_name;						//声明常量用来存放商品名称
	function setObjectName($name){				//声明方法setObjectName()
		$this -> object_name = $name;			//设置成员变量值
	}
	function getObjectName(){					//声明方法getObjectName()
		return $this -> object_name;
	}
}
$c_book = new SportObject();					//实例化对象
$c_book -> setObjectName("PHP");				//调用方法setObjectName
echo SportObject::BOOK_TYPE."->";				//输出常量BOOK_TYPE
echo $c_book -> getObjectName();				//调用方法getObjectName
?>
</body>
</html>
