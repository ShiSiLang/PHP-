<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>函数返回值</title>
</head>
<body>
<?php 
	function values($price,$weight=0.45){		//定义一个函数，函数中的一个参数有默认值
		$price=$price+($price*$weight); 		//计算物品的金额
		return $price;						//返回金额
	}
	echo values(100);						//调用函数

?>

</body>
</html>
