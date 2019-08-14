<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>JS实现二级菜单</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
a {
	font-size: 12px;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
-->
</style></head>

<body>
<table width="761" height="218" border="1" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" background="images/bg.jpg" bgcolor="#3F8701">
  <tr>
    <td valign="top"><table width="761" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td height="48" colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td height="27" colspan="2" align="right"><table width="761" height="20" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="396">&nbsp;</td>
            <td width="67" align="center"><a href="index.php">首页&nbsp;ҳ</a></td>
            <td width="75" align="center"><a href="#" onMouseMove="Lmenu('购物车')">购物车</a></td>
            <td width="75" align="center"><a href="#" onMouseMove="Lmenu('会员中心')">会员中心</a></td>
            <td width="74" align="center"><a href="#" onMouseMove="Lmenu('在线帮助')">在线帮助</a></td>
            <td width="61" align="center"><a href="index.php">啦啦</a></td>
            <td width="13">&nbsp;</td>
          </tr>
        </table>          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
      </tr>
      <tr>
        <td width="226" height="20" align="right">&nbsp;</td>
        <td width="535" align="right"> <div id="submenu">&nbsp;</div></td>
		   <script language="javascript">
			function Lmenu(value){
				switch (value){
					case "购物车":
						submenu.innerHTML=" <a href='#'>购物车</a> | <a href='#'>购物车</a> | <a href='#'>购物车</a> ";
						break;			
					case "会员中心":
						submenu.innerHTML=" <a href='#'>会员中心</a> | <a href='#'>会员中心</a> |<a href='#'>会员中心</a> | <a href='#'>会员中心</a> | <a href='#'>会员中心</a> ";
						break;					
					case "在线帮助":
						submenu.innerHTML=" <a href='#'>在线帮助</a> | <a href='#'>在线帮助</a> | <a href='#'>在线帮助</a> ";
						break;						
					}
			}
		 </script>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
