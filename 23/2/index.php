<html>
<head>
<title>��PHP��Ӧ��AJAX����ʵ�ֲ�������������</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	margin-bottom: 0px;
	background: #64284A;
}
td{
font-size:12px;
}
# style5 {
	font-family: "�Ķ���ˮ��";
	font-size: 18px;
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
			sort_id.innerHTML=http_request.responseText;				//����sort_id HTML�ı��滻��Ԫ������
		} else {
			alert('�������ҳ�淢�ִ���');
		}
	}
}
</script>
<script language="javascript">
function checksort() {
	var txt_sort = form1.txt_sort.value;
	if(txt_sort=="") {
		window.alert("����д�������!");
		form1.txt_sort.focus();
		return false;
	}
	else {
		createRequest('checksort.php?txt_sort='+txt_sort);
	}
}
</script>
<form name="form1" method="post" action="">
  <table width="1003" height="628" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td valign="top" background="images/bg.JPG"><table width="1003" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="204" height="346">&nbsp;</td>
            <td width="570" height="30" align="center" valign="bottom" class="style5"><span class="style2">����������<span class="style3"><span class="style4"></span></span></span></td>
            <td width="229">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><table width="93%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="17%" height="30" align="center">�������⣺</td>
                  <td height="24" colspan="3"><input name="txt_title" type="text" id="txt_title" size="50"></td>
                </tr>
                <tr>
                  <td align="center">�������</td>
                  <td width="14%" valign="baseline" id="sort_id">
					<table width="303" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td>
										<select name="select" >
										<?php
										$link=mysqli_connect("localhost","root","111");
										mysqli_select_db($link,"db_database23");
										//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax������encodeURIComponent��Ҫ�ύ�����Ľ��б���
										mysqli_query($link,"set names gb2312");
										$sql=mysqli_query($link,"select distinct * from tb_sort group by sort");
										$result=mysqli_fetch_object($sql);
										do{
										header('Content-type: text/html;charset=GB2312');		//ָ���������ݵı����ʽΪGB2312
										?>
									  <option value="<?php echo $result->sort;?>" selected><?php echo $result->sort;?></option>
										<?php
										}while($result=mysqli_fetch_object($sql));
										?>
									  </select>
   				  </td>
                  <td width="20%" height="21" align="right" valign="middle"><input name="txt_sort" type="text" id="txt_sort" size="10" style="border:1px #64284A solid;"></td>
                  <td width="49%" height="21" align="left" valign="middle"><img src="images/add.gif" width="67" height="23" onClick="checksort();"></td>
					</tr>
					</table>
				</td>
                </tr>
                <tr>
                  <td height="24" align="center">�������ݣ�</td>
                  <td height="130" colspan="3" class="word_grey"><textarea name="txt_content" cols="50" rows="7" id="txt_content"></textarea></td>
                </tr>
                <tr>
                  <td height="40" colspan="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
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
