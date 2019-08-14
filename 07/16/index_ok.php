<?php  
	if(!is_dir("./upfile")){ 							//判断服务器中是否存在指定文件夹
		mkdir("./upfile");								//如果不存在则创建
	} 
    $array=array_unique($_FILES["picture"]["name"]);    //删除数组中重复的值
	foreach($array as $k=>$v){							//根据元素个数执行foreach循环
		$path="upfile/".$v;								//定义上传文件存储位置
		if($v){											//判断上传文件是否为空
			if(move_uploaded_file($_FILES["picture"]["tmp_name"][$k],$path)){//执行文件上传操作
				$result=true;
			}else{
				$result=false;
			}
		}
	}
	if($result==true){
			echo "文件上传成功，请稍等...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
		}else{
			echo "文件上传是吧，请确认...";
			echo "<meta http-equiv=\"refresh\" content=\"3; url=index.php\">";
	}
?>
