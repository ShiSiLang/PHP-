<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>用户浏览</title><style type="text/css"><!--
.title {
	font-weight: bold;
	font-size: 13px;
}
.content {
	font-size: 12px;
}
#td {
	text-align: right;
}
--></style></head><body><table width="405" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF"><tr><td bgcolor="#FFFFFF" colspan="3">&nbsp;</td></tr><tr class="title"><td bgcolor="#FFFFFF" width="44">ID</td><td bgcolor="#FFFFFF" width="120">用户名</td><td bgcolor="#FFFFFF" width="223">密码</td></tr><?php if(is_array($select)): $i = 0; $__LIST__ = $select;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><tr class="content"><td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["id"]); ?></td><td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["user"]); ?></td><td bgcolor="#FFFFFF">&nbsp;<?php echo ($user["address"]); ?></td></tr><?php endforeach; endif; else: echo "" ;endif; ?></table></body></html>