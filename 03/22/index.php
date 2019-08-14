<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注意点</title>
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
<div align="left">
<?PHP 
$value="100";					//声明一个变量$value
echo "\$value = \"$value\"";
echo "<p>\$value==100: ";
var_dump($value==100);       	//���Ϊ:bool(true)
echo "<p>\$value==ture: ";
var_dump($value==true);       	//���Ϊ:bool(true)
echo "<p>\$value!=null: ";
var_dump($value!=null);       	//���Ϊ:bool(true)
echo "<p>\$value==false: ";
var_dump($value==false);      	//���Ϊ:bool(false)
echo "<p>\$value === 100: ";
var_dump($value===100);      	//���Ϊ:bool(false)
echo "<p>\$value===true: ";
var_dump($value===true);      	//���Ϊ:bool(true)
echo "<p>(10/2.0 !== 5): ";
var_dump(10/2.0 !==5);        	//���Ϊ:bool(true)
?>
</div>
</body>
</html>
