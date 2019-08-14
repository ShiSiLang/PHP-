<?php /* Smarty version 2.6.19, created on 2016-06-28 10:22:13
         compiled from myshopcar.tpl */ ?>
<table border="0" cellspacing="0" cellpadding="0" align="center">
<form id="myshopcar" name="myshopcar" method="post" action="#">
  <tr>
    <td height="30" colspan="7" align="center" valign="middle" class="first">我的购物车</td>
  </tr>
  <tr>
    <td width="35" height="25" align="center" valign="middle" class="left">&nbsp;</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称</td>
    <td width="100" height="25" align="center" valign="middle" class="center">购买数量</td>
    <td width="100" height="25" align="center" valign="middle" class="center">市场价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">会员价格</td>
    <td width="100" height="25" align="center" valign="middle" class="center">折扣率</td>
    <td width="100" height="25" align="center" valign="middle" class="right">合计</td>
  </tr>
<?php $_from = $this->_tpl_vars['commarr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="<?php echo $this->_tpl_vars['item']['id']; ?>
"></td>
    <td height="25" align="center" valign="middle" class="center"><div id = "c_name<?php echo $this->_tpl_vars['key']; ?>
"> &nbsp;<?php echo $this->_tpl_vars['item']['name']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><input id="cnum<?php echo $this->_tpl_vars['key']; ?>
" name="cnum<?php echo $this->_tpl_vars['key']; ?>
" type="text" class="shorttxt" value="<?php echo $this->_tpl_vars['item']['num']; ?>
" onkeyup="cvp(<?php echo $this->_tpl_vars['key']; ?>
,<?php echo $this->_tpl_vars['item']['v_price']; ?>
,<?php echo $this->_tpl_vars['shoparr']; ?>
)"></td>
    <td height="25" align="center" valign="middle" class="center"><div id="m_price<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['m_price']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="v_price<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['v_price']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="fold<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['fold']; ?>
</div></td>
    <td height="25" align="center" valign="middle" class="right"><div id="total<?php echo $this->_tpl_vars['key']; ?>
">&nbsp;<?php echo $this->_tpl_vars['item']['total']; ?>
</div></td>
  </tr>
<?php endforeach; endif; unset($_from); ?>
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">
    <a href="#" onclick="return alldel(myshopcar)">全选</a> <a href="#" onclick="return overdel(myshopcar);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(myshopcar);'>
&nbsp;&nbsp;    </td>
    <td height="25" align="center" valign="middle"><input id="cont" name="cont" type="button" class="btn" value="继续购物" onclick="return conshop(myshopcar)" /></td>
    <td height="25" align="center" valign="middle"><input id="uid" name="uid" type="hidden" value="<?php echo $_SESSION['member']; ?>
" ><input id="settle" name="settle" type="button" class="btn" value="去收银台" onclick="return formset(form)" /></td>
    <td height="25" colspan="2" align="right" valign="middle"><div id='sum'>共计：<?php echo $this->_tpl_vars['sum']; ?>
&nbsp;元</div></td>
    </tr>
</form>
</table>