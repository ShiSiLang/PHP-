<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>自增自减运算符</title>
</head>
<body>
<?php 
echo "规则是：\n";
echo "++在后，先返回原值，再将当前值加1\n";
echo "++在前，先加1，再返回新的值\n";
echo "--在后，先返回原值，再将当前值减1\n";
echo "--在前，先减1，再返回新的值\n";

$a = 6;
$b = 9;
echo "\$a = $a , \$b = $b<p>";
echo "\$a++ =  " . $a++ ."<br>" ; 	//++在后，先返回原值，再将当前值加1
echo "\$a: ".$a."<p>" ;
echo "++\$b = " . ++$b ."<br>" ;   	//++在前，先加1，再返回新的值
echo "\$b: ".$b ;
echo "<hr><p>";
echo "\$a-- = " . $a-- ."<br>" ;     //--在后，先返回原值，再将当前值减1
echo "\$a: ".$a."<p>" ;
echo "\$b = " . --$b ."<br>" ;    	//--在前，先减1，再返回新的值
echo "\$b: ".$b;
?>
</body>
</html>
