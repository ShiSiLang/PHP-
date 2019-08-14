<?php
header("Content-Type:text/html; charset=utf-8");			//设置页面编码格式
class UserAction extends Action{							//定义类，继承基础类
    public function insert() {							//定义方法
		$ins = new Model('user');   						// 实例化模型类，传递参数为没有前缀的数据表名称
		$ins->Create(); 								// 创建数据对象
		$result = $ins->add(); 							// 写入数据库
		$this->redirect('Index/index','', 5,'页面跳转中');		//页面重定向
  	}
}
?>