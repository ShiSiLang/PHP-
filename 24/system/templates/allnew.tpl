<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle"><img src="images/shop_10.gif" width="643" height="33" /></td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle"> {section name=new_id loop=$newarr}
      <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="145" rowspan="5" align="center" valign="middle"><img src="{$newarr[new_id].pics}" width="90" height="100" alt="{$newarr[new_id].name}" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：{$newarr[new_id].name}</td>
            <td width="156" height="35">商品类别：{$newarr[new_id].class}</td>
            <td width="157">商品型号：{$newarr[new_id].model}</td>
          </tr>
          <tr>
            <td height="23">商品品牌：{$newarr[new_id].brand}</td>
            <td height="23" colspan="2">商品产地：{$newarr[new_id].area}</td>
          </tr>
          <tr>
            <td width="178" height="23">剩余数量：{$newarr[new_id].stocks}</td>
            <td colspan="2">销售数量：{$newarr[new_id].sell}</td>
          </tr>
          <tr>
            <td height="23">市场价：<font color="red">{$newarr[new_id].m_price}&nbsp;元</font></td>
            <td height="23" colspan="2">上市日期：{$newarr[new_id].addtime}</td>
          </tr>
          <tr>
            <td height="30">会员价格：<font color="#FF0000">{$newarr[new_id].v_price}&nbsp;元</font></td>
            <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo({$newarr[new_id].id})"  />
              &nbsp;
              <input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo({$newarr[new_id].id})" /></td>
          </tr>
        </table>
      <hr style="border: 1px solid #f0f0f0;" />
      {/section} </td>
  </tr>
  <tr>
    <td height="25">{$rst1_page}</td>
  </tr>
</table>
