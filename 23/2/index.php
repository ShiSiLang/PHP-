<html>
<head>
<title>在PHP中应用AJAX技术实现博客文章类别添加</title>
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
	font-family: "文鼎淹水体";
	font-size: 18px;
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
			sort_id.innerHTML=http_request.responseText;				//设置sort_id HTML文本替换的元素内容
		} else {
			alert('您请求的页面发现错误');
		}
	}
}
</script>
<script language="javascript">
function checksort() {
	var txt_sort = form1.txt_sort.value;
	if(txt_sort=="") {
		window.alert("请填写文章类别!");
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
            <td width="570" height="30" align="center" valign="bottom" class="style5"><span class="style2">发表博客文章<span class="style3"><span class="style4"></span></span></span></td>
            <td width="229">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td align="center"><table width="93%"  border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="17%" height="30" align="center">文章主题：</td>
                  <td height="24" colspan="3"><input name="txt_title" type="text" id="txt_title" size="50"></td>
                </tr>
                <tr>
                  <td align="center">文章类别：</td>
                  <td width="14%" valign="baseline" id="sort_id">
					<table width="303" border="0" cellpadding="0" cellspacing="0">
					<tr>
						<td>
										<select name="select" >
										<?php
										$link=mysqli_connect("localhost","root","111");
										mysqli_select_db($link,"db_database23");
										//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
										mysqli_query($link,"set names gb2312");
										$sql=mysqli_query($link,"select distinct * from tb_sort group by sort");
										$result=mysqli_fetch_object($sql);
										do{
										header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
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
                  <td height="24" align="center">文章内容：</td>
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
