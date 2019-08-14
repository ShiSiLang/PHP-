<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<link rel="stylesheet" href="css/nominate.css" />
<link rel="stylesheet" href="css/table.css" />
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<body>
{if $result=="FALSE"}
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">没有找到相关商品信息</td>
    </tr>
</table>
{else}
<table width="540" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
   	  <td colspan="5" align="center" valign="middle" height="30" class="first">商品信息</td>
    </tr>
{section name=sea_id loop=$searcharr} 
  <tr>
    <td width="140" height="100" rowspan="4" align="center" valign="middle" class="left"><img src="{$searcharr[sea_id].pics}" width="100" height="80" alt="{$searcharr[sea_id].name}" style="border: 1px solid #f0f0f0;"></td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品名称：</td>
    <td width="100" height="25" align="left" valign="middle" class="center">&nbsp;{$searcharr[sea_id].name}</td>
    <td width="100" height="25" align="center" valign="middle" class="center">商品类别：</td>
    <td width="100" height="25" align="left" valign="middle" class="right">&nbsp;{$searcharr[sea_id].class}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品品牌：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$searcharr[sea_id].brand}</td>
    <td height="25" align="center" valign="middle" class="center">商品型号：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$searcharr[sea_id].model}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">商品产地：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$searcharr[sea_id].area}</td>
    <td height="25" align="center" valign="middle" class="center">商品库存：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$searcharr[sea_id].stocks}</td>
  </tr>
  <tr>
    <td height="25" align="center" valign="middle" class="center">市场价格：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;{$searcharr[sea_id].m_price}</td>
    <td height="25" align="center" valign="middle" class="center">会员价格：</td>
    <td height="25" align="left" valign="middle" class="right">&nbsp;{$searcharr[sea_id].v_price}</td>
  </tr>
  <tr>
    <td height="50" align="center" valign="middle" class="left">商品简介：</td>
    <td colspan="3" class="center">&nbsp;{$searcharr[sea_id].info}</td>
    <td align="center" valign="middle" class="right"><input id="buy" name="buy" type="button" value="" class="buy" onclick="return subbuycommo({$searcharr[sea_id].id})" ></td>
  </tr>
{/section}
</table>
{/if}
</body>
</html>