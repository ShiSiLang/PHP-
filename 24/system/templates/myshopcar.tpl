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
{foreach key=key item=item from=$commarr}
  <tr>
    <td height="25" align="center" valign="middle" class="left"><input id="chk" name="chk[]" type="checkbox" value="{$item.id}"></td>
    <td height="25" align="center" valign="middle" class="center"><div id = "c_name{$key}"> &nbsp;{$item.name}</div></td>
    <td height="25" align="center" valign="middle" class="center"><input id="cnum{$key}" name="cnum{$key}" type="text" class="shorttxt" value="{$item.num}" onkeyup="cvp({$key},{$item.v_price},{$shoparr})"></td>
    <td height="25" align="center" valign="middle" class="center"><div id="m_price{$key}">&nbsp;{$item.m_price}</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="v_price{$key}">&nbsp;{$item.v_price}</div></td>
    <td height="25" align="center" valign="middle" class="center"><div id="fold{$key}">&nbsp;{$item.fold}</div></td>
    <td height="25" align="center" valign="middle" class="right"><div id="total{$key}">&nbsp;{$item.total}</div></td>
  </tr>
{/foreach}
  <tr>
    <td height="25" colspan="3" align="left" valign="middle">
    <a href="#" onclick="return alldel(myshopcar)">全选</a> <a href="#" onclick="return overdel(myshopcar);">反选</a>&nbsp;&nbsp;
      <input type="button" value="删除选择" class="btn" style="border-color: #FFFFFF;" onClick = 'return del(myshopcar);'>
&nbsp;&nbsp;    </td>
    <td height="25" align="center" valign="middle"><input id="cont" name="cont" type="button" class="btn" value="继续购物" onclick="return conshop(myshopcar)" /></td>
    <td height="25" align="center" valign="middle"><input id="uid" name="uid" type="hidden" value="{$smarty.session.member}" ><input id="settle" name="settle" type="button" class="btn" value="去收银台" onclick="return formset(form)" /></td>
    <td height="25" colspan="2" align="right" valign="middle"><div id='sum'>共计：{$sum}&nbsp;元</div></td>
    </tr>
</form>
</table>
