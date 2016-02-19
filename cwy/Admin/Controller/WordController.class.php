<?php
namespace Admin\Controller;
use Think\Controller;
class WordController extends Controller{
	
	/******************词语管理start*************************/
    public function word(){
    	$word =D('word');
  		if(IS_POST){
  			//dump($_POST);
  			//收集表单
  			$ids =$word->field('id')->find();
  			$id=$ids['id'];
  			$word -> word = $_POST['word'];
  			$z=$word->where("id='$id'")->save(); 
  			//添加提示信息
  			if($z){
  				$this -> redirect('word',array(),2,'操作成功');
  			}else{
  				$this -> redirect('word',array(),2,'操作失败');
  			}
  		}else{
  			 $info = $word->field('word') -> select();
  			 //dump($info);
  			 $str = "";
  			 foreach ($info as $k => $v){
  			 	$str .= implode(",",$v) . ","; 
  			 }
  			 //dump($str);
  			 $this -> assign('str',$str);
  			//展示表单
  			$this->display();
  		}
	    
	}
	/******************词语管理end*************************/
}