<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<link rel="stylesheet" href="css/table.css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/modicommo.js"></script>
<title>{$title}</title>
<table width="720" border="0" cellpadding="0" cellspacing="1">
<form id="modcommo" name="addcomm" enctype="multipart/form-data" method="post" action="modifycommo_chk.php"  onsubmit="return chkcommo(modcommo)">
   {section name=arr_id loop=$mcarr}
    <tr>
        <td colspan="2" height="25" align="center" valign="middle" class="first">修改商品 </td>
    </tr>
    <tr>
        <td height="25" class="left">商品名称：</td>
        <td width="618" class="right">
        	<input id="name" type="text" name="name" size="25" value="{$mcarr[arr_id].name}" class="txt" readonly="readonly">
            <font color="#FF0000">*</font>		</td>
    </tr>
    <tr>
        <td height="25" class="left">商品图片：</td>
        <td height="25" class="right">
	        <input id="pics" type="file" name="pics" class="langtxt">
            <input id="picss" name="picss" type="hidden" value="{$mcarr[arr_id].pics}">
            </td>
    </tr>
	<tr>
        <td height="25" class="left">商品产地：</td>
        <td height="25" class="right">
        	<input id="area" name="area" type="text" value="{$mcarr[arr_id].area}" class="txt">
            <font color="#FF0000">*</font>		</td>
	</tr>
    <tr>
        <td height="25" class="left">商品型号：</td>
        <td height="25" class="right">
        	<input id="model" name="model" type="text" value="{$mcarr[arr_id].model}" class="txt">
            <font color="#FF0000">*</font>        </td>
    </tr>
    <tr>
        <td height="25" class="left">商品类别：</td>
      <td height="25" align="left" valign="top" class="right">
      <iframe id="menu1" name="menu1" src="menu.php" width="300" height="22" frameborder="0" scrolling="no" style=" margin-top:0px; margin-left: 0px; top:0px;"></iframe>
      <input id="stype" name="stype" type="hidden" value="{$mcarr[arr_id].class}" />
         </td>
    </tr>
    <tr>
        <td height="22" class="left">商品品牌：</td>
        <td height="22" class="right">
        	<input id="brand" name="brand" type="text" value="{$mcarr[arr_id].brand}" class="txt">        </td>
    </tr>
    <tr>
        <td height="25" class="left">商品数量：</td>
        <td height="25" class="right">
        	<input id="stocks" name="stocks" type="text" value="{$mcarr[arr_id].stocks}" class="txt">
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">市场价格：</td>
    	<td height="25" class="right">
    		<input id="m_price" name="m_price" type="text" class="shorttxt" value="{$mcarr[arr_id].m_price}" onkeyup="cvp(modcommo)">&nbsp;元
            <font color="#FF0000">*</font>        </td>
    </tr>
	<tr>
        <td height="25" class="left">打折率：</td>
        <td height="25" class="right">
        	<input id="fold" name="fold" type="text" value="{$mcarr[arr_id].fold}"  class="shorttxt" onkeyup="cvp(modcommo)">&nbsp;折
            <font color="#FF0000">*</font>        </td>
	</tr>
    <tr>
    	<td height="25" class="left">会员价格：</td>
    	<td height="25" class="right"><div id="v_price">&nbsp;{$mcarr[arr_id].v_price}元</div></td>
    </tr>
    <tr>
        <td height="25" class="left">是否新品：</td>
        <td height="25" class="right">
          <select id="isnew" name="isnew" class="shorttxt" >
            <option value="1" {if $mcarr[arr_id].isnew=="1" }selected{/if}>是</option>
            <option value="0" {if $mcarr[arr_id].isnew=="0" }selected{/if}>否</option>
          </select>		</td>
	</tr>
    <tr>
        <td height="25" class="left">是否推荐：</td>
        <td height="25" class="right">
        <select id="isnom" name="isnom" class="shorttxt" >
        <option value="1" {if $mcarr[arr_id].isnom=="1"}selected{/if}>是</option>
        <option value="0" {if $mcarr[arr_id].isnom=="0"}selected{/if}>否</option>
        </select>        </td>
    </tr>
    <tr>
        <td height="25" class="left">添加时间：</td>
        <td height="25" class="right"><div id="dt">{ $mcarr[arr_id].addtime }</div></td>
      </tr>
	<tr>
    	<td height="80" class="left">商品简介：</td>
    	<td height="25" class="right"><textarea id="info" name="info" cols="80" rows="8">{$mcarr[arr_id].info}</textarea></td>
    </tr>
    <tr>
    	<td height="25" colspan="2" align="center" valign="bottom"><input
        id="mod" name="mod" type="submit" class="btn" value="修改"><input type="hidden" name="id" value="{$id}" />
    &nbsp;&nbsp;<input id="reset" name="reset" type="reset" value="重写" class="btn"></td>
    </tr>
	{/section}
	</form>
</table>
</body>
</html>
