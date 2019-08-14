<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>添加数据</title>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<center>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
    	<td  height="106" background="images/banner.jpg">&nbsp;</td>
    </tr>
	<tr>
		<td>
		<table width="100%" height="27" border="0" cellpadding="0" cellspacing="0" background="images/link.jpg">
			 <tr>
      <td width="188" align="center" valign="middle"><b>
<?php echo date("Y-m-d")." ";?></b></td>
      <td width="98" align="center" valign="middle"><a href="index.php">浏览数据</a></td>
      <td width="100" align="center" valign="middle"><a href="#">添加图书</a></td>
      <td width="99" align="center" valign="middle"><a href="#">简单查询</a></td>
      <td width="99" align="center" valign="middle"><a href="#">高级查询</a></td>
      <td width="100" align="center" valign="middle"><a href="#">分组统计</a></td>
      <td width="97" align="center" valign="middle"><a href="#">退出系统</a></td>
    </tr>
		</table>
		</td>
	</tr>
</table>
<table width="799" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center" valign="middle">
  <form name="intFrom" method="post" action="index_ok.php">

		<table width="100%" height="200"  border="0" cellpadding="0" cellspacing="0">
          <tr align="center" valign="middle">
		  <td width="30%" class="c_td">&nbsp;</td>
            <td width="10%" align="right" class="c_td">&nbsp;</td>
            <td width="30%" class="c_td">&nbsp;</td>
			<td width="30%" class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">书名：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="bookname"></td>
			<td class="c_td">&nbsp;</td>
          </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">价格：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="price"></td>
          	<td class="c_td">&nbsp;</td>
		  </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">出版时间：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="f_time"></td>
            <td class="c_td">&nbsp;</td>
		  </tr>
          <tr>
		  <td class="c_td">&nbsp;</td>
            <td align="right" valign="middle" class="c_td">所属类别：</td>
            <td align="center" valign="middle" class="c_td"><input type="text" name="type"></td>
            <td class="c_td">&nbsp;</td>
		  </tr>
		  <tr align="center" valign="middle">
		  <td class="c_td">&nbsp;</td>
            <td colspan="2" class="c_td">
			<input type="hidden" name="action" value="insert">
			<input type="submit" name="Submit" value="添加">
              <input type="reset" name="reset" value="重置"></td>
           <td class="c_td">&nbsp;</td>
	      </tr>
        </table>
      </form>
</td>
    </tr>
</table>
<table width="797" height="48" border="0" cellpadding="0" cellspacing="0" background="images/bottom.jpg">
	<tr><td>&nbsp;</td></tr>
</table>
</center>
</body>
</html>
