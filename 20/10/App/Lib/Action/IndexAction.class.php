<?php
session_start();									//初始化SESSION变量
header("Content-Type:text/html; charset=utf-8");	//设置页面编码格式
class IndexAction extends Action{
	public function index(){
		if(isset($_POST['user'])){
			if(isset($_POST['user']) && isset($_POST['pass'])){
				$db = M();							// 实例化模型类,参数数据表名称，不包含前缀
				$select = $db->query("select * from think_user where user='".$_POST['user']."' and pass='".$_POST['pass']."'");	
				if($select){
					$_SESSION['admin']=$_POST['user'];
					$this->redirect('Index/main','', 2,'用户 '.$_POST['user'].' 登录成功！');		//页面重定向		
				}else{
					$this->redirect('Index/index','', 2,'用户名或者密码不正确！');		//页面重定向		
				}
			}else{
				$this->redirect('Index/index','', 2,'用户名、密码不能为空！');		//页面重定向					
			}
		}
		$this->display();
	}
	public function main(){
		$db = M('User');							// 实例化模型类,参数数据表名称，不包含前缀
		// 进行分页数据查询 注意page方法的参数的前面部分是当前的页数使用 $_GET[p]获取
		if(isset($_GET['p'])){
			$p=$_GET['p'];
		}else{
			$p=1;
		}
		$list = $db->where('address='.'"长春市"')->order('id desc')->page($p.',1')->select();
		$this->assign('select',$list); 		// 赋值数据集
		import("ORG.Util.Page"); 			// 导入分页类
		$count = $db->where('address='.'"长春市"')->count(); // 查询满足要求的总记录数
		$Page = new Page($count,1); 	// 实例化分页类 传入总记录数和每页显示的记录数
		$show = $Page->show(); 		// 分页显示输出
		$this->assign('page',$show); 		// 赋值分页输出
		$this->display(main); 				// 输出模板
	}
	public function validatorcode(){
		header('content-type:image/png');			//定义标题png格式图像
		$im = imagecreate(65, 25);					//定义画布
		imagefill($im, 0, 0, imagecolorallocate($im, 200, 200, 200));		//区域填充
		$validatorCode = $_GET['code'];				//获取提交的值
		imagestring($im, rand(3, 5), 10, 3, substr($validatorCode, 0, 1), imagecolorallocate($im, 0, rand(0, 255), rand(0, 255)));
		imagestring($im, rand(3, 5), 25, 6, substr($validatorCode, 1, 1), imagecolorallocate($im, rand(0, 255), 0, rand(0, 255)));
		imagestring($im, rand(3, 5), 36, 9, substr($validatorCode, 2, 1), imagecolorallocate($im, rand(0, 255), rand(0, 255), 0));
		imagestring($im, rand(3, 5), 48, 12, substr($validatorCode, 3, 1), imagecolorallocate($im, 0, rand(0, 255), rand(0, 255)));
		imagepng($im);								//生成PNG图像
		imagedestroy();								//销毁图像	
	}
}
?>