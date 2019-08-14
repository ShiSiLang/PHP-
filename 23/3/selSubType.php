<?php
	header('Content-type: text/html;charset=GB2312');		//指定发送数据的编码格式为GB2312
	$link=mysqli_connect("localhost","root","111");
	mysqli_select_db($link,"db_database23");
	//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE',$RequestAjaxString);		//Ajax中先用encodeURIComponent对要提交的中文进行编码
	mysqli_query($link,"set names gb2312");
	$type=$_GET['type'];
	//$sql=mysql_query("select * from tb_type where type='".iconv('UTF-8','gb2312',$type)."'");	//在火狐浏览器下使用
	$sql=mysqli_query($link,"select * from tb_type where type='".$type."'");

	$result=mysqli_fetch_array($sql);
?>
<select name="typeID" id="typeID">
  <?php
do{
?>
  <option value="<?php echo $result['subtype'];?>"><?php echo $result['subtype'];?></option>
  <?php
}while($result=mysqli_fetch_array($sql));
?>
</select>
