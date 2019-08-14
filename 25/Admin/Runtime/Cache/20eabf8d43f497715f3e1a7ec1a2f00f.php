<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><script type="text/javascript" src="__ROOT__/Public/js/jquery-1.4.2.js"></script><title>登录界面</title></head><style>body{margin:0}
table{border:2px solid #e7e7e7;margin:100px auto}
form{font-family:楷体_gb2312}
.user{width:150px;border:1px solid #090}
.pwd{width:150px;border:1px solid #090}
.button{width:60px;height:25px}
.buttonSub{width:106px;height:41px;background-image:url(__ROOT__/Public/images/login_05.jpg);border:0}
.buttonRes{width:98px;height:41px;background-image:url(__ROOT__/Public/images/login_06.jpg);border:0}
</style><script>	$(function(){
		$(".user").hover(function(){
			$(this).css("background","#090");
		},function(){
			$(this).css("background","white");
		});
		$(".pwd").hover(function(){
			$(this).css("background","#090");
		},function(){
			$(this).css("background","white");
		});
	});	
</script><body><table id="__01" width="404" height="205" border="0" cellpadding="0" cellspacing="0"><tr><td colspan="5"><img src="__ROOT__/Public/images/login_01.jpg" width="404" height="54" alt=""></td></tr><form action="__URL__/admin" method="post"><tr><td rowspan="3"><img src="__ROOT__/Public/images/login_02.jpg" width="136" height="150" alt=""></td><td colspan="3" width="242" height="99" background="__ROOT__/Public/images/login_07.jpg"><div>用户名：<input class="user" type="text" name="text"></div><br><div>密&nbsp;&nbsp;码：<input class="pwd" type="password" name="pwd"></div><br></td><td><img src="__ROOT__/Public/images/login_04.jpg" width="26" height="99" alt=""></td></tr><tr><td width="106" height="41"><input class="buttonSub" type="submit" value=""></td><td width="98" height="41"><input class="buttonRes" type="reset" value=""></td><td colspan="2"><img src="__ROOT__/Public/images/login_07.jpg" width="64" height="41" alt=""></td></tr></form><tr><td colspan="4"><img src="__ROOT__/Public/images/login_08.jpg" width="268" height="10" alt=""></td></tr><tr><td><img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="136" height="1" alt=""></td><td><img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="106" height="1" alt=""></td><td><img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="98" height="1" alt=""></td><td><img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="38" height="1" alt=""></td><td><img src="__ROOT__/Public/images/&#x5206;&#x9694;&#x7b26;.gif" width="26" height="1" alt=""></td></tr></table></body></html>