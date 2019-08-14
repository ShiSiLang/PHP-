<?php /* Smarty version 2.6.19, created on 2016-06-29 12:21:54
         compiled from member.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>
<body>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/member.js"></script>
<link rel="stylesheet" href="css/table.css" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<META HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="showmem" name="showmem" method="post" action="#">
  <tr>
    <td height="25" colspan="5" align="center" valign="middle" class="first">会员管理</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">昵称</td>
    <td height="25" align="center" valign="middle" class="center">状态</td>
    <td height="25" align="center" valign="middle" class="right">查看信息</td>
  </tr>
<?php unset($this->_sections['mem_id']);
$this->_sections['mem_id']['name'] = 'mem_id';
$this->_sections['mem_id']['loop'] = is_array($_loop=$this->_tpl_vars['memarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mem_id']['show'] = true;
$this->_sections['mem_id']['max'] = $this->_sections['mem_id']['loop'];
$this->_sections['mem_id']['step'] = 1;
$this->_sections['mem_id']['start'] = $this->_sections['mem_id']['step'] > 0 ? 0 : $this->_sections['mem_id']['loop']-1;
if ($this->_sections['mem_id']['show']) {
    $this->_sections['mem_id']['total'] = $this->_sections['mem_id']['loop'];
    if ($this->_sections['mem_id']['total'] == 0)
        $this->_sections['mem_id']['show'] = false;
} else
    $this->_sections['mem_id']['total'] = 0;
if ($this->_sections['mem_id']['show']):

            for ($this->_sections['mem_id']['index'] = $this->_sections['mem_id']['start'], $this->_sections['mem_id']['iteration'] = 1;
                 $this->_sections['mem_id']['iteration'] <= $this->_sections['mem_id']['total'];
                 $this->_sections['mem_id']['index'] += $this->_sections['mem_id']['step'], $this->_sections['mem_id']['iteration']++):
$this->_sections['mem_id']['rownum'] = $this->_sections['mem_id']['iteration'];
$this->_sections['mem_id']['index_prev'] = $this->_sections['mem_id']['index'] - $this->_sections['mem_id']['step'];
$this->_sections['mem_id']['index_next'] = $this->_sections['mem_id']['index'] + $this->_sections['mem_id']['step'];
$this->_sections['mem_id']['first']      = ($this->_sections['mem_id']['iteration'] == 1);
$this->_sections['mem_id']['last']       = ($this->_sections['mem_id']['iteration'] == $this->_sections['mem_id']['total']);
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['key']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['id']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['name']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">
   <input id="free" name="free" type="button" class="btn" value = "<?php if ($this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['isfreeze'] == 0): ?>未冻结 <?php elseif ($this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['isfreeze'] == 1): ?>冻结<?php endif; ?>" style="border-color: #FFFFFF;" onClick="return changestate(<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['id']; ?>
,<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['isfreeze']; ?>
)">
    </td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="show" name="show<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['id']; ?>
" type='button' value="详细信息" class="btn" style=" border-color: #FFFFFF; cursor: hand;" onclick="showme(<?php echo $this->_tpl_vars['memarr'][$this->_sections['mem_id']['index']]['id']; ?>
)"/></td>
  </tr>
<?php endfor; endif; ?> 
  <tr>
    <td colspan="5"><a href="#" onclick="return alldel(showmem)">全选</a> <a href="#" onclick="return overdel(showmem);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" onClick = 'return deletemem(showmem);'>
      &nbsp;&nbsp;</td>
     </tr>
</form>
</table>

</body>
</html>