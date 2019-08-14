<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>sort()函数</title>
</head>

<body>
<?php
 $array=array(76,32,99,24,8,75);
 $array1=sort($array);	
 for($i=0;$i<count($array);$i++){
   echo $array[$i]."&nbsp;&nbsp;";
 }
?>
</body>
</html>
