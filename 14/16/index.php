<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>克隆对象</title>
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
	private $object_type = 'book';		//声明私有变量$object_type，并且赋值初始值为book
	public function setType($type){		//声明成员方法setType，为变量$object_type的值
		$this -> object_type = $type;
	}
	public function getType(){			//声明成员方法getType，返回变量$object_type的值
		return $this -> object_type;
	}
	public function __clone(){				//声明__clone()方法
		$this -> object_type = 'computer';  //将变量$object_type的值修改为computer
	}
}
$book1 = new SportObject();					//实例化对象$book1
$book2 = $book1;							//使用普通数据类型的方法给对象$book2赋值
$book2 -> setType('computer');				//改变对象$book2的值
echo '对象$book1的值为:'.$book1 -> getType(); //输出对象$book1的值
echo '<br>';
echo '对象$book2的值为:'.$book2 -> getType(); //输出对象$book2的值
//不难看出，对象$book2克隆了对象$book1的全部行为及属性，也拥有了属于自己的成员变量值。
?>

</body>
</html>
 