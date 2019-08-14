<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>list()和each()</title>
</head>

<body>
<form name="form1" method="post">
     <table width="587" border="1" cellpadding="1" cellspacing="1" bordercolor="#66CC33" bgcolor="#FFFFFF">
       <tr>
         <td width="95" height="30" align="right" bgcolor="#CCFF33">输入</td>
         <td width="479" height="30" bgcolor="#CCFF33">&nbsp;           
         书名<input name="book" type="text" class="inputcss" id="book" size="24">    
         作者<input name="author" type="text" class="inputcss" id="author" size="16">
         &nbsp;
         <input name="submit" type="submit"  value="提交"></td>
       </tr>
  </table>
</form>
<?php
//输出数据
while(list($name,$value)=each($_POST)){
	if($name!="submit"){
  	  echo "$name=$value<br>";
	}
}
?>
</body>
</html>
