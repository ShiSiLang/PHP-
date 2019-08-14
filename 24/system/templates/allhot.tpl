<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle" background="images/shop_14.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle"> {section name=hot_id loop=$hotarr}
      <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="145" rowspan="5" align="center" valign="middle"><img src="{$hotarr[hot_id].pics}" width="90" height="100" alt="{$hotarr[hot_id].name}" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：{$hotarr[hot_id].name}</td>
            <td width="156" height="35">商品类别：{$hotarr[hot_id].class}</td>
            <td width="157">商品型号：{$hotarr[hot_id].model}</td>
          </tr>
          <tr>
            <td height="23">商品品牌：{$hotarr[hot_id].brand}</td>
            <td height="23" colspan="2">商品产地：{$hotarr[hot_id].area}</td>
          </tr>
          <tr>
            <td width="178" height="23">剩余数量：{$hotarr[hot_id].stocks}</td>
            <td colspan="2">销售数量：{$hotarr[hot_id].sell}</td>
          </tr>
          <tr>
            <td height="23">市场价：<font color="red">{$hotarr[hot_id].m_price}&nbsp;元</font></td>
            <td height="23" colspan="2">上市日期：{$hotarr[hot_id].addtime}</td>
          </tr>
          <tr>
            <td height="30">会员价格：<font color="#FF0000">{$hotarr[hot_id].v_price}&nbsp;元</font></td>
            <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo({$hotarr[hot_id].id})"  />
              &nbsp;
              <input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo({$hotarr[hot_id].id})" /></td>
          </tr>
        </table>
      <hr style="border: 1px solid #f0f0f0;" />
      {/section} </td>
  </tr>
  <tr>
    <td height="25">&nbsp;</td>
  </tr>
</table>
