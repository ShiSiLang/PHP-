<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>{$title}</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<script language="javascript" src="js/settle.js"></script>
<body>
<table width="450" border="0" cellspacing="0" cellpadding="0">
<form id="buyform" name="buyform" method="post" action="settle_chk.php" onSubmit="return chkform(buyform)">
  <tr>
    <td height="25" colspan="4" align="center" valign="middle" class="first">订单信息</td>
  </tr>
  <tr>
    <td height="25" align="right" valign="middle" class="left">收货人：</td>
    <td width="140" height="25" align="left" valign="middle" class="center">&nbsp;<input name="taker" type="text" class="txt" id="taker" size="20" /></td>
    <td width="49" align="right" valign="middle" class="center">邮编：</td>
    <td width="159" align="left" valign="middle" class="right">&nbsp;<input name="code" type="text" class="txt" id="code" size="20" /></td>
  </tr>
  <tr>
    <td width="102" height="25" align="right" valign="middle" class="left">联系电话：</td>
    <td height="25" align="left" valign="middle" class="center">&nbsp;<input name="tel" type="text" class="txt" id="tel" size="20" />    </td>
    <td height="25" colspan="2" align="left" valign="middle" class="center">&nbsp;</td>
    </tr>
  <tr>
    <td width="102" height="25" align="right" valign="middle" class="left">地址：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<input name="address" type="text" class="langtxt" id="address" size="20" /></td>
  </tr>
  <tr>
    <td width="102" height="25" align="right" valign="middle" class="left">送货方式：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="del" name="del">
    	<option value="平邮">平邮</option>
        <option value="快递">快递</option>
        <option value="送货上门">送货上门</option>
    </select>    </td>
  </tr>
  <tr>
    <td width="102" height="25" align="right" valign="middle" class="left"> 付款方式：</td>
    <td height="25" colspan="3" align="left" valign="middle" class="right">&nbsp;<select id="pay" name="pay">
    	<option value="银行转账">银行转账</option>
        <option value="邮局汇款">邮局汇款</option>
        <option value="支付宝">支付宝</option>
    </select>    </td>
  </tr>
  <tr>
    <td height="30" colspan="4" align="center" valign="middle"><input id="enter" name="enter" type="submit" value="提交订单" class="btn" /><input id="fst" name="fst" type="hidden" value="{$fst}" /><input id="snd" name="snd" type="hidden" value="{$snd}" /><input id="uid" name="uid" type="hidden" value="{$uid}" ></td>
  </tr>
</form>
</table>
</body>
</html>
