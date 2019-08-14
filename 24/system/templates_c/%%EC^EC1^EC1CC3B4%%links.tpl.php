<?php /* Smarty version 2.6.19, created on 2016-06-28 10:17:09
         compiled from links.tpl */ ?>
<table id="__01" width="207" height="73" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td height="73" colspan="7" background="images/shop_11.gif">&nbsp;</td>
  </tr>
    
</table>
<table width="207" height="211" border="0" cellpadding="0" cellspacing="0" background="images/shop_13.gif" id="__01">

  <tr>
    <td height="45" colspan="8">&nbsp;</td>
  </tr>
  <tr>
   
    <td width="24" rowspan="2" align="center" valign="top" style="line-height: 25px;">	</td>
    <td width="183" rowspan="2" align="left" valign="top" style="line-height: 25px;">
	<?php unset($this->_sections['id']);
$this->_sections['id']['name'] = 'id';
$this->_sections['id']['loop'] = is_array($_loop=$this->_tpl_vars['linarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['id']['show'] = true;
$this->_sections['id']['max'] = $this->_sections['id']['loop'];
$this->_sections['id']['step'] = 1;
$this->_sections['id']['start'] = $this->_sections['id']['step'] > 0 ? 0 : $this->_sections['id']['loop']-1;
if ($this->_sections['id']['show']) {
    $this->_sections['id']['total'] = $this->_sections['id']['loop'];
    if ($this->_sections['id']['total'] == 0)
        $this->_sections['id']['show'] = false;
} else
    $this->_sections['id']['total'] = 0;
if ($this->_sections['id']['show']):

            for ($this->_sections['id']['index'] = $this->_sections['id']['start'], $this->_sections['id']['iteration'] = 1;
                 $this->_sections['id']['iteration'] <= $this->_sections['id']['total'];
                 $this->_sections['id']['index'] += $this->_sections['id']['step'], $this->_sections['id']['iteration']++):
$this->_sections['id']['rownum'] = $this->_sections['id']['iteration'];
$this->_sections['id']['index_prev'] = $this->_sections['id']['index'] - $this->_sections['id']['step'];
$this->_sections['id']['index_next'] = $this->_sections['id']['index'] + $this->_sections['id']['step'];
$this->_sections['id']['first']      = ($this->_sections['id']['iteration'] == 1);
$this->_sections['id']['last']       = ($this->_sections['id']['iteration'] == $this->_sections['id']['total']);
?>
    <a href="<?php echo $this->_tpl_vars['linarr'][$this->_sections['id']['index']]['url']; ?>
" target="_blank" class="lk"><?php echo $this->_tpl_vars['linarr'][$this->_sections['id']['index']]['name']; ?>
</a><br />
    <?php endfor; endif; ?>    </td>
  </tr>
</table>