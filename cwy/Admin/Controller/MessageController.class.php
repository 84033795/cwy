<?php
namespace Admin\Controller;
use Think\Controller;

class MessageController extends Controller {
	//查询操作
	public function message(){
		//创建模型
		//echo "qwfdwaefsa";
        $mess = D('message');
       // $mess=new \Model\MessageModel();
        //dump($mess);
        $info=$mess->select();
       	/***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> count();  //sum()min()max()avg()获得总记录条数
        //SELECT COUNT(*) AS tp_count FROM `sw_goods` LIMIT 1 
        $per = 7; //每页显示7条数据

        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 获得每页的信息数据信息
        
       
            $info = $mess -> limit($page_obj->offset,$per)->order('mes_id desc')->select();
      
        
        $z=I('post.');
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/

        $this ->assign('info',$info);
        //查询全部列表并分页
        //$this->page();
       //dump($info);
        $m_id=I('get.mes_id');

        $m=$mess->find($m_id);
        $this->assign('m',$m);
 // dump($m);
        
        $this->display('message');

    }
    public function p_show(){
		//创建模型
		//echo "qwfdwaefsa";
        $mess = D('pshow');
       // $mess=new \Model\MessageModel();
        //dump($mess);
        $info=$mess->select();
       	/***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> count();  //sum()min()max()avg()获得总记录条数
        //SELECT COUNT(*) AS tp_count FROM `sw_goods` LIMIT 1 
        $per = 7; //每页显示7条数据

        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 获得每页的信息数据信息
        $info = $mess -> limit($page_obj->offset,$per)->order('mes_id desc')->select();

        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/

        $this ->assign('info',$info);
        //查询全部列表并分页
        //$this->page();
       //dump($info);
        $m_id=I('get.mes_id');

        $m=$mess->find($m_id);
        $this->assign('m',$m);
 // dump($m);
        $this->display('p_show');
        
    }
    public function v_show(){
		//创建模型
		//echo "qwfdwaefsa";
        $mess = D('vshow');
       // $mess=new \Model\MessageModel();
        //dump($mess);
        $info=$mess->select();
       	/***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> count();  //sum()min()max()avg()获得总记录条数
        //SELECT COUNT(*) AS tp_count FROM `sw_goods` LIMIT 1 
        $per = 7; //每页显示7条数据

        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 获得每页的信息数据信息
        $info = $mess -> limit($page_obj->offset,$per)->order('mes_id desc')->select();

        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/

        $this ->assign('info',$info);
        //查询全部列表并分页
        //$this->page();
       //dump($info);
        $m_id=I('get.mes_id');

        $m=$mess->find($m_id);
        $this->assign('m',$m);
 // dump($m);
        $this->display('v_show');
        
    }

	
	public function a_del(){
            $mess = D('message');
        
        //获得post数据中的user_id信息,该信息为一维数组
           
        $mes_id = implode(',' ,  $_POST['mid']);

        if(!$mes_id){
            $this -> redirect('message',array(),20,'未选中用户!');
        }
        $z = $mess -> delete($mes_id);
            if($z){
                $this -> redirect('message',array(),2,'删除评论成功！');
            }else{
                $this -> redirect('message',array(),2,'删除评论失败！');
            }
	}
    public function p_del(){
            $mess = D('pshow');
        
        //获得post数据中的user_id信息,该信息为一维数组
           
        $mes_id = implode(',' ,  $_POST['mid']);

        if(!$mes_id){
            $this -> redirect('p_show',array(),20,'未选中用户!');
        }
        $z = $mess -> delete($mes_id);
            if($z){
                $this -> redirect('p_show',array(),2,'删除评论成功！');
            }else{
                $this -> redirect('p_show',array(),2,'删除评论失败！');
            }
    }
    public function v_del(){
            $mess = D('vshow');
        
        //获得post数据中的user_id信息,该信息为一维数组
           
        $mes_id = implode(',' ,  $_POST['mid']);

        if(!$mes_id){
            $this -> redirect('v_show',array(),20,'未选中用户!');
        }
        $z = $mess -> delete($mes_id);
            if($z){
                $this -> redirect('v_show',array(),2,'删除评论成功！');
            }else{
                $this -> redirect('v_show',array(),2,'删除评论失败！');
            }
    }
   
     function a_chaxun(){
        $mess = D('message');
        //获得get数据
        $map = array();
        if(I('get.field'))$f = I('get.field');
        if(I('get.keyword'))$k = I('get.keyword');
        $map["$f"] = array("like","%".$k."%");
        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> where(empty($map)?"1":$map)->count();  //sum()min()max()avg()获得总记录条数
        $per = 2; //每页显示7条数据
        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
        //③ 获得每页的信息数据信息
        $info = $mess  -> where(empty($map)?"1":$map)
                        -> limit($page_obj->offset,$per)
                        -> order('mes_id desc')
                        -> select();
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display('message');
    }
    function p_chaxun(){
        $mess = D('pshow');
        //获得get数据
        $map = array();
        if(I('get.field'))$f = I('get.field');
        if(I('get.keyword'))$k = I('get.keyword');
        $map["$f"] = array("like","%".$k."%");
        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> where(empty($map)?"1":$map)->count();  //sum()min()max()avg()获得总记录条数
        $per = 2; //每页显示7条数据
        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
        //③ 获得每页的信息数据信息
        $info = $mess  -> where(empty($map)?"1":$map)
                        -> limit($page_obj->offset,$per)
                        -> order('mes_id desc')
                        -> select();
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display('p_show');
    }
    function v_chaxun(){
        $mess = D('vshow');
        //获得get数据
        $map = array();
        if(I('get.field'))$f = I('get.field');
        if(I('get.keyword'))$k = I('get.keyword');
        $map["$f"] = array("like","%".$k."%");
        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $mess -> where(empty($map)?"1":$map)->count();  //sum()min()max()avg()获得总记录条数
        $per = 2; //每页显示7条数据
        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
        //③ 获得每页的信息数据信息
        $info = $mess  -> where(empty($map)?"1":$map)
                        -> limit($page_obj->offset,$per)
                        -> order('mes_id desc')
                        -> select();
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display('v_show');
    }

}
