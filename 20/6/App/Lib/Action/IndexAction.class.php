<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
		$db_dsn="mysql://root:111@127.0.0.1:3306/db_database20";	//定义DSN
		$db = new Db();										//执行类的实例化
		$conn=$db->getInstance($db_dsn); 					//连接数据库，返回数据库驱动类 
		$select=$conn->query('select * from think_user');			//执行查询语句
		$this->assign('select',$select); 							// 模板变量赋值
		$this->display(); 										// 指定模板页
	}
	public function type(){
		$db_dsn="mysql://root:111@127.0.0.1:3306/db_database20";	//定义DSN
 		$db = new Db();
		$conn=$db->getInstance($db_dsn); 					//连接数据库，返回数据库驱动类 
		$select=$conn->query('select * from think_type');	//执行查询语句
		$this->assign('select',$select); 					// 模板变量赋值
		$this->display('type'); 							// 指定模板页
	}
}