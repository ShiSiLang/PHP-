<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>对象的比较</title>
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
		private $name;
		function __construct($name){
			$this -> name = $name;
		}
	}
	$book = new SportObject('book');
	$cloneBook = clone $book;
	$referBook = $book;
	if($cloneBook == $book){
		echo '$cloneBook = clone $book;  两个对象的内容相等<br>';
	}else{
		echo '$cloneBook = clone $book;  两个对象的内容不相等<br>';
	}
	if($cloneBook === $book){
		echo '$cloneBook = clone $book;  两个对象的引用地址相等<br>';
	}else{
		echo '$cloneBook = clone $book;  两个对象的引用地址不相等<br>';
	}

	if($referBook == $book){
		echo '$referBook = $book;  两个对象的内容相等<br>';
	}else{
		echo '$referBook = $book;  两个对象的内容不相等<br>';
	}
	if($referBook === $book){
		echo '$referBook = $book;  两个对象的引用地址相等<br>';
	}else{
		echo '$referBook = $book;  两个对象的引用地址不相等<br>';
	}
?>
</body>
</html>
