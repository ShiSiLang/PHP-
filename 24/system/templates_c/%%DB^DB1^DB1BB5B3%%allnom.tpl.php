<?php /* Smarty version 2.6.19, created on 2016-06-28 10:21:15
         compiled from allnom.tpl */ ?>
<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle" background="images/shop_07.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle">
   <?php unset($this->_sections['nom_id']);
$this->_sections['nom_id']['name'] = 'nom_id';
$this->_sections['nom_id']['loop'] = is_array($_loop=$this->_tpl_vars['nomarr']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['nom_id']['show'] = true;
$this->_sections['nom_id']['max'] = $this->_sections['nom_id']['loop'];
$this->_sections['nom_id']['step'] = 1;
$this->_sections['nom_id']['start'] = $this->_sections['nom_id']['step'] > 0 ? 0 : $this->_sections['nom_id']['loop']-1;
if ($this->_sections['nom_id']['show']) {
    $this->_sections['nom_id']['total'] = $this->_sections['nom_id']['loop'];
    if ($this->_sections['nom_id']['total'] == 0)
        $this->_sections['nom_id']['show'] = false;
} else
    $this->_sections['nom_id']['total'] = 0;
if ($this->_sections['nom_id']['show']):

            for ($this->_sections['nom_id']['index'] = $this->_sections['nom_id']['start'], $this->_sections['nom_id']['iteration'] = 1;
                 $this->_sections['nom_id']['iteration'] <= $this->_sections['nom_id']['total'];
                 $this->_sections['nom_id']['index'] += $this->_sections['nom_id']['step'], $this->_sections['nom_id']['iteration']++):
$this->_sections['nom_id']['rownum'] = $this->_sections['nom_id']['iteration'];
$this->_sections['nom_id']['index_prev'] = $this->_sections['nom_id']['index'] - $this->_sections['nom_id']['step'];
$this->_sections['nom_id']['index_next'] = $this->_sections['nom_id']['index'] + $this->_sections['nom_id']['step'];
$this->_sections['nom_id']['first']      = ($this->_sections['nom_id']['iteration'] == 1);
$this->_sections['nom_id']['last']       = ($this->_sections['nom_id']['iteration'] == $this->_sections['nom_id']['total']);
?>
   
    <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td width="145" rowspan="5" align="center" valign="middle"><img src="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['pics']; ?>
" width="90" height="100" alt="<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['name']; ?>
" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['name']; ?>
</td>
            <td width="156" height="35">商品类别：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['class']; ?>
</td>
    	    <td width="157">商品型号：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['model']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="23">商品品牌：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['brand']; ?>
</td>
  	      <td height="23" colspan="2">商品产地：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['area']; ?>
</td>
    	</tr>
    	<tr>
    	  <td width="178" height="23">剩余数量：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['stocks']; ?>
</td>
  	      <td colspan="2">销售数量：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['sell']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="23">市场价：<font color="red"><?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['m_price']; ?>
&nbsp;元</font></td>
  	      <td height="23" colspan="2">上市日期：<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['addtime']; ?>
</td>
    	</tr>
    	<tr>
    	  <td height="30">会员价格：<font color="#FF0000"><?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['v_price']; ?>
&nbsp;元</font></td>
  	      <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['id']; ?>
)"  />  &nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo(<?php echo $this->_tpl_vars['nomarr'][$this->_sections['nom_id']['index']]['id']; ?>
)" /></td>
    	</tr>
    </table>
    <hr style="border: 1px solid #f0f0f0;" />
    <?php endfor; endif; ?>
	
    </td>
  </tr>
  <tr>
  	<td height="25">&nbsp;</td>
  </tr>
</table>