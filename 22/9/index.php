<?php
header('Content-Type:text/html;charset=utf-8');
$str=<<<XML
<?xml version='1.0' encoding='gb2312'?>
<object name='商品'>
	<book>
		<computerbook type='PHP入门应用'>PHP从入门到精通</computerbook>
	</book>
</object>
XML;

$xml = simplexml_load_string($str);
echo $xml['name'].'<br />';
$xml->book->computerbook['type'] = iconv('gb2312','utf-8','PHP程序员必备工具');
$xml->book->computerbook = iconv('gb2312','utf-8','PHP函数参考大全');
echo $xml->book->computerbook['type'].' => ';
echo $xml->book->computerbook;
?>