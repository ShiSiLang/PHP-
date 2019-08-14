<?php
class IndexAction extends Action{
    public function index(){
        header("Content-Type:text/html; charset=utf-8");		//设置编码格式
        echo "<div style='font-weight:normal;color:blue;float:left;width:345px;text-align:center;border:1px solid silver;background:#E8EFFF;padding:8px;font-size:14px;font-family:Tahoma'>^_^ <span style='font-weight:bold;color:red'>明日科技欢迎您！</span></div>";									//输出内容
    }
}
?>
