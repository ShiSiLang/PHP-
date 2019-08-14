<?php /* Smarty version 2.6.19, created on 2016-06-29 12:22:26
         compiled from showtype.tpl */ ?>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/changetype.js"></script>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="modi" name="modi" method="post" action="#">
	<tr>
		<td height="25" colspan="2" align="center" valign="middle" class="first">查看商品类别</td>
	</tr>
<?php unset($this->_sections['big_id']);
$this->_sections['big_id']['name'] = 'big_id';
$this->_sections['big_id']['loop'] = is_array($_loop=$this->_tpl_vars['bigarray']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['big_id']['show'] = true;
$this->_sections['big_id']['max'] = $this->_sections['big_id']['loop'];
$this->_sections['big_id']['step'] = 1;
$this->_sections['big_id']['start'] = $this->_sections['big_id']['step'] > 0 ? 0 : $this->_sections['big_id']['loop']-1;
if ($this->_sections['big_id']['show']) {
    $this->_sections['big_id']['total'] = $this->_sections['big_id']['loop'];
    if ($this->_sections['big_id']['total'] == 0)
        $this->_sections['big_id']['show'] = false;
} else
    $this->_sections['big_id']['total'] = 0;
if ($this->_sections['big_id']['show']):

            for ($this->_sections['big_id']['index'] = $this->_sections['big_id']['start'], $this->_sections['big_id']['iteration'] = 1;
                 $this->_sections['big_id']['iteration'] <= $this->_sections['big_id']['total'];
                 $this->_sections['big_id']['index'] += $this->_sections['big_id']['step'], $this->_sections['big_id']['iteration']++):
$this->_sections['big_id']['rownum'] = $this->_sections['big_id']['iteration'];
$this->_sections['big_id']['index_prev'] = $this->_sections['big_id']['index'] - $this->_sections['big_id']['step'];
$this->_sections['big_id']['index_next'] = $this->_sections['big_id']['index'] + $this->_sections['big_id']['step'];
$this->_sections['big_id']['first']      = ($this->_sections['big_id']['iteration'] == 1);
$this->_sections['big_id']['last']       = ($this->_sections['big_id']['iteration'] == $this->_sections['big_id']['total']);
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left"><font size="2" color="#FF0000">父类：</font><input id="moditype<?php echo $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['id']; ?>
" name="moditype<?php echo $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['id']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['name']; ?>
" style="border-color:#996633;" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="javascript:modifytype(<?php echo $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['id']; ?>
);" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delbigtype(<?php echo $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['id']; ?>
);" style="border-color:#FFFFFF;"></td>
    </tr>
    <?php unset($this->_sections['small_id']);
$this->_sections['small_id']['name'] = 'small_id';
$this->_sections['small_id']['loop'] = is_array($_loop=$this->_tpl_vars['smallarray']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['small_id']['show'] = true;
$this->_sections['small_id']['max'] = $this->_sections['small_id']['loop'];
$this->_sections['small_id']['step'] = 1;
$this->_sections['small_id']['start'] = $this->_sections['small_id']['step'] > 0 ? 0 : $this->_sections['small_id']['loop']-1;
if ($this->_sections['small_id']['show']) {
    $this->_sections['small_id']['total'] = $this->_sections['small_id']['loop'];
    if ($this->_sections['small_id']['total'] == 0)
        $this->_sections['small_id']['show'] = false;
} else
    $this->_sections['small_id']['total'] = 0;
if ($this->_sections['small_id']['show']):

            for ($this->_sections['small_id']['index'] = $this->_sections['small_id']['start'], $this->_sections['small_id']['iteration'] = 1;
                 $this->_sections['small_id']['iteration'] <= $this->_sections['small_id']['total'];
                 $this->_sections['small_id']['index'] += $this->_sections['small_id']['step'], $this->_sections['small_id']['iteration']++):
$this->_sections['small_id']['rownum'] = $this->_sections['small_id']['iteration'];
$this->_sections['small_id']['index_prev'] = $this->_sections['small_id']['index'] - $this->_sections['small_id']['step'];
$this->_sections['small_id']['index_next'] = $this->_sections['small_id']['index'] + $this->_sections['small_id']['step'];
$this->_sections['small_id']['first']      = ($this->_sections['small_id']['iteration'] == 1);
$this->_sections['small_id']['last']       = ($this->_sections['small_id']['iteration'] == $this->_sections['small_id']['total']);
?>
    <?php if ($this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['supid'] == $this->_tpl_vars['bigarray'][$this->_sections['big_id']['index']]['id']): ?>
    <tr>
      <td height="25" align="center" valign="middle" class="left" style="text-indent: 50px;" ><font size="2" color="#996600">子类：</font><input id="modtype<?php echo $this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['id']; ?>
" name="moditype<?php echo $this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['id']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['name']; ?>
" style="border-color:#996633;" /></td>
        <td height="25" align="center" valign="middle" class="right"><input id="modidfy" name="modify" type="button" value="修改" class="btn" onclick="javascript:modifytype(<?php echo $this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['id']; ?>
)" style="border-color:#FFFFFF;"/><input id="delete" name="delete" type="button" value="删除" class="btn" onclick="javascript:delsmalltype(<?php echo $this->_tpl_vars['smallarray'][$this->_sections['small_id']['index']]['id']; ?>
)" style="border-color:#FFFFFF;"></td>
    </tr>
  	<?php endif; ?>
    <?php endfor; endif; ?>
<?php endfor; endif; ?>
</form>
</table>