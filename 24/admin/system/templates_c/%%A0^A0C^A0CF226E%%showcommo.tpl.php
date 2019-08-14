<?php /* Smarty version 2.6.19, created on 2016-06-29 12:22:10
         compiled from showcommo.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<body>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/alldelete.js"></script>
<table width="720"  border="0" cellpadding="0" cellspacing="0">
<form id="delcomm" name="delcomm" method="post" action="#">
  <tr>
    <td height="25" colspan="10" align="center" valign="middle" class="first">商品查看</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td height="25" align="center" valign="middle" class="center">id</td>
    <td height="25" align="center" valign="middle" class="center">名称</td>
    <td height="25" align="center" valign="middle" class="center">品牌</td>
    <td height="25" align="center" valign="middle" class="center">产地</td>
    <td height="25" align="center" valign="middle" class="center">型号</td>
    <td height="25" align="center" valign="middle" class="center">库存</td>
    <td height="25" align="center" valign="middle" class="center">销量</td>
    <td height="25" align="center" valign="middle" class="center">加入时间</td>
    <td height="25" align="center" valign="middle" class="right">更改</td>
  </tr>
<?php unset($this->_sections['com_id']);
$this->_sections['com_id']['name'] = 'com_id';
$this->_sections['com_id']['loop'] = is_array($_loop=$this->_tpl_vars['commoarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['com_id']['show'] = true;
$this->_sections['com_id']['max'] = $this->_sections['com_id']['loop'];
$this->_sections['com_id']['step'] = 1;
$this->_sections['com_id']['start'] = $this->_sections['com_id']['step'] > 0 ? 0 : $this->_sections['com_id']['loop']-1;
if ($this->_sections['com_id']['show']) {
    $this->_sections['com_id']['total'] = $this->_sections['com_id']['loop'];
    if ($this->_sections['com_id']['total'] == 0)
        $this->_sections['com_id']['show'] = false;
} else
    $this->_sections['com_id']['total'] = 0;
if ($this->_sections['com_id']['show']):

            for ($this->_sections['com_id']['index'] = $this->_sections['com_id']['start'], $this->_sections['com_id']['iteration'] = 1;
                 $this->_sections['com_id']['iteration'] <= $this->_sections['com_id']['total'];
                 $this->_sections['com_id']['index'] += $this->_sections['com_id']['step'], $this->_sections['com_id']['iteration']++):
$this->_sections['com_id']['rownum'] = $this->_sections['com_id']['iteration'];
$this->_sections['com_id']['index_prev'] = $this->_sections['com_id']['index'] - $this->_sections['com_id']['step'];
$this->_sections['com_id']['index_next'] = $this->_sections['com_id']['index'] + $this->_sections['com_id']['step'];
$this->_sections['com_id']['first']      = ($this->_sections['com_id']['iteration'] == 1);
$this->_sections['com_id']['last']       = ($this->_sections['com_id']['iteration'] == $this->_sections['com_id']['total']);
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left">
    	<input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['id']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['id']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['name']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['model']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['stocks']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['sell']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['addtime']; ?>
</td>
    <td height="25" align="center" valign="middle" class="right">
    	<input id="modcomm" name="mod<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['id']; ?>
" type='button' value="更改" class="btn" style=" border-color: #FFFFFF; cursor: ahnd;" onclick="modi(<?php echo $this->_tpl_vars['commoarr'][$this->_sections['com_id']['index']]['id']; ?>
)"/></td>
  </tr>
<?php endfor; endif; ?> 
  <tr>
    <td colspan="10"><a href="#" onclick="return alldel(delcomm)">全选</a> <a href="#" onclick="return overdel(delcomm);">反选</a>&nbsp;&nbsp;
      <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(delcomm);'>
      &nbsp;&nbsp;</td>
    <?php echo '<?php'; ?>
 echo $sqlstr1 <?php echo '?>'; ?>
 </tr>
</form>
</table>

</body>
</html>