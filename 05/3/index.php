<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>rtrim函数</title>
</head>

<body>
<?php
$str="  (:@_@  展软件开发雄风  @_@:)   ";
echo rtrim($str);
echo "<br>";
echo rtrim($str," @_@:)");
?>
</body>
</html>
