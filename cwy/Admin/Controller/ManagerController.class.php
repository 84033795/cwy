<?php
//命名空间
namespace Admin\Controller;
use Think\Controller;
use Think\Verify;//给Verify做空间类元素引入

class ManagerController extends Controller{
 function login(){
	if($_POST){
		$vry=new Verify();
	 if($vry->check($_POST['captcha'])){
            //用户名和密码校验
            $name=$_POST['admin_name'];
            $pwd =$_POST['pass_word'];
            //where(数组方式/sql语句表达式)条件设置
            //不要使用原生sql语句，有sql注入安全问题
            $info=D('admin')->where(array('admin_name'=>$name,'pass_word'=>$pwd))->find();

            if($info){
            	session('admin_id',$info['id']);
            	session('admin_name',$info['admin_name']);
                $this->redirect('Index/index');
            }else{
            	$this->redirect('Manager/login','',1,"用户名或密码错误");
            }

		}else{
            $this->redirect('Manager/login','',1,"验证码错误");
		  }	

	  }			
	  $this->display();
  }
	
	 //输出验证码
    function verifyImg(){
        //配置验证码
        $cfg = array(
            'fontSize'  =>  12,        // 验证码字体大小(px)
            'imageH'    =>  30,        // 验证码图片高度
            'imageW'    =>  80,       // 验证码图片宽度
            'length'    =>  4,         // 验证码位数
            'fontttf'   =>  '4.ttf',   // 验证码字体，不设置随机获取
            'useCurve'  =>  false,            // 是否画混淆曲线
            'useNoise'  =>  true,            // 是否添加杂点	
        );
        $very = new Verify($cfg);
        //$very = new \Think\Verify($cfg);
        $very -> entry();

    }
   function logout(){
   	 session(null);
   	 $this->redirect('Manager/login');
   	
   }
}
