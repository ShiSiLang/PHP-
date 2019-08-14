<?php /* Smarty version 2.6.19, created on 2016-06-28 10:21:42
         compiled from showcommo.tpl */ ?>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
<?php unset($this->_sections['sho_id']);
$this->_sections['sho_id']['name'] = 'sho_id';
$this->_sections['sho_id']['loop'] = is_array($_loop=$this->_tpl_vars['shoarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['sho_id']['show'] = true;
$this->_sections['sho_id']['max'] = $this->_sections['sho_id']['loop'];
$this->_sections['sho_id']['step'] = 1;
$this->_sections['sho_id']['start'] = $this->_sections['sho_id']['step'] > 0 ? 0 : $this->_sections['sho_id']['loop']-1;
if ($this->_sections['sho_id']['show']) {
    $this->_sections['sho_id']['total'] = $this->_sections['sho_id']['loop'];
    if ($this->_sections['sho_id']['total'] == 0)
        $this->_sections['sho_id']['show'] = false;
} else
    $this->_sections['sho_id']['total'] = 0;
if ($this->_sections['sho_id']['show']):

            for ($this->_sections['sho_id']['index'] = $this->_sections['sho_id']['start'], $this->_sections['sho_id']['iteration'] = 1;
                 $this->_sections['sho_id']['iteration'] <= $this->_sections['sho_id']['total'];
                 $this->_sections['sho_id']['index'] += $this->_sections['sho_id']['step'], $this->_sections['sho_id']['iteration']++):
$this->_sections['sho_id']['rownum'] = $this->_sections['sho_id']['iteration'];
$this->_sections['sho_id']['index_prev'] = $this->_sections['sho_id']['index'] - $this->_sections['sho_id']['step'];
$this->_sections['sho_id']['index_next'] = $this->_sections['sho_id']['index'] + $this->_sections['sho_id']['step'];
$this->_sections['sho_id']['first']      = ($this->_sections['sho_id']['iteration'] == 1);
$this->_sections['sho_id']['last']       = ($this->_sections['sho_id']['iteration'] == $this->_sections['sho_id']['total']);
?>
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['pics']; ?>
" width="100" height="80" alt="<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['name']; ?>
</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['class']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['brand']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['model']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['area']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['stocks']; ?>
</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['m_price']; ?>
</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['v_price']; ?>
</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['info']; ?>
</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo(<?php echo $this->_tpl_vars['shoarr'][$this->_sections['sho_id']['index']]['id']; ?>
)" ></td>
  </tr>
  <?php endfor; endif; ?>
</table>