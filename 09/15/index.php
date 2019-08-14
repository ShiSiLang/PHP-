<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>练习1</title>
<style type="text/css">
<!--
.style1 {color: #FF0000}
-->
</style>
</head>
<script language="javascript">
function check(){
if(myform.subject.value==""){
	alert("主题不能为空");myform.subject.focus();return false;
	}
if(myform.content.value==""){
	alert("内容不能为空");myform.content.focus();return false;
	}
if(myform.author.value==""){
	alert("作者不能为空");myform.author.focus();return false;
	}
alert("添加成功");
}
</script>
<body>
<form name="myform" method="post" action="">
  <table width="500" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF" bgcolor="#993399">
    <tr bgcolor="#99FF33">
      <td height="30" colspan="2" align="center">博客</td>
    </tr>
    <tr bgcolor="#99FF33">
      <td width="127" height="30" align="center">主题</td>
      <td width="373" height="30"><input name="subject" type="text" id="subject" size="40"> 
        &nbsp;<span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" align="center">内容</td>
      <td height="30"><textarea name="content" cols="40" rows="8" id="content"></textarea>
      <span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" align="center">作者</td>
      <td height="30"><input name="author" type="text" id="author">
      <span class="style1">*</span></td>
    </tr>
    <tr bgcolor="#99FF33">
      <td height="30" colspan="2" align="center"><input type="submit" name="submit" onClick="return check();" value="提交">
&nbsp;&nbsp;
      <input type="reset" name="Submit2" value="重置"></td>
    </tr>
  </table>
  <div align="center"><br>
  <span class="style1">*&nbsp;</span>添加博客<br>
  </div>
</form>
</body>
</html>
