<?php /* Smarty version 2.6.19, created on 2016-06-29 12:21:23
         compiled from links.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/links.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="addlink" name="addlink" method="post" action="addlinks.php" onsubmit="return addlinks(addlink)">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">添加友情链接</td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">网站名称：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="names" name="names" type="text" class="txt" /></td>
  </tr>
  <tr>
    <td width="40%" height="25" align="right" valign="middle" class="left">URL：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<input id="url" name="url" type="text" class="langtxt" /></td>
  </tr>
  <tr>
    <td height="30" colspan="2" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="添加" class="btn"/></td>
  </tr>
</form>
</table>