<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><title>用户信息输出</title><link href="__ROOT__/Public/Css/style.css" rel="stylesheet" type="text/css" /></head><body><form id="form2" name="form2" method="post" action="__URL__/update"><table width="405" border="1" cellpadding="1" cellspacing="1" bgcolor="#99CC33" bordercolor="#FFFFFF"><tr><td colspan="2" bgcolor="#FFFFFF" class="title" align="center">用户信息</td></tr><?php if(is_array($select)): foreach($select as $key=>$user): ?><tr class="content"><td bgcolor="#FFFFFF" class="right" width="103">名称：</td><td bgcolor="#FFFFFF" width="289"><input type="hidden" name="id" id="hiddenField" value="<?php echo ($user["id"]); ?>" /><input name="user" type="text" id="user" size="20" value="<?php echo ($user["user"]); ?>" /></td></tr><tr class="content"><td bgcolor="#FFFFFF" class="right">密码：</td><td bgcolor="#FFFFFF"><input name="pass" type="password" id="pass" size="20" value="<?php echo ($user["pass"]); ?>" /></td></tr><tr class="content"><td bgcolor="#FFFFFF" class="right">&nbsp;地址：</td><td bgcolor="#FFFFFF">&nbsp;
      <input name="address" type="text" id="address" size="30" value="<?php echo ($user["address"]); ?>" /></td></tr><tr class="content"><td bgcolor="#FFFFFF">&nbsp;</td><td bgcolor="#FFFFFF"><input type="submit" name="button" id="button" value="更新" /></td></tr><?php endforeach; endif; ?></table></form></body></html>