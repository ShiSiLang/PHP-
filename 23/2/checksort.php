<?php
	$link=mysqli_connect("localhost","root","111");
	mysqli_select_db($link,"db_database23");
	//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE',$RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
	mysqli_query($link,"set names gb2312");
	$sort=$_GET['txt_sort'];
	mysqli_query($link,"insert into tb_sort(sort) values('$sort')");
	header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
?>
<table border="0" cellpadding="0" cellspacing="0">
  <tr>
	<td>
	<select name="select" >
	<?php
		$link=mysqli_connect("localhost","root","111");
		mysqli_select_db($link,"db_database23");
		//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);			//Ajax中先用encodeURIComponent对要提交的中文进行编码
		mysqli_query($link,"set names gb2312");
		$sql=mysqli_query($link,"select distinct * from tb_sort group by sort");
		$result=mysqli_fetch_object($sql);
		do{
			header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
	?>
  	<option value="<?php echo $result->sort;?>" selected><?php echo $result->sort;?></option>
	<?php
		}while($result=mysqli_fetch_object($sql));
	?>
    </select>
    </td>
    <td width="20%" height="21" align="right" valign="baseline"><input name="txt_sort" type="text" id="txt_sort" size="12" style="border:1px #64284A solid; height:21"></td>
    <td width="49%" height="21" align="left" valign="baseline"><img src="images/add.gif" width="67" height="23" onclick="checksort();"></td>
  </tr>
</table>