<?php
header('Content-Type:text/html;charset=utf-8');
?>
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
</style>
<?php
/*  第一种方法  */
$xml_1 = simplexml_load_file("5.xml");
print_r($xml_1);
/*  第二种方法  */
$str = <<<XML
<?xml version='1.0' encoding='gb2312'?>
<Object>
	<ComputerBook>
		<title>PHP从入门到精通</title>
	</ComputerBook>
</Object>
XML;
$xml_2 = simplexml_load_string($str);
echo '<br>';
print_r($xml_2);
/*  第三种方法  */
$dom = new domDocument();
$dom -> loadXML($str);
$xml_3 = simplexml_import_dom($dom);
echo '<br>';
print_r($xml_3);
?>