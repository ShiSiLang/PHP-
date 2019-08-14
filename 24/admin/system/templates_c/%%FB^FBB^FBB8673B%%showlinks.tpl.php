<?php /* Smarty version 2.6.19, created on 2016-06-29 12:20:20
         compiled from showlinks.tpl */ ?>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/links.js"></script>
<table width="" border="0" align="center" cellpadding="0" cellspacing="0">
<form id="showlink" name="showlink" method="post" action="#">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">查看链接</td>
  </tr>
  <tr>
    <td width="30" height="25" align="center" valign="middle" class="left">删除</td>
    <td width="150" align="center" valign="middle" class="center">链接网站</td>
    <td width="250" align="center" valign="middle" class="center">URL</td>
    <td width="40" align="center" valign="middle" class="center">修改</td>
  </tr>
  <?php unset($this->_sections['link_id']);
$this->_sections['link_id']['name'] = 'link_id';
$this->_sections['link_id']['loop'] = is_array($_loop=$this->_tpl_vars['linkarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['link_id']['show'] = true;
$this->_sections['link_id']['max'] = $this->_sections['link_id']['loop'];
$this->_sections['link_id']['step'] = 1;
$this->_sections['link_id']['start'] = $this->_sections['link_id']['step'] > 0 ? 0 : $this->_sections['link_id']['loop']-1;
if ($this->_sections['link_id']['show']) {
    $this->_sections['link_id']['total'] = $this->_sections['link_id']['loop'];
    if ($this->_sections['link_id']['total'] == 0)
        $this->_sections['link_id']['show'] = false;
} else
    $this->_sections['link_id']['total'] = 0;
if ($this->_sections['link_id']['show']):

            for ($this->_sections['link_id']['index'] = $this->_sections['link_id']['start'], $this->_sections['link_id']['iteration'] = 1;
                 $this->_sections['link_id']['iteration'] <= $this->_sections['link_id']['total'];
                 $this->_sections['link_id']['index'] += $this->_sections['link_id']['step'], $this->_sections['link_id']['iteration']++):
$this->_sections['link_id']['rownum'] = $this->_sections['link_id']['iteration'];
$this->_sections['link_id']['index_prev'] = $this->_sections['link_id']['index'] - $this->_sections['link_id']['step'];
$this->_sections['link_id']['index_next'] = $this->_sections['link_id']['index'] + $this->_sections['link_id']['step'];
$this->_sections['link_id']['first']      = ($this->_sections['link_id']['iteration'] == 1);
$this->_sections['link_id']['last']       = ($this->_sections['link_id']['iteration'] == $this->_sections['link_id']['total']);
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
"></td>
    <td align="center" valign="middle" class="center"><input id="wnames<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
" name="wnames<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
" type="text" class="txt" value="<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['name']; ?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="wurl<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
" name="wurl<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
" type="text" class="langtxt" value="<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['url']; ?>
" /></td>
    <td align="center" valign="middle" class="center"><input id="modify" name="modify" type="button" class="btn" value="修改" onclick="return modlink(<?php echo $this->_tpl_vars['linkarr'][$this->_sections['link_id']['index']]['id']; ?>
)" style="border-color:#FFFFFF;"/></td>
  </tr>
  <?php endfor; endif; ?>
  <tr>
    <td height="25" colspan="4">
    	<a href="#" onclick="return alldel(showlink)">全选</a> <a href="#" onclick="return overdel(showlink);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick="return dellinks(showlink);">
      &nbsp;&nbsp;
    </td>
  </tr>
</form>
</table>