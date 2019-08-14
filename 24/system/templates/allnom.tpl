<table width="636" border="0" align="center" cellspacing="0" cellpadding="0">
  <tr>
    <td height="33" align="left" valign="middle" background="images/shop_07.gif">&nbsp;</td>
  </tr>
  <tr>
    <td height="132" align="left" valign="middle">
   {section name=nom_id loop=$nomarr}
   
    <table width="636" height="134" border="0" cellspacing="0" cellpadding="0">
    	<tr>
        	<td width="145" rowspan="5" align="center" valign="middle"><img src="{$nomarr[nom_id].pics}" width="90" height="100" alt="{$nomarr[nom_id].name}" style="border: 1px solid #f0f0f0;" /></td>
            <td height="35">商品名称：{$nomarr[nom_id].name}</td>
            <td width="156" height="35">商品类别：{$nomarr[nom_id].class}</td>
    	    <td width="157">商品型号：{$nomarr[nom_id].model}</td>
    	</tr>
    	<tr>
    	  <td height="23">商品品牌：{$nomarr[nom_id].brand}</td>
  	      <td height="23" colspan="2">商品产地：{$nomarr[nom_id].area}</td>
    	</tr>
    	<tr>
    	  <td width="178" height="23">剩余数量：{$nomarr[nom_id].stocks}</td>
  	      <td colspan="2">销售数量：{$nomarr[nom_id].sell}</td>
    	</tr>
    	<tr>
    	  <td height="23">市场价：<font color="red">{$nomarr[nom_id].m_price}&nbsp;元</font></td>
  	      <td height="23" colspan="2">上市日期：{$nomarr[nom_id].addtime}</td>
    	</tr>
    	<tr>
    	  <td height="30">会员价格：<font color="#FF0000">{$nomarr[nom_id].v_price}&nbsp;元</font></td>
  	      <td height="30" colspan="2" align="center" valign="middle"><input id="allshow" name="allshow" type="button" value="" class="showinfo" onclick="openshowcommo({$nomarr[nom_id].id})"  />  &nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo({$nomarr[nom_id].id})" /></td>
    	</tr>
    </table>
    <hr style="border: 1px solid #f0f0f0;" />
    {/section}
	
    </td>
  </tr>
  <tr>
  	<td height="25">&nbsp;</td>
  </tr>
</table>
