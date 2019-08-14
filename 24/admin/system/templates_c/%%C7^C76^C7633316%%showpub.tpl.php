<?php /* Smarty version 2.6.19, created on 2016-06-29 12:21:48
         compiled from showpub.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/public.js"></script>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showpub" name="showpub" method="post" action="#">
  <tr>
    <td height="25" colspan="2" align="center" valign="middle" class="first">查看公告</td>
  </tr>
  <tr>
    <td width="25%" height="25" align="center" valign="middle" class="left">删除</td>
    <td align="center" valign="middle" class="center">公告标题</td>
  </tr>
  <?php unset($this->_sections['pub_id']);
$this->_sections['pub_id']['name'] = 'pub_id';
$this->_sections['pub_id']['loop'] = is_array($_loop=$this->_tpl_vars['pubarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['pubarr'][$this->_sections['pub_id']['index']]['id']; ?>
"></td>
    <td align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['pubarr'][$this->_sections['pub_id']['index']]['title']; ?>
</td>
  </tr>
  <?php endfor; endif; ?>
  <tr>
    <td height="25" colspan="2">
    	<a href="#" onclick="return alldel(showpub)">全选</a> <a href="#" onclick="return overdel(showpub)">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return delepub(showpub)'>
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>



