<?php
header('Content-Type:text/html;charset=utf-8');
$str=<<<XML
<?xml version='1.0' encoding='gb2312'?>
<object name='��Ʒ'>
	<book>
		<computerbook type='PHP����Ӧ��'>PHP�����ŵ���ͨ</computerbook>
	</book>
</object>
XML;

$xml = simplexml_load_string($str);
echo $xml['name'].'<br />';
$xml->book->computerbook['type'] = iconv('gb2312','utf-8','PHP����Ա�ر�����');
$xml->book->computerbook = iconv('gb2312','utf-8','PHP�����ο���ȫ');
echo $xml->book->computerbook['type'].' => ';
echo $xml->book->computerbook;
?>