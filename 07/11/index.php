<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>count()函数</title>
</head>
<body>
<?php
$array = array("php" => array("PHP函数参考大全","PHP程序开发范例宝典","PHP网络编程自学手册"),
               "asp" => array("ASP经验技巧宝典")
         );												//����һ����ά����
echo count($array,COUNT_RECURSIVE);						//�ݹ�ͳ������Ԫ�صĸ���
?>
</body>
</html>
