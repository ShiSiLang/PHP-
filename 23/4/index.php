<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>通过XMLHttpRequest对象读取HTML文件，并且输出读取结果</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 00px;
	margin-right: 0px;
	margin-bottom: 0px;
}
-->
</style></head>
<script>
var xmlHttp;				//定义XMLHttpRequest对象
function createXmlHttpRequestObject(){
	//如果在internet Explorer下运行
	if(window.ActiveXObject){
		try{
			xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		}catch(e){
			xmlHttp=false;
		}

	}else{
	//如果在Mozilla或其他的浏览器下运行
		try{
			xmlHttp=new XMLHttpRequest();
		}catch(e){
			xmlHttp=false;
		}
	}
	 //返回创建的对象或显示错误信息
	if(!xmlHttp)
		alert("返回创建的对象或显示错误信息");
		else
		return xmlHttp;
}
function showsimple(){
	createXmlHttpRequestObject();
	var cont = document.getElementById("searchtxt").value;
	if(cont==""){
		alert('查询关键字不能为空！');
		return false;
	}
		xmlHttp.onreadystatechange=StatHandler;	//判断URL调用的状态值并处理
		xmlHttp.open("GET",'searchrst.php?cont='+cont,false);
		xmlHttp.send(null);	

}
function StatHandler(){
	if(xmlHttp.readyState==4 && xmlHttp.status==200){
		document.getElementById("webpage").innerHTML=xmlHttp.responseText;
	}
}
</script>
<body>
<table width="800" height="632" border="0" align="center" cellpadding="0" cellspacing="0" background="images/bj.jpg">
  <tr>
    <td width="260" height="245">&nbsp;</td>
    <td width="500" align="center" valign="bottom"><strong>查询员工信息，根据员工技能信息</strong></td>
    <td width="40">&nbsp;</td>
  </tr><form id="searchform" name="searchform" method="get" action="#"> 
  <tr>
    <td height="40">&nbsp;</td>
    <td align="center">请输入关键字：&nbsp;<input name="searchtxt" type="text" id="searchtxt" size="30" />
    &nbsp;&nbsp;<input id="s_search" name="s_search" type="button" value="查询" onclick="return showsimple()" /></td>
    <td>&nbsp;</td>
  </tr>  </form>
  <tr>
    <td height="268">&nbsp;</td>
    <td align="center" valign="top"><div id="webpage"></div></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>

</body>
</html>
