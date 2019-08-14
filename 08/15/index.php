<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习2</title>
</head>

<body>
<form name="form1" method="post" action="">
  搜索关键字
  <input name="content" type="text" id="content">
  <input type="submit" name="Submit" value="提交">
</form>
<?php
if(isset($_POST['Submit']) && $_POST['Submit']=="提交"){
	echo "进行搜索的关键字十";
	echo $_POST['content'];
}
?>
</body>
</html>
