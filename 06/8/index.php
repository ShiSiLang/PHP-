<table border="0" cellpadding="0" cellspacing="0">
<form method="post" action="#">
	<tr>
    	<td height="25">Email</td>
        <td height="25"><input name="email" type="text" /></td>
        <td><input type="submit" value="提交" /></td>
    </tr>
</form>
</table>
<?php
	$email = isset($_POST['email'])?$_POST['email']:"";
	if(trim($email) != ''){
		$pattern = '/^[a-zA-Z][a-zA-z0-9-]*[@]([a-zA-Z0-9]*[.]){1,3}[a-zA-Z]*/';
		if(preg_match($pattern,$email) == 1){
			echo '合法的email地址 '.$email;
		}else{
			echo 'email不合法';
		}
	}
?>