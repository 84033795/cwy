<?php
namespace Admin\Controller;

use Think\Controller;
class AdsController extends Controller{
 /******************广告管理start*************************/
    public function ads(){
    	$ads =D('advertisement');
      if(IS_POST){
        //dump($_POST);
        //收集表单
        $ids =$ads->field('id')->find();
        $id=$ids['id'];
        $ads -> main = $_POST['ads_top'];
        $ads -> id = $id;
        //$ads -> ads = $_POST['ads_list'];
        $z=$ads->save();
        //添加提示信息
        if($z){
          $this -> redirect('ads',array(),2,'操作成功');
        }else{
          $this -> redirect('ads',array(),2,'操作失败');
        }
      }else{
      		$info = $ads->field('main') -> select();
      		foreach ($info as $k => $v){
  			 	$ads .= implode(",",$v); 
  			 }
  			$this -> assign('ads',$ads);
  			//展示表单
  			$this->display();
  		}
       //$this->display();
    }
 /******************广告管理end*************************/
}