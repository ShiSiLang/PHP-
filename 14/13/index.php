<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>抽象类</title>
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
	abstract class CommodityObject{						
		abstract function service($getName,$price,$num);
	}
	class MyBook extends CommodityObject{
		function service($getName,$price,$num){
			echo '您购买的商品是:'.$getName.'该商品的价格是:'.$price.' 元';
			echo '您购买的数量为:'.$num.' 本';
			echo '如果发现缺页，损坏请在3日内更换';
		}
	}
	class MyComputer extends CommodityObject{	
		function service($getName,$price,$num){
			echo '您购买的商品是:'.$getName.'该商品的价格是:'.$price.' 元';
			echo '您购买的数量为:'.$num.' 台';
			echo '如果发现认为质量问题，请在3个月内更换';
		}
	}
	$book = new MyBook();		
	$computer = new MyComputer();
	$book -> service('PHP',85,3);
	echo '<p>';
	$computer -> service('笔记本',8500,1);
?>
</body>
</html>
