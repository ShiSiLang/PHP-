<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>__sleep()和__wakeup()</title>
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
	private $type = 'DIY';
	public function getType(){
		return $this -> type;
	}
	public function __sleep(){
		echo '使用serialize()函数将对象保存起来，可以存放到文本文件，数据库等地方。<br>';
		return array('type');
	}
	public function __wakeup(){
		echo '当需要改数据时，使用unserialize()对已经序列化的字符串进行操作，将其转换为对象<br>';
	}
}
$myBook = new SportObject();
$i = serialize($myBook);
echo '序列化之后的字符串是:'.$i.'<br>';
$reBook = unserialize($i);
echo '还原后的成员变量是:'.$reBook -> getType();
?> 
</body>
</html>
