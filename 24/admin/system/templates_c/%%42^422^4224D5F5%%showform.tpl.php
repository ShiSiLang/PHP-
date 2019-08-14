<?php /* Smarty version 2.6.19, created on 2016-06-29 12:20:17
         compiled from showform.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="../../css/table.css" rel="stylesheet" type="text/css">
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/shwform.js"></script>
<body>
<table width="785" border="0" align="left" cellpadding="0" cellspacing="0">
  <form id="shwfrm" name="shwfrm" method="post" action"#">
    <tr>
      <td height="25" align="center" valign="middle" class="first">删除</td>
      <td height="25" align="center" valign="middle" class="first">订单号</td>
      <td height="25" align="center" valign="middle" class="first">购买用户</td>
      <td height="25" align="center" valign="middle" class="first">接收人</td>
      <td height="25" align="center" valign="middle" class="first">消费金额</td>
      <td height="25" align="center" valign="middle" class="first">付款方式</td>
      <td height="25" align="center" valign="middle" class="first">送货方式</td>
      <td height="25" align="center" valign="middle" class="first">订单状态</td>
      <td height="25" align="center" valign="middle" class="first">查看</td>
      <td height="25" align="center" valign="middle" class="first">处理</td>
    </tr>
    <?php unset($this->_sections['for_id']);
$this->_sections['for_id']['name'] = 'for_id';
$this->_sections['for_id']['loop'] = is_array($_loop=$this->_tpl_vars['formarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['for_id']['show'] = true;
$this->_sections['for_id']['max'] = $this->_sections['for_id']['loop'];
$this->_sections['for_id']['step'] = 1;
$this->_sections['for_id']['start'] = $this->_sections['for_id']['step'] > 0 ? 0 : $this->_sections['for_id']['loop']-1;
if ($this->_sections['for_id']['show']) {
    $this->_sections['for_id']['total'] = $this->_sections['for_id']['loop'];
    if ($this->_sections['for_id']['total'] == 0)
        $this->_sections['for_id']['show'] = false;
} else
    $this->_sections['for_id']['total'] = 0;
if ($this->_sections['for_id']['show']):

            for ($this->_sections['for_id']['index'] = $this->_sections['for_id']['start'], $this->_sections['for_id']['iteration'] = 1;
                 $this->_sections['for_id']['iteration'] <= $this->_sections['for_id']['total'];
                 $this->_sections['for_id']['index'] += $this->_sections['for_id']['step'], $this->_sections['for_id']['iteration']++):
$this->_sections['for_id']['rownum'] = $this->_sections['for_id']['iteration'];
$this->_sections['for_id']['index_prev'] = $this->_sections['for_id']['index'] - $this->_sections['for_id']['step'];
$this->_sections['for_id']['index_next'] = $this->_sections['for_id']['index'] + $this->_sections['for_id']['step'];
$this->_sections['for_id']['first']      = ($this->_sections['for_id']['iteration'] == 1);
$this->_sections['for_id']['last']       = ($this->_sections['for_id']['iteration'] == $this->_sections['for_id']['total']);
?>
    <tr>
      <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" class="left" value="<?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['id']; ?>
" /></td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['formid']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['vendee']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['taker']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['total']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['pay_method']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['del_method']; ?>
</td>
      <td height="25" align="center" valign="middle" class="center"><?php if ($this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['state'] == 0): ?>未处理<?php elseif ($this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['state'] == 1): ?>已收款<?php elseif ($this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['state'] == 2): ?>已发货<?php elseif ($this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['state'] == 3): ?>已收货<?php endif; ?></td>
      <td height="25" align="center" valign="middle" class="right"><input id="lookform" name="lookform[]" type="button" class="btn" value="查看" style="border-color:#ffffff; cursor:hand;" onclick="showforminfo(<?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['id']; ?>
)" /></td>
      <td height="25" align="center" valign="middle" class="right"><input id="deal" name="deal" type="button" value="请求处理" class="btn" style="border-color:#ffffff; width:100px; cursor: hand;" onclick="showme(<?php echo $this->_tpl_vars['formarr'][$this->_sections['for_id']['index']]['formid']; ?>
)" /></td>
    </tr>
    <?php endfor; endif; ?>
    <tr>
      <td height="30" colspan="10" align="center" valign="middle"><a href="#" onclick="return alldel(shwfrm);">全选</a> <a href="#" onclick="return overdel(shwfrm);">反选</a>&nbsp;&nbsp;
          <input type="submit" value="删除选择" class="btn" style="border-color: #FFFFFF;" onclick = 'return del(shwfrm)' />      </td>
    </tr>
	  </form>
    <tr>
      <td height="30" colspan="10" align="left" valign="middle"><div id="chdl" style="display:none;">
  <table width="525" border="0" align="center" cellpadding="0" cellspacing="0">
    <form id="changedeal" name="changedeal" method="post">
      <tr>
        <td height="25" colspan="6" align="center" valign="middle" class="first">订单处理</td>
      </tr>
      <tr>
        <td width="75" height="25" align="center" valign="middle" class="left">订单号：</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><div id="formid">&nbsp;</div></td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptmon" name="acceptsend" type="radio" value="1" checked="checked" />已收款</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="sendwa" name="acceptsend" type="radio" value="2" />已发货</td>
        <td width="100" height="25" align="center" valign="middle" class="center"><input id="acceptwa" name="acceptsend" type="radio" value="3" />已收货</td>
        <td width="50" height="25" align="center" valign="middle" class="right"><input id="chg" name="chg" type="button" class="btn" value="修改" style="border-color:#FFFFFF;" onclick="return changeme(changedeal)" /></td>
      </tr>
    </form>
  </table>
</div>
</td>
    </tr>

</table>

</body>
</html>