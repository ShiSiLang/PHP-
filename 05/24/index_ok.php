<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习3</title>
</head>

<body>
<?php
$text="检索的字符串";
$content=$_POST['content'];
echo str_ireplace($content,"<font color='red'><strong>".$content."</strong></font>",$text);
?>
</body>
</html>
