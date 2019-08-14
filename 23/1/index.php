<html>
<head>
<title>在PHP中应用AJAX技术检测用户名</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	margin-bottom: 0px;
	background-color: #64284A;
}
td{
font-size:12px;
}
# style5 {
	font-family: "文鼎淹水体";
	font-size: 18pt;
	color: #64284A;
}
# style2 {font-size: 16px; font-family: "文鼎霹雳体"; color: #64284A;}
# style3 {font-family: "文鼎圆立体"}
# style4 {font-family: "文鼎淹水体"}
-->
</style>
</head>
<body>
<script language="javascript">
var http_request = false;
function createRequest(url) {
	//初始化对象并发出XMLHttpRequest请求
	http_request = false;
	if (window.XMLHttpRequest) { 										//Mozilla等其他浏览器
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { 								//IE浏览器
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("不能创建XMLHTTP实例!");
		return false;
	}
	http_request.onreadystatechange = alertContents;   					 //指定响应方法
	
	http_request.open("GET", url, true);								 //发出HTTP请求
	http_request.send(null);
}
function alertContents() {   											 //处理服务器返回的信息
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			alert(http_request.responseText);
		} else {
			alert('您请求的页面发现错误');
		}
	}
}
</script>
<script language="javascript">
function checkName() {
	var username = form1.username.value;
	if(username=="") {
		window.alert("请填写用户名!");
		form1.username.focus();
		return false;
	}
	else {
		createRequest('checkname.php?username='+username+'&nocache='+new Date().getTime());
	}
}
</script>
<form name="form1" method="post" action="">
  <table width="1003" height="628" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/bg.JPG"><table width="1003" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="242" height="346">&nbsp;</td>
            <td width="532" height="30" align="center" valign="bottom" class="style5"><span class="style2">用户注册<span class="style3"> <span class="style4"></span></span></span></td>
            <td width="229">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><table width="92%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="29%" height="30" align="center">用 户 名：</td>
                  <td width="71%" height="24"><input name="username" type="text" id="username" size="20">
                      <a href="#" onClick="checkName();">[检测用户名]</a> </td>
                </tr>
                <tr>
                  <td height="24" align="center">真实姓名：</td>
                  <td height="24"><input name="truename" type="text" id="truename" size="20">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">密&nbsp;&nbsp;&nbsp;&nbsp;码：</td>
                  <td height="24"><input name="pwd1" type="password" id="pwd1" size="20">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">确认密码：</td>
                  <td height="24"><input name="pwd2" type="password" id="pwd2" size="20">
                  * </td>
                </tr>
                <tr>
                  <td height="24" align="center">性&nbsp;&nbsp;&nbsp;&nbsp;别：</td>
                  <td height="24"><input name="sex" type="radio" value="男" checked>
                  男
                    <input type="radio" name="sex" value="女">
                  女</td>
                </tr>
                <tr>
                  <td height="24" align="center" style="padding-left:10px">Email：</td>
                  <td height="24" class="word_grey"><input name="email" type="text" id="email" size="28">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">个人主页：</td>
                  <td height="24" class="word_grey"><input name="homepage" type="text" id="homepage" size="28"></td>
                </tr>
                <tr>
                  <td height="40" colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input name="imageField" type="image" src="images/submit.gif" width="64" height="20" border="0">
&nbsp;
                  <input name="imageField2" type="image" src="images/reset.gif" width="64" height="20" border="0"></td>
                </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
</body>
</html>
