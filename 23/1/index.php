<html>
<head>
<title>��PHP��Ӧ��AJAX��������û���</title>
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
	font-family: "�Ķ���ˮ��";
	font-size: 18pt;
	color: #64284A;
}
# style2 {font-size: 16px; font-family: "�Ķ�������"; color: #64284A;}
# style3 {font-family: "�Ķ�Բ����"}
# style4 {font-family: "�Ķ���ˮ��"}
-->
</style>
</head>
<body>
<script language="javascript">
var http_request = false;
function createRequest(url) {
	//��ʼ�����󲢷���XMLHttpRequest����
	http_request = false;
	if (window.XMLHttpRequest) { 										//Mozilla�����������
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { 								//IE�����
		try {
			http_request = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try {
				http_request = new ActiveXObject("Microsoft.XMLHTTP");
		   } catch (e) {}
		}
	}
	if (!http_request) {
		alert("���ܴ���XMLHTTPʵ��!");
		return false;
	}
	http_request.onreadystatechange = alertContents;   					 //ָ����Ӧ����
	
	http_request.open("GET", url, true);								 //����HTTP����
	http_request.send(null);
}
function alertContents() {   											 //������������ص���Ϣ
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			alert(http_request.responseText);
		} else {
			alert('�������ҳ�淢�ִ���');
		}
	}
}
</script>
<script language="javascript">
function checkName() {
	var username = form1.username.value;
	if(username=="") {
		window.alert("����д�û���!");
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
            <td width="532" height="30" align="center" valign="bottom" class="style5"><span class="style2">�û�ע��<span class="style3"> <span class="style4"></span></span></span></td>
            <td width="229">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><table width="92%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="29%" height="30" align="center">�� �� ����</td>
                  <td width="71%" height="24"><input name="username" type="text" id="username" size="20">
                      <a href="#" onClick="checkName();">[����û���]</a> </td>
                </tr>
                <tr>
                  <td height="24" align="center">��ʵ������</td>
                  <td height="24"><input name="truename" type="text" id="truename" size="20">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">��&nbsp;&nbsp;&nbsp;&nbsp;�룺</td>
                  <td height="24"><input name="pwd1" type="password" id="pwd1" size="20">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">ȷ�����룺</td>
                  <td height="24"><input name="pwd2" type="password" id="pwd2" size="20">
                  * </td>
                </tr>
                <tr>
                  <td height="24" align="center">��&nbsp;&nbsp;&nbsp;&nbsp;��</td>
                  <td height="24"><input name="sex" type="radio" value="��" checked>
                  ��
                    <input type="radio" name="sex" value="Ů">
                  Ů</td>
                </tr>
                <tr>
                  <td height="24" align="center" style="padding-left:10px">Email��</td>
                  <td height="24" class="word_grey"><input name="email" type="text" id="email" size="28">
                  *</td>
                </tr>
                <tr>
                  <td height="24" align="center">������ҳ��</td>
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
