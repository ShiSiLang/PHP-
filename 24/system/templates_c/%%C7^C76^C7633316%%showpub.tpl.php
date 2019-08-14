<?php /* Smarty version 2.6.19, created on 2016-06-28 10:21:20
         compiled from showpub.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<table width="400" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
	<td colspan="2" height="25" align="center" valign="middle" class="first">公告信息</td>
</tr>
<?php unset($this->_sections['pub_id']);
$this->_sections['pub_id']['name'] = 'pub_id';
$this->_sections['pub_id']['loop'] = is_array($_loop=$this->_tpl_vars['arr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pub_id']['show'] = true;
$this->_sections['pub_id']['max'] = $this->_sections['pub_id']['loop'];
$this->_sections['pub_id']['step'] = 1;
$this->_sections['pub_id']['start'] = $this->_sections['pub_id']['step'] > 0 ? 0 : $this->_sections['pub_id']['loop']-1;
if ($this->_sections['pub_id']['show']) {
    $this->_sections['pub_id']['total'] = $this->_sections['pub_id']['loop'];
    if ($this->_sections['pub_id']['total'] == 0)
        $this->_sections['pub_id']['show'] = false;
} else
    $this->_sections['pub_id']['total'] = 0;
if ($this->_sections['pub_id']['show']):

            for ($this->_sections['pub_id']['index'] = $this->_sections['pub_id']['start'], $this->_sections['pub_id']['iteration'] = 1;
                 $this->_sections['pub_id']['iteration'] <= $this->_sections['pub_id']['total'];
                 $this->_sections['pub_id']['index'] += $this->_sections['pub_id']['step'], $this->_sections['pub_id']['iteration']++):
$this->_sections['pub_id']['rownum'] = $this->_sections['pub_id']['iteration'];
$this->_sections['pub_id']['index_prev'] = $this->_sections['pub_id']['index'] - $this->_sections['pub_id']['step'];
$this->_sections['pub_id']['index_next'] = $this->_sections['pub_id']['index'] + $this->_sections['pub_id']['step'];
$this->_sections['pub_id']['first']      = ($this->_sections['pub_id']['iteration'] == 1);
$this->_sections['pub_id']['last']       = ($this->_sections['pub_id']['iteration'] == $this->_sections['pub_id']['total']);
?>
  <tr>
    <td width="70%" height="25" align="center" valign="middle" class="left">标题：<?php echo $this->_tpl_vars['arr'][$this->_sections['pub_id']['index']]['title']; ?>
</td>
    <td width="30%" height="25" align="center" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['arr'][$this->_sections['pub_id']['index']]['addtime']; ?>
</td>
  </tr>
  <tr>
    <td height="100" colspan="2" align="left" valign="top" class="all" style=" text-indent: 10px;"><br>&nbsp;<?php echo $this->_tpl_vars['arr'][$this->_sections['pub_id']['index']]['content']; ?>
</td>
  </tr>
  <?php endfor; endif; ?>
</table>