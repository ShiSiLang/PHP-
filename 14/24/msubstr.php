<?php 
class MsubStr{
	function csubstr($str, $start, $len) {
	$strlen = $start + $len;
	for($i = 0; $i < $strlen; $i ++) {
		if (ord ( substr ( $str, $i, 1 ) ) > 0xa0) {
			$tmpstr .= substr ( $str, $i, 2 );
			$i ++;
		} else {
			$tmpstr .= substr ( $str, $i, 1 );
		}
	}
	return $tmpstr;
}
}

?>