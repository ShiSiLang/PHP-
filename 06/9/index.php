<table border="0" cellpadding="0" cellspacing="0">
<form method="post" action="#">
	<tr>
    	<td height="25">匹配html标签</td>
        <td height="25"><input name="tags" type="text" /></td>
        <td><input type="submit" value="提交" /></td>
    </tr>
</form>
</table>
<?php
	$tags = isset($_POST['tags'])?$_POST['tags']:"";
	if(trim($tags) != ''){
		$pattern = '/^<[\/]?[a-zA-z0-9 ="\';":]*>$/';
		if(preg_match($pattern,$tags) == 1){
			$tags = str_replace('<','&lt;',$tags);
			$tags = str_replace('>','&gt;',$tags);
			$tags = str_replace('"','&quot;',$tags);
			echo '匹配成功' .$tags;
		}else{
			echo '匹配失败';
		}
	}
?>