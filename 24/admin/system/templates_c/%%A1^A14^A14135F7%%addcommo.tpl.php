<?php /* Smarty version 2.6.19, created on 2016-06-29 12:22:13
         compiled from addcommo.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $this->_tpl_vars['title']; ?>
</title>
<link rel="stylesheet" href="css/table.css" />
</head>
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/chkcommo.js"></script>
<body>
<table width="720" border="0" cellpadding="0" cellspacing="1">
<form id="addcommo" name="addcomm" enctype="multipart/form-data" method="post" action="addcommo_chk.php"  onsubmit="return chkcommo(addcommo)">
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">添加商品</td>
    </tr>
    <tr>
        <td width="122" height="25" align="right" class="left">商品名称：</td>
        <td width="595" class="right">&nbsp;
          <input id="name" type="text" name="name" size="25" class="txt">
      <font color="#FF0000">*</font>		</td>
    </tr>
    <tr>
        <td height="25" align="right" class="left">商品图片：</td>
        <td height="25" class="right">&nbsp;<input id="pics" type="file" name="pics" class="langtxt">        </td>
    </tr>
	<tr>
        <td height="25" align="right" class="left">商品产地：</td>
        <td height="25" class="right">&nbsp;<input id="area" name="area" type="text" class="txt">
            <font color="#FF0000">*</font>		</td>
	</tr>
    <tr>
        <td height="25" align="right" class="left">商品型号：</td>
        <td height="25" class="right">&nbsp;<input id="model" name="model" type="text" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" align="right" class="left">商品类别：</td>
      <td height="25" align="left" valign="top" class="right">
      <iframe id="menu1" name="menu1" src="menu.php" width="300" height="22" frameborder="0" scrolling="no" style=" margin-top:0px; margin-left: 0px; top:0px;"></iframe>&nbsp;<input id="stype" name="stype" type="hidden" value="" />
      </td>
    </tr>
    <tr>
        <td height="22" align="right" class="left">商品品牌：</td>
        <td height="22" class="right">&nbsp;<input id="brand" name="brand" type="text" class="txt">        </td>
    </tr>
    <tr>
        <td height="25" align="right" class="left">商品数量：</td>
        <td height="25" class="right">&nbsp;<input id="stocks" name="stocks" type="text" value="1" class="txt">
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" align="right" class="left">市场价格：</td>
    	<td height="25" class="right">&nbsp;<input id="m_price" name="m_price" type="text" class="shorttxt" onkeyup="cvp(addcommo)">&nbsp;元
            <font color="#FF0000">*</font>        </td>
    </tr>
	<tr>
        <td height="25" align="right" class="left">打折率：</td>
        <td height="25" class="right">&nbsp;<input id="fold" name="fold" type="text" value="9" class="shorttxt" onkeyup="cvp(addcommo)">&nbsp;折
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" align="right" class="left">会员价格：</td>
    	<td height="25" class="right"><div id="v_price">&nbsp;元</div></td>
    </tr>
    <tr>
        <td height="25" align="right" class="left">是否新品：</td>
        <td height="25" class="right">&nbsp;<select id="isnew" name="isnew" class="shorttxt" >
            <option value="1" selected>是</option>
            <option value="0">否</option>
          </select>		</td>
	</tr>
    <tr>
        <td height="25" align="right" class="left">是否推荐：</td>
        <td height="25" class="right">&nbsp;<select id="isnom" name="isnom" class="shorttxt" >
        <option value="1">是</option>
        <option value="0" selected>否</option>
        </select>        </td>
    </tr>
    <tr>
        <td height="25" align="right" class="left">添加时间：</td>
        <td height="25" class="right"><div id="dt"><?php echo $this->_tpl_vars['date']; ?>
</div></td>
    </tr>
	<tr>
    	<td height="80" align="right" class="left">商品简介：</td>
    	<td height="25" class="right">&nbsp;<textarea id="info" name="info" cols="70" rows="8">暂无介绍</textarea></td>
    </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="add" name="add" type="submit" class="btn" value="添加">
    &nbsp;&nbsp;<input id="reset" name="reset" type="reset" value="重写" class="btn"></td>
    </tr>
  </form>
</table>
</body>
</html>