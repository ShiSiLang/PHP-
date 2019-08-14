<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>foreach()</title>
</head>
<body>
<?php
 $url = array('编程词典网'=>'www.mrbccd.com',
              '编程体验网'=>'www.bcty365.com',
              '编程资源网'=>'www.bc110.com',
              );
foreach ($url as $link) {
  echo $link.'<br>';
} 
?>
</body>
</html>
