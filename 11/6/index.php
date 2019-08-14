<?php
// 封装_session_open()函数，连接数据库
function _session_open($save_path,$session_name)
{
	global $handle;
	$handle = mysqli_connect('localhost','root','123456') or die('数据库链接失败');
	mysqli_select_db($handle,'db_database11') or die('数据库中没有该数据库');
	return(true);
}

// 封装_session_close()函数，关闭数据库连接
// 在这个函数中不需要任何参数，所以不论是Session存储到数据库还是文件中，只需返回true即可。但是如果是MySQL数据库，最好是将数据库关闭，以保证以后不会出现麻烦。
function _session_close()
{
	global $handle;
	mysqli_close($handle);
	return(true);
}

// 封装_session_read()函数，在函数中设定当前时间的UNIX时间戳，根据$key值查找Session名称及内容
function _session_read($key)
{
	global $handle;	
	$time = time();
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $time";
	$result = mysqli_query($handle,$sql);
	$row = mysqli_fetch_array($result);
	if ($row)
		return($row['session_data']);
	else
		return(false);
}

// 封装_session_write()函数，函数中设定Session失效时间，查找到Session名称及内容，如果查询结果为空，则将页面中的Session根据session_id、session_name、失效时间插入数据库；如果查询结果不为空，则根据$key修改数据库中Session的存储信息，返回执行结果
function _session_write($key,$data)
{
	global $handle;
	$time = 60*60;
	$lapse_time = time() + $time;
	$handle = mysqli_connect('localhost','root','123') or die('数据库链接失败');
	mysqli_select_db($handle,'db_database11') or die('数据库没有此库名');	
	$sql = "select session_data from tb_session where session_key = '$key' and session_time > $lapse_time";
	$result = mysqli_query($handle,$sql);
	if (mysqli_num_rows($result) == 0)
	{
		$sql = "insert into tb_session values('$key','$data',$lapse_time)";	
		$result = mysqli_query($handle,$sql);
	}else
	{
		$sql = "update tb_session set session_key = '$key',session_data = '$data',session_time = $lapse_time where session_key = '$key'";												// �޸����ݿ�sql���
		$result = mysqli_query($handle,$sql);
	}
	return($result);
}

// 封装_session_destroy()函数，根据$key值将数据库中的Session删除
function _session_destroy($key)
{
	global $handle;
	$sql = "delete from tb_session where session_key = '$key'";
	$result = mysqli_query($handle,$sql);
	return($result);
}

// 封装_session_gc()函数，根据给出的失效时间删除过期Session
function _session_gc()
{
	global $handle;
	$lapse_time = time();
	$sql = "delete from tb_session where session_time < $lapse_time";
	$result = mysqli_query($handle,$sql);
	return($result);
}

session_set_save_handler('_session_open','_session_close','_session_read','_session_write','_session_destroy','_session_gc');

session_start();

$_SESSION['user'] = 'mr';
$_SESSION['pwd'] = 'mrsoft';
?>