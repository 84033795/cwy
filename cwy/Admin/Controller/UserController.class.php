<?php
//命名空间
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller{
	//用户列表
    function showlist(){
    	//使用分页工具类
    	//$users = new \Model\UserModel();
    	$users = D('user');
    	        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $users -> count();  //sum()min()max()avg()获得总记录条数
        $per = 7; //每页显示7条数据

        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 获得每页的信息数据信息
        $info = $users -> limit($page_obj->offset,$per)->order('user_id desc')->select();

        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display();
    }
    //删除用户
    function delete(){
    	$user = D('user');
        //获得post数据中的user_id信息,该信息为一维数组
    	$user_id = implode(',' , I('post.user_id'));
        if(!$user_id){
            $this -> redirect('showlist',array(),2,'未选中用户!');
        }
    	$z = $user -> delete($user_id);
            if($z){
                $this -> redirect('showlist',array(),2,'删除用户成功！');
            }else{
                $this -> redirect('showlist',array(),2,'删除用户失败！');
            }
    }
    //搜索用户
    function search(){
        $users = D('user');
        //获得get数据
        $map = array();
        if(I('get.field'))$f = I('get.field');
        if(I('get.keyword'))$k = I('get.keyword');
        $map["$f"] = array("like","%".$k."%");
        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $users -> where(empty($map)?"1":$map)->count();  //sum()min()max()avg()获得总记录条数
        $per = 2; //每页显示7条数据
        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
        //③ 获得每页的信息数据信息
        $info = $users  -> where(empty($map)?"1":$map)
                        -> limit($page_obj->offset,$per)
                        -> order('user_id desc')
                        -> select();
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display('showlist');
    }
}