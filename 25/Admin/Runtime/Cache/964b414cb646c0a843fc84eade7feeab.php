<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"><html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link href="__ROOT__/Public/Css/index.css" rel="stylesheet" type="text/css" /><script type="text/javascript" src="__ROOT__/Public/js/jquery-1.4.2.js"></script><title>页面提示</title></head><body><table width="750" border="0" cellspacing="0" cellpadding="0" ><tr><td align="center"><?php echo ($hint); ?></td></tr><tr><td align="center"><span class="spanT">5</span>秒后自动跳转，如未跳转，请单击<a href="<?php echo ($url); ?>">这里</a></td></tr></table><script type="text/javascript">	$(function(){
		time();
	});
	var times=$("span").text();
	function time(){
		if(times==0){
			var url=$("a").attr('href');
			window.location.href=url;
		}else{
			window.setTimeout('time()',1000);
			times=times-1;
			$("span").text(times);
		}
	}
</script></body></html>