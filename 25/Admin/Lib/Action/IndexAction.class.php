<?php
class IndexAction extends Action{
    public function index(){			//默认后台登录页面
        $this->display();
    }
    public function admin(){			//后台登录处理方法
    	vendor('admin');					//载入配置文件中设置的用户名和密码	
    	$username=$_POST['text'];		//获取用户名
    	$userpwd=$_POST['pwd'];
    	if($username==""||$userpwd==""){				//判断用户名和密码是否为空
    		$this->assign('hint','用户名或者密码不能为空');
			$this->assign('url','__URL__');
			$this->display('information');				//指定提示信息模板页
    	}else{
    		if($username!=Session::get(MR)||$userpwd!=Session::get(MRKJ)){	//验证登录用户是否正确
    			$this->assign('hint','您不是权限用户');
				$this->assign('url','__URL__/');
				$this->display('information');
    		}else{
				$_SESSION['username']=$username;		//将登录用户名赋给SESSION变量
				$_SESSION['userpwd']=$userpwd;
    			$this->assign('hint','欢迎管理员回归');
				$this->assign('url','__URL__/adminIndex');	//设置后台管理主页链接
				$this->display('information');
    		}
    	}
	}
	public function high(){									//高级类别处理方法
		header("Content-Type:text/html;charset=utf-8");		//设置编码格式
		$com=M('hightype');									//实例化模型类，a_hightype表
		if($_GET['handle']=='insert'){						//判断超级链接的参数值，是添加语句还是管理数据
			if(IndexAction::checkEnv()){					//判断用户是否具有添加权限
				if(isset($_POST['button'])){					
					$data['ChineseName']=$_POST['ChineseName'];	//获取表单提交的数据
					$data['EnglishName']=$_POST['EnglishName'];
					$data=$com->data($data)->add();				//执行添加操作
					if($data!=false){
						$this->assign('hint','数据添加成功！');
						$this->assign('url','adminIndex?type_link=high&handle=admin');
						$this->display('information');
					}else{
						$this->assign('hint','添加失败！');
						$this->assign('url','adminIndex?type_link=high&handle=insert');
						$this->display('information');
					}
				}
			}
		}else{
			import("ORG.Util.Page");	//载入分页类
			$count=$com->count();		//统计总的记录数
			$Page=new Page($count,8);	//实例化分页类，设置每页显示8条记录
			$show= $Page->show();		//输出分页超级链接
			$list = $com->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();	//执行分页查询
			$this->assign('list',$list);	//将查询结果赋给模板变量
			$this->assign('page',$show); 	//将获取的分页超级链接赋给模板变量
		}
	}
	public function middle(){
		header("Content-Type:text/html;charset=utf-8");
		$com=M('middletype');
		$hightype =M('hightype');
		$highdata=$hightype ->select();
		$this->assign('highdata',$highdata);
		if($_GET['handle']=='insert'){
			if(IndexAction::checkEnv()){
				if(isset($_POST['button'])){
					$data['hightid']=$_POST['hightid'];
					$data['ChineseName']=$_POST['ChineseName'];
					$data['EnglishName']=$_POST['EnglishName'];
					$data=$com->data($data)->add();
					if($data!=false){
						$this->assign('hint','数据添加成功！');
						$this->assign('url','adminIndex?type_link=middle&handle=admin');
						$this->display('information');
					}else{
						$this->assign('hint','添加失败！');
						$this->assign('url','adminIndex?type_link=middle&handle=insert');
						$this->display('information');
					}
				}
			}
		}else{
			import("ORG.Util.Page");
			$count=$com->count();
			$Page=new Page($count,8);
			$show= $Page->show();
			$list = $com->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show); 
		}
	}
	public function elementary(){
		header("Content-Type:text/html;charset=utf-8");
		$com=M('elementarytype');
		$middletype =M('middletype');
		$middledata=$middletype ->select();
		$this->assign('middledata',$middledata);
		if($_GET['handle']=='insert'){
			if(IndexAction::checkEnv()){
				if(isset($_POST['button'])){
					$data['middleid']=$_POST['middleid'];
					$data['ChineseName']=$_POST['ChineseName'];
					$data['EnglishName']=$_POST['EnglishName'];
					$data=$com->data($data)->add();
					if($data!=false){
						$this->assign('hint','数据添加成功！');
						$this->assign('url','adminIndex?type_link=elementary&handle=admin');
						$this->display('information');
					}else{
						$this->assign('hint','添加失败！');
						$this->assign('url','adminIndex?type_link=elementary&handle=insert');
						$this->display('information');
					}
				}
			}
		}else{
			import("ORG.Util.Page");
			$count=$com->count();
			$Page=new Page($count,8);
			$show= $Page->show();
			$list = $com->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show); 
		}
	}
	public function small(){
		header("Content-Type:text/html;charset=utf-8");
		$com=M('smalltype');
		$elementarytype =M('elementarytype');
		$elementarydata=$elementarytype ->select();
		$this->assign('elementarydata',$elementarydata);
		if($_GET['handle']=='insert'){
			if(IndexAction::checkEnv()){
				if(isset($_POST['button'])){
					$data['elementaryid']=$_POST['elementaryid'];
					$data['ChineseName']=$_POST['ChineseName'];
					$data['EnglishName']=$_POST['EnglishName'];
					$data=$com->data($data)->add();
					if($data!=false){
						$this->assign('hint','数据添加成功！');
						$this->assign('url','adminIndex?type_link=small&handle=admin');
						$this->display('information');
					}else{
						$this->assign('hint','添加失败！');
						$this->assign('url','adminIndex?type_link=small&handle=insert');
						$this->display('information');
					}
				}
			}
		}else{
			import("ORG.Util.Page");
			$count=$com->count();
			$Page=new Page($count,8);
			$show= $Page->show();
			$list = $com->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();
			$this->assign('list',$list);
			$this->assign('page',$show); 
		}
	}

	public function common(){					//数据的处理方法
		$com=M('common');						//实例化模型
		if($_GET['handle']=='insert'){			//判断是否是添加操作
			if(IndexAction::checkEnv()){		//判断用户的权限
				$middletype =M('middletype');		//实例化中级类别
				$data2=$middletype ->select();		//执行查询操作
				$this->assign('data2',$data2);		//将查询结果赋给模板变量
				$elementarytype=M('elementarytype');
				$data3=$elementarytype->select();
				$this->assign('data3',$data3);
				$smalltype=M('smalltype');
				$data4=$smalltype->select();
				$this->assign('data4',$data4);
				if(isset($_POST['button'])){		//判断提交按钮是否被设置
					$data['middleid']=$_POST['middleid'];				//获取表单提交的数据
					$data['elementaryid']=$_POST['elementaryid'];
					$data['smallid']=$_POST['smallid'];
					$data['title']=$_POST['title'];
					$data['href']=$_POST['href'];
					$data=$com->data($data)->add();						//执行数据的添加操作
					if($data!=false){
						$this->assign('hint','数据添加成功！');
						$this->assign('url','adminIndex?type_link=data&handle=admin');
						$this->display('information');
					}else{
						$this->assign('hint','添加失败！');
						$this->assign('url','adminIndex?type_link=data&handle=insert');
						$this->display('information');
					}
				}
			}
		}else{
			import("ORG.Util.Page");
			$count=$com->count();					//统计数据库中的记录数
			$Page=new Page($count,8);				//实例化分页类
			$show= $Page->show();					//获取分页超级链接
			$list = $com->order('id')->limit($Page->firstRow.','.$Page->listRows)->select();	//执行分页查询
			$this->assign('list',$list);			//将分页查询结果赋给模板变量
			$this->assign('page',$show);			//将获取的分页超级链接赋给模板变量
			
		}
	}
	public function adminIndex(){				//后台管理系统主页
		if(IndexAction::checkEnv()){			//判断是否具有访问权限
			switch($_GET['type_link']){			//根据超级链接传递的变量值输出对应的内容
				case "high":					
					IndexAction::high();		//执行high方法
				break;
				case "middle":
					IndexAction::middle();
				break;
				case "elementary":
					IndexAction::elementary();
				break;
				case "small":
					IndexAction::small();
				break;
				case "data":
					IndexAction::common();
				break;
				default:						//默认输出数据管理内容
					IndexAction::common();
			}
			$this->display('adminIndex');		//指定模板页
		}
	}
	
	function deletedata(){						//删除数据方法
		if(IndexAction::checkEnv()){			//判断是否具有删除权限
			$cl=urldecode($_GET['link_id']);	//获取超级链接传递的ID值
			$new=M('common');					//实例化模型类
			$new=$new->execute("delete from a_common where id in (".$cl.")");	//执行删除语句
			if($new!=false){
				$this->assign('hint','数据删除成功！');
				$this->assign('url','adminIndex?type_link=data&handle=admin');
				$this->display('information');
			}else{
				$this->assign('hint','出现未知错误！');
				$this->assign('url','adminIndex?type_link=data&handle=admin');
				$this->display('information');
			}
		}
	}
	function deletetype(){
		if(IndexAction::checkEnv()){				//判断当前用户是否具备删除权限
			$cl=urldecode($_GET['link_id']);		//获取超级链接传递的ID值
			$new=M('hightype');						//实例化模型类
			$new=$new->execute("delete from a_hightype where id in (".$cl.")");	//以ID值为条件，执行删除操作
			if($new!=false){
				$new=M('middletype');				//实例化中级类别表
				$new=$new->execute("delete from a_middletype where hightid in (".$cl.")");	//删除中级类别中数据
				$newe=M('elementarytype');
				$newe=$newe->execute("delete from a_elementarytype where middleid in (".$cl.")");
				$news=M('smalltype');
				$news=$news->execute("delete from a_smalltype where elementaryid in (".$cl.")");
				$this->assign('hint','数据删除成功！');
				$this->assign('url','adminIndex?type_link=high&handle=admin');
				$this->display('information');
			}else{
				$this->assign('hint','出现未知错误！');
				$this->assign('url','adminIndex?type_link=high&handle=admin');
				$this->display('information');
			}
		}
	}
	function deletemiddle(){
		if(IndexAction::checkEnv()){
			$cl=urldecode($_GET['link_id']);
			$new=M('middletype');
			$new=$new->execute("delete from a_middletype where id in (".$cl.")");
			if($new!=false){
				$newe=M('elementarytype');
				$newe=$newe->execute("delete from a_elementarytype where middleid in (".$cl.")");
				$news=M('smalltype');
				$news=$news->execute("delete from a_smalltype where elementaryid in (".$cl.")");
				$this->assign('hint','数据删除成功！');
				$this->assign('url','adminIndex?type_link=middle&handle=admin');
				$this->display('information');
			}else{
				$this->assign('hint','出现未知错误！');
				$this->assign('url','adminIndex?type_link=middle&handle=admin');
				$this->display('information');
			}
		}
	}
	function deleteelementary(){
		if(IndexAction::checkEnv()){
			$cl=urldecode($_GET['link_id']);
			$new=M('elementarytype');
			$new=$new->execute("delete from a_elementarytype where id in (".$cl.")");
			if($new!=false){
				$news=M('smalltype');
				$news=$news->execute("delete from a_smalltype where elementaryid in (".$cl.")");
				$this->assign('hint','数据删除成功！');
				$this->assign('url','adminIndex?type_link=elementary&handle=admin');
				$this->display('information');
			}else{
				$this->assign('hint','出现未知错误！');
				$this->assign('url','adminIndex?type_link=elementary&handle=admin');
				$this->display('information');
			}
		}
	}
	function deletesmall(){
		if(IndexAction::checkEnv()){
			$cl=urldecode($_GET['link_id']);
			$new=M('smalltype');
			$new=$new->execute("delete from a_smalltype where id in (".$cl.")");
			if($new!=false){
				$this->assign('hint','数据删除成功！');
				$this->assign('url','adminIndex?type_link=small&handle=admin');
				$this->display('information');
			}else{
				$this->assign('hint','出现未知错误！');
				$this->assign('url','adminIndex?type_link=small&handle=admin');
				$this->display('information');
			}
		}
	}
	public function logout(){
		vendor('admin');					//载入配置文件中设置的用户名和密码	
		if($_SESSION['username']==Session::get(MR) and $_SESSION['userpwd']==Session::get(MRKJ)){
			session_destroy();
			$this->assign('hint','管理员退出');
			$this->assign('url','__URL__/');
			$this->display('information');
		}
    }
    public function checkEnv(){
		import("ORG.Util.Session");
		if($_SESSION['username']!=Session::get(MR) and $_SESSION['userpwd']!=Session::get(MRKJ)){	//判断用户名和密码是否正确
			$this->assign('hint','您不是权限用户');
			$this->assign('url','__URL__/');
			$this->display('information');
			$login=false;
		}else{
			$login=true;
		}
		return $login;		//返回判断结果
    }
}
?>