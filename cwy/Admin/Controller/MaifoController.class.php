<?php

namespace Admin\Controller;
use Think\Controller;
  
 //基本设置功能
class MaifoController extends Controller{

	public function maifo(){
     //一.收集post表单提交过来的数据
     //(1)如果有数据提交过来就添加，否则显示当前页面
     //(2)将数据添加到数据库
     $maifo=D('maininfo');

    
   if(IS_POST){
	    /* $maifo-> site_name      = $_POST['site_name'];
	       $maifo-> site_url       = $_POST['site_url'];
	       $maifo-> site_path      = $_POST['site_path'];
	       $maifo-> site_title     = $_POST['site_title'];
	       $maifo-> site_keywords  = $_POST['site_keywords'];
	       $maifo-> site_desc      = $_POST['site_desc'];
	       $maifo-> site_email     = $_POST['site_email'];
	       $maifo-> site_icp       = $_POST['site_icp'];
		*/	
	       	
     if($maifo->count()){
       	$info=$maifo->find();
       	$id=$info['id'];
       	$z=$maifo->where(array('id'=>$id))->save($_POST);
 
        }
       else{
       	 $z=$maifo->add($_POST);
		}   

       if($z===fasle){
           $this -> redirect('maifo',array(),200,'修改失败！');
       }else{	       	  
       	   $this -> redirect('maifo',array(),2,'修改成功！');
       }
  					
      }else{
          //二.展示表单
         $info=$maifo->select();
         $this->assign(info,$info[0]);       
		 $this->display();      
      }
      
	}
}