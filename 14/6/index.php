<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>继承</title>
<style type="text/css">
<!--
body,td,th {
	font-size: 12px;
}
body {
	margin-left: 10px;
	margin-top: 10px;
	margin-right: 10px;
	margin-bottom: 10px;
}
-->
</style></head>
<body>
<?php
class SportObject{
	public $name;								//定义姓名成员变量
	public $height;								//定义身高成员变量
	public $avoirdupois;						//定义体重成员变量
	public $age;								//定义年龄成员变量
	public $sex;								//定义性别成员变量
	public function __construct($name,$height,$avoirdupois,$age,$sex){				//���幹�췽��
		$this->name=$name;						//为成员变量赋值
		$this->height=$height;					//为成员变量赋值
		$this->avoirdupois=$avoirdupois;		//为成员变量赋值
		$this->age=$age;						//为成员变量赋值
		$this->sex=$sex;						//为成员变量赋值
	}
	public function bootFootBall(){				//声明方法
		if($this->height<185 and $this->avoirdupois<85){
			return $this->name."符合踢足球的要求!";	//声明成员方法
		}else{
			return $this->name."不符合踢足球的要求!";//方法实现的功能
		}
	}
	function __destruct(){
		echo "<p><b>对象被销毁了，调用了析构方法...</b></p>";
	}

	function showMe(){
		echo '这句话不会被显示';
	}
}

class BeatBasketBall extends SportObject{//定义子类，继承父类
	public $height;						 //定义身高成员变量
	function __construct($name,$height){ //定义析构方法
		$this -> height = $height;		 //为成员变量赋值
		$this -> name = $name;			 //为成员变量赋值
	}
	function showMe(){					 //定义方法
		if($this->height>185){
			return $this->name."符合打篮球的要求!";	//方法实现的功能
		}else{
			return $this->name."不符合打篮球的要求!";//方法实现的功能
		}
	}
}

class WeightLifting extends SportObject{
	function showMe(){
		if($this->avoirdupois<85){
			return $this->name."符合打举重的要求!";	
		}else{
			return $this->name."不符合打举重的要求!";
		}
	}
}

$beatbasketball = new BeatBasketBall('科技','190');				//实例化子类
$weightlifting = new WeightLifting('小明','185','80','20','男');
echo $beatbasketball->showMe()."<br>";							//输出结果
echo $weightlifting->showMe()."<br>";
?>

</body>
</html>

