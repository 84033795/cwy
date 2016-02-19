<?php

namespace Admin\Controller;
use Think\Controller;

 //管理员密码
class GuanLiController extends Controller{
	public function GuanLi(){
		  $admin_name=$_SESSION['admin_name'];
		  $this->assign('admin_name',$admin_name);
          $this->display();
	}
}