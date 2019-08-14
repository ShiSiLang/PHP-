<html>
<head>
<title>应用Ajax技术实现无刷新的级联下拉列表</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
body {
	background-color: #0099CC;
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
body,td,th {
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
<script language="javascript" type="text/javascript">
var http_request = false;
function createRequest(url) {
	//初始化对象并发出XMLHttpRequest请求
	http_request = false;
	if (window.XMLHttpRequest) { // Mozilla或其他除IE以外的浏览器
		http_request = new XMLHttpRequest();
		if (http_request.overrideMimeType) {
			http_request.overrideMimeType("text/xml");
		}
	} else if (window.ActiveXObject) { // IE浏览器
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
	http_request.onreadystatechange = alertContents;    //指定响应方法
	//发出HTTP请求
	http_request.open("GET", url, true);
	http_request.send(null);
}
function alertContents() {    //处理服务器返回的信息
	if (http_request.readyState == 4) {
		if (http_request.status == 200) {
			subType.innerHTML=http_request.responseText;
		} else {
			alert('您请求的页面发现错误');
		}
	}

}

function F_super(val){
	createRequest("selSubType.php?type="+val+'&nocache='+new Date().getTime());  //实现级联下拉列表
}

function mycheck(){
	if (form1.goodsName.value==""){
		alert("请输入商品名称！");form1.goodsName.focus();return;
	}
	if (form1.picture.value==""){
		alert("请输入图片文件的路径！");form1.picture.focus();return;
	}
	if (form1.price.value==""){
		alert("请输入商品的定价！");form1.price.focus();return;
	}
	if (isNaN(form1.price.value)){
		alert("您输入的定价错误，请重新输入！");form1.price.value="";form1.price.focus();return;
	}	
	if (form1.introduce.value==""){
		alert("请输入商品简介！");form1.introduce.focus();return;
	}	
	form1.submit();	
}
</script>
<body>
<table width="575"  border="0" align="center" cellpadding="-2" cellspacing="-2" bordercolordark="#FFFFFF">
  <form action="" method="post" name="form1">
    <tr>
      <td width="14%" height="27" align="right">&nbsp;商品名称：</td>
      <td height="27" colspan="3">&nbsp;
          <input name="goodsName" type="text" class="Sytle_text" id="bookID2" size="50">
&nbsp;&nbsp; </td>
    </tr>
    <tr>
      <td height="27" align="right">&nbsp;所属大类：</td>
      <td width="32%" height="27">&nbsp;
          <select name="type" class="textarea" id="type" onChange="F_super(this.value)">
										<?php
										$link=mysqli_connect("localhost","root","111");
										mysqli_select_db($link,"db_database23");
										//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
										mysqli_query($link,"set names gb2312");
										$sql=mysqli_query($link,"select * from tb_type group by type");
										$result=mysqli_fetch_object($sql);
										do{
									//	header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
										?>
									  <option value="<?php echo $result->type;?>" selected><?php echo $result->type;?></option>
										<?php
										}while($result=mysqli_fetch_object($sql));
										?>
      </select></td>
      <td width="12%" height="27" align="right">&nbsp;所属小类：</td>
      <td width="42%" height="27" id="subType">&nbsp;</td>
    </tr>
    <tr>
      <td height="41" align="right">&nbsp;图片文件：</td>
      <td height="41">&nbsp;
          <input name="picture" type="text" class="Style_upload" id="picture">
      </td>
      <td height="41" align="right">&nbsp;定　　价：</td>
      <td height="41">&nbsp;
          <input name="price" type="text" class="Sytle_text" id="price">
        (元)</td>
    </tr>
    <tr>
      <td height="103" align="right">&nbsp;商品简介：</td>
      <td colspan="3"><span class="style5">&nbsp; </span>
          <textarea name="introduce" cols="60" rows="5" class="textarea" id="introduce"></textarea></td>
    </tr>
    <tr>
      <td height="28" colspan="4" align="center"><input name="Button" type="button" class="btn_grey" value="保存" onClick="mycheck();">
&nbsp;
        <input name="Submit2" type="reset" class="btn_grey" value="重置">
&nbsp;</td>
    </tr>
  </form>
</table>
<script language="javascript">
F_super(form1.type.value);
</script>
</body>
</html>
