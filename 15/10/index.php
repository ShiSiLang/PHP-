<?php
	function encrpy($str,$key='key'){
		$output="";
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = $tmp ^ $key;
			$tmp = ~$tmp; 
			$output .= $tmp;
		}
		return $output;
	}
	function decrpy($str,$key='key'){
		$output="";
		$num = strlen($str);
		for($i=0;$i<$num;$i++){
			$tmp = substr($str,$i,1);
			$tmp = ~$tmp; 
			$tmp = $tmp ^ $key;
			$output .= $tmp;
		}
		return $output;
	}
?>
<form method="post" action="#">
	加密字符串<input name="str" type="text" />
	<input name="encode" type="submit" value="进行加密" />
</form>
<form method="post" action="#">
	解密后的字符串<input name="str" type="text" />
	<input name="decode" type="submit" value="进行解密" />
</form>
<?php
	if(isset($_POST['encode']) && $_POST['encode'] == '进行加密'){
		echo '加密字符串'.encrpy($_POST['str']);		
	}
	if(isset($_POST['decode']) && $_POST['decode'] == '进行解密'){
		echo '解密字符串'.decrpy($_POST['str']);
	}
?>