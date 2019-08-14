<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<title>{$title}</title>
<table width="540" border="0" cellspacing="0" cellpadding="0">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
{section name=sho_id loop=$shoarr}
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="{$shoarr[sho_id].pics}" width="100" height="80" alt="{$shoarr[sho_id].name}" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;{$shoarr[sho_id].name}</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;{$shoarr[sho_id].class}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$shoarr[sho_id].brand}</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$shoarr[sho_id].model}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$shoarr[sho_id].area}</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$shoarr[sho_id].stocks}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$shoarr[sho_id].m_price}</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$shoarr[sho_id].v_price}</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;{$shoarr[sho_id].info}</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo({$shoarr[sho_id].id})" ></td>
  </tr>
  {/section}
</table>
