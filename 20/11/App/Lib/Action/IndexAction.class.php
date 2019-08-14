<?php
session_start();
header("Content-Type:text/html; charset=utf-8");		//设置页面编码格式
class IndexAction extends Action{
	public function index(){
		if(isset($_POST['user'])){
			if(isset($_POST['user']) && isset($_POST['pass']) && isset($_POST['validatorCode'])){
				if($_SESSION['verify'] == md5($_POST['validatorCode'])) {	//验证验证码是否正确
					$db = M();							// 实例化模型类,参数数据表名称，不包含前缀
					$select = $db->query("select * from think_user where user='".$_POST['user']."' and pass='".$_POST['pass']."'");	
					if($select){
						$_SESSION['admin']=$_POST['user'];
						$this->redirect('Index/main','', 2,'用户 '.$_POST['user'].' 登录成功！');		//页面重定向		
					}else{
						$this->redirect('Index/index','', 2,'用户名或者密码不正确！');		//页面重定向		
					}
				}else{
					$this->redirect('Index/index','', 2,'验证码不正确！');		//页面重定向										
				}
			}else{
				$this->redirect('Index/index','', 2,'用户名、密码不能为空！');		//页面重定向					
			}
		}
		$this->display();
	}
	public function main(){
		$db = M('User');								// 实例化模型类,参数数据表名称，不包含前缀
		import("ORG.Util.Page"); 						// 导入分页类
		$count = $db->count(); 							// 统计总记录数
		//$count = $User->where("status=1")->count(); 	// 查询满足要求的总记录数
		$Page = new Page($count,1); 					// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show(); 							// 分页显示输出
		// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
		$list = $db->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
		$this->assign('select',$list); // 赋值数据集
		$this->assign('page',$show); // 赋值分页输出
		$this->display(main); // 输出模板
	}
	public function verify(){
		import("ORG.Util.Image");				//载入验证码类
		image::buildImageVerify(4,5);				//生成验证码
	}
}
?>