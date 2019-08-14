<?php /* Smarty version 2.6.19, created on 2016-06-29 12:22:01
         compiled from showmem.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showmem.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>

<table width="400" border="0" cellpadding="0" cellspacing="1">
<form id="showmem" name="showmem" method="post" action="#"  onsubmit="return chkmem(modcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">会员信息</td>
    </tr>
	<?php unset($this->_sections['vip_id']);
$this->_sections['vip_id']['name'] = 'vip_id';
$this->_sections['vip_id']['loop'] = is_array($_loop=$this->_tpl_vars['viparr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['vip_id']['show'] = true;
$this->_sections['vip_id']['max'] = $this->_sections['vip_id']['loop'];
$this->_sections['vip_id']['step'] = 1;
$this->_sections['vip_id']['start'] = $this->_sections['vip_id']['step'] > 0 ? 0 : $this->_sections['vip_id']['loop']-1;
if ($this->_sections['vip_id']['show']) {
    $this->_sections['vip_id']['total'] = $this->_sections['vip_id']['loop'];
    if ($this->_sections['vip_id']['total'] == 0)
        $this->_sections['vip_id']['show'] = false;
} else
    $this->_sections['vip_id']['total'] = 0;
if ($this->_sections['vip_id']['show']):

            for ($this->_sections['vip_id']['index'] = $this->_sections['vip_id']['start'], $this->_sections['vip_id']['iteration'] = 1;
                 $this->_sections['vip_id']['iteration'] <= $this->_sections['vip_id']['total'];
                 $this->_sections['vip_id']['index'] += $this->_sections['vip_id']['step'], $this->_sections['vip_id']['iteration']++):
$this->_sections['vip_id']['rownum'] = $this->_sections['vip_id']['iteration'];
$this->_sections['vip_id']['index_prev'] = $this->_sections['vip_id']['index'] - $this->_sections['vip_id']['step'];
$this->_sections['vip_id']['index_next'] = $this->_sections['vip_id']['index'] + $this->_sections['vip_id']['step'];
$this->_sections['vip_id']['first']      = ($this->_sections['vip_id']['iteration'] == 1);
$this->_sections['vip_id']['last']       = ($this->_sections['vip_id']['iteration'] == $this->_sections['vip_id']['total']);
?>
    <tr>
        <td width="30%" height="25" class="left">会员名称：</td>
      <td width="618" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['name']; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">消费总额：</td>
      <td width="618" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['consume']; ?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">真实姓名：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['realname']; ?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">身份证号：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['card']; ?>
</td>
    </tr>

    <tr>
        <td width="30%" height="22" class="left">移动电话：</td>
      <td height="22" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['tel']; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">固定电话：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['phone']; ?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">Email：</td>
   	  <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['Email']; ?>
</td>
    </tr>
	<tr>
        <td width="30%" height="25" class="left">QQ号：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['QQ']; ?>
</td>
	</tr>
    <tr>
    	<td width="30%" height="25" class="left">邮编：</td>
   	  <td height="25" class="right">&nbsp;<?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['code']; ?>
</td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">地址：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['address']; ?>
</td>
	</tr>
    <tr>
        <td width="30%" height="25" class="left">是否冻结：</td>
      <td height="25" class="right"><div id="isfree">
       <?php if ($this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['isfreeze'] == 1): ?>冻结
      <?php else: ?>未冻结<?php endif; ?></div></td>
    </tr>
    <tr>
        <td width="30%" height="25" class="left">注册时间：</td>
      <td height="25" class="right"><?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['addtime']; ?>
</td>
      </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="free" name="free" type="button" class="btn" value="<?php if ($this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['isfreeze'] == 1): ?>解冻<?php else: ?>冻结<?php endif; ?>" onClick= "return changestate(<?php echo $this->_tpl_vars['id']; ?>
,<?php echo $this->_tpl_vars['viparr'][$this->_sections['vip_id']['index']]['isfreeze']; ?>
)">
    	&nbsp;&nbsp;
   	  <input id="del" name="del" type="button" value="删除" class="btn" onclick="return dele(<?php echo $this->_tpl_vars['id']; ?>
)"></td>
    </tr>
	<?php endfor; endif; ?>
	</form>
</table>

</body>
</html>