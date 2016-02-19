<?php
namespace Admin\Controller;
use Think\Controller;

class LinkController extends Controller {
	function link(){
		$link=D('link');
		//$info=$link->select();
		/***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $link -> count();  //sum()min()max()avg()获得总记录条数
        //SELECT COUNT(*) AS tp_count FROM `sw_link` LIMIT 1 
        $per = 5; //每页显示7条数据

        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);

        //③ 获得每页的信息数据信息
        $info = $link -> limit($page_obj->offset,$per)->order('link_id desc')->select();

        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/

        $this ->assign('info',$info);
		$this->display();
	}
	function tianjia(){
        		$link = D('link');
             
     if(IS_POST){
              
            /**************上传商品图片处理**************/
            if($_FILES['link_logo']['error']===0){
                //1) 上传图片
                //在【php中】使用"./"相对路径，始终相对index.php入口文件进行设置
                //相对路径不会受到pathinfo路由模式影响
                $cfg = array(
                    'rootPath'      =>  './Public/uploads/logo/', //保存根路径
                );
                $up = new \Think\Upload($cfg);
                //uploadOne的返回信息可以感知附件在服务器上的"路径"和"名字"等信息
                $z = $up -> uploadOne($_FILES['link_logo']);
                //dump($up -> getError());//获得上传附件的错误信息
                //dump($z);

                //拼装附件的路径名信息并存储给数据库
                $bigpathimg = $up->rootPath.$z['savepath'].$z['savename'];
                $link -> link_logo = $bigpathimg;

                
            }
            /**************上传商品图片处理**************/



        			$link->link_name=$_POST['link_name'];
              $link->link_url=$_POST['link_url'];
			       $z=$link->add();
		
        			if ($z) {
                   		$this->redirect('link',array(),2,"添加成功");

               		}
               		else{
               		    $this->redirect('link',array(),2,"添加失败"); 
               		 }

  		}
  		else{
  			$this->display('link');
  		}
	}
	function delete(){
		$link = D('link');
        $link_id=I('get.link_id');
        
        $z=$link-> delete($link_id);
        if ($z) {
           $this->redirect('link',array(),1,"删除成功");

        }
        else{
           $this->redirect('link',array(),1,"删除失败"); 
        }
	}
	
}