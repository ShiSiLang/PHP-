<link rel="stylesheet" href="css/newhot.css" />
<link href="css/top.css" rel="stylesheet" type="text/css" />
<link href="css/nominate.css" rel="stylesheet" type="text/css" />
<link href="css/links.css" rel="stylesheet" type="text/css" />
<script language="javascript" src="js/createxmlhttp.js"></script>
<script language="javascript" src="js/showcommo.js"></script>
<table width="643" border="0" cellpadding="0" cellspacing="0" style=" border: 3px solid #f0f0f0;" >
	<tr>
		<td colspan="2" height="2"></td>
	</tr>
	<tr>
	  <td width="321" height="33" align="center" background="images/shop_07.gif"><div class="new"><a href="?page=nom" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	 </td>
	  <td width="322" height="33" align="right" background="images/shop_14.gif"><div class="hot"><a href="?page=hot" class="top"><img src="images/more.JPG" width="39" height="18" border="0" /></a></div>
	  &nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
	<tr>
	  <td align="center" valign="top" style="border-right: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
        <tr>{counter start=1 skip=1 direction=up print=false assign=count} {section name=new_id loop=$newarr}
          <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="{$newarr[new_id].pics}" width="100" height="80" alt="{$newarr[new_id].name}" style="border:1px solid #f0f0f0;" onclick="openshowcommo({$newarr[new_id].id})" /></a></td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">{$newarr[new_id].name}</td>
                </tr>
                <tr>
                  <td height="17" align="center" valign="middle">市场价：{$newarr[new_id].m_price}&nbsp;元</td>
                </tr>
                <tr>
                  <td height="16" align="center" valign="middle">会员价：{$newarr[new_id].v_price}&nbsp;元</td>
                </tr>
            </table></td>
			{counter}
          {if $count mod 2 != 0} </tr>
	    <tr> {/if}
	      {/section} </tr>
      </table></td>
        
		<td align="center" valign="top" style="border-left: 1px solid #f0f0f0;"><table width="295" height="307" align="center" border="0" cellpadding="0" cellspacing="0">
          <tr> {counter start=1 skip=1 direction=up print=false assign=counts}{section name=hot_id loop=$hotarr}
            <td align="left" valign="top"><table width="150" height="150" align="left" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td height="100" align="center" valign="middle"><a style="cursor:hand;" onclick=""><img src="{$hotarr[hot_id].pics}" width="100" height="80" alt="{$hotarr[hot_id].name}" style="border:1px solid #f0f0f0;" onclick="openshowcommo({$hotarr[hot_id].id})" /></a></td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">{$hotarr[hot_id].name}</td>
                  </tr>
                  <tr>
                    <td height="17" align="center" valign="middle">市场价：{$hotarr[hot_id].m_price}</td>
                  </tr>
                  <tr>
                    <td height="16" align="center" valign="middle">会员价：{$hotarr[hot_id].v_price}</td>
                  </tr>
              </table></td>
           {counter}
          {if $counts mod 2 != 0}</tr>
		  <tr> {/if}
		    {/section} </tr>
        </table></td>
</tr>
</table>
<table width="643" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td colspan="6" width="636" height="33" align="right" valign="middle"><img src="images/shop_10.gif" width="643" height="33" border="0" usemap="#Map" /></td>
		<td rowspan="3" width="7" height="238">&nbsp;</td>
	</tr>
	<tr>
    	<td width="23" height="185">&nbsp;</td>
       {section name=nom_id loop=$nomarr} 
	  <td width="145" height="185" align="left" valign="top">
      
       	  <table width="145" border="0" cellpadding="0" cellspacing="0" >
<tr>
               	  <td height="100" align="center" valign="middle"><img src="{$nomarr[nom_id].pics}" width="100" height="80" alt="{$nomarr[nom_id].name}" style="border: 1px solid #f0f0f0;" ></td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">&nbsp;{$nomarr[nom_id].name}</td>
            </tr>
                <tr>
               	  <td height="17" align="center" valign="middle">市场价：{$nomarr[nom_id].m_price}&nbsp;元</td>
            </tr>
                <tr>
                	<td height="19" align="center" valign="middle">会员价：{$nomarr[nom_id].v_price}&nbsp;元</td>
            </tr>
                <tr>
                	<td height="32" align="center" valign="middle"><input id="showinfo" name="showinfo" type="button" value="" class="showinfo" onclick="openshowcommo({$nomarr[nom_id].id})"/>&nbsp;<input id="buy" name="buy" type="button" value="" class="buy" onclick="return buycommo({$nomarr[nom_id].id})" /></td>
            </tr>
       	</table>
      </td>
      {/section}
        <td width="33" height="185">&nbsp;</td>
  </tr>
	<tr>
		<td colspan="6" width="636" height="14">&nbsp;</td>
	</tr>
</table>

<map name="Map" id="Map">
<area shape="rect" coords="585,8,635,27" href="?page=new" class="lk" />
</map>