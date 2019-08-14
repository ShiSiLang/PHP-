<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>::的使用</title>
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
	const NAME = 'computer';					//常量NAME
	function __construct(){						//构造方法
		echo '父类--本月图书类冠军为：'.Book::NAME.' ';  //输出默认值
	}
}
class l_book extends Book{						//Book类的子类
	const NAME = 'foreign language';			//声明常量
	function __construct(){						//子类的构造方法
		parent::__construct();					//调用父类构造方法
		echo "\n";
		echo '子类--本月图书类冠军为：'.self::NAME.' ';	//输出本类中的默认值
	}
}
$obj = new l_book();							//实例化对象
?>
</body>
</html>
