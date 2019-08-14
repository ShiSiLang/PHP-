<?php /* Smarty version 2.6.19, created on 2016-06-28 10:17:09
         compiled from public.tpl */ ?>
<table width="210" height="193" border="0" cellpadding="0" cellspacing="0" background="images/shop_06.gif">
	<tr>
		<td height="35" width="17"></td>
        <td width="193" align="left" valign="top" class="exam"></td>
  </tr>
  	<tr>
		<td height="21" width="17"></td>
        <td width="193" align="left" valign="top" class="exam">
         <?php unset($this->_sections['ids']);
$this->_sections['ids']['name'] = 'ids';
$this->_sections['ids']['loop'] = is_array($_loop=$this->_tpl_vars['arrs']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['ids']['show'] = true;
$this->_sections['ids']['max'] = $this->_sections['ids']['loop'];
$this->_sections['ids']['step'] = 1;
$this->_sections['ids']['start'] = $this->_sections['ids']['step'] > 0 ? 0 : $this->_sections['ids']['loop']-1;
if ($this->_sections['ids']['show']) {
    $this->_sections['ids']['total'] = $this->_sections['ids']['loop'];
    if ($this->_sections['ids']['total'] == 0)
        $this->_sections['ids']['show'] = false;
} else
    $this->_sections['ids']['total'] = 0;
if ($this->_sections['ids']['show']):

            for ($this->_sections['ids']['index'] = $this->_sections['ids']['start'], $this->_sections['ids']['iteration'] = 1;
                 $this->_sections['ids']['iteration'] <= $this->_sections['ids']['total'];
                 $this->_sections['ids']['index'] += $this->_sections['ids']['step'], $this->_sections['ids']['iteration']++):
$this->_sections['ids']['rownum'] = $this->_sections['ids']['iteration'];
$this->_sections['ids']['index_prev'] = $this->_sections['ids']['index'] - $this->_sections['ids']['step'];
$this->_sections['ids']['index_next'] = $this->_sections['ids']['index'] + $this->_sections['ids']['step'];
$this->_sections['ids']['first']      = ($this->_sections['ids']['iteration'] == 1);
$this->_sections['ids']['last']       = ($this->_sections['ids']['iteration'] == $this->_sections['ids']['total']);
?>
         	<a href="#" class="lk" onClick="return showme(<?php echo $this->_tpl_vars['arrs'][$this->_sections['ids']['index']]['id']; ?>
,'showpub.php');" ><img src="images/man.JPG" width="14" height="11" border="0" /><?php echo $this->_tpl_vars['arrs'][$this->_sections['ids']['index']]['title']; ?>
</a><br />
         <?php endfor; endif; ?>
      </td>
  </tr>
  <tr>
		<td height="20" width="17"></td>
        <td width="193" align="left" valign="bottom" class="exam"><a href="?page=allpub" class="lk">>>more<<</a></td>
  </tr>
</table>