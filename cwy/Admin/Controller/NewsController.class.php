<?php
namespace Admin\Controller;

use Think\Controller;

class NewsController extends Controller
{

    function showlist()
    {
        $news=D('news');
        if(IS_POST){
            
        }else{
            $cnt=$news->count();//总记录数
            $per=3;//每页显示条数
            $page_obj=new \Tools\Page($cnt,$per);//分页类对象
            $info=$news
            ->limit($page_obj->offset,$per)
            ->select();
            //截取 显示
            foreach($info as $k=>$v){
                if(strlen($v['content'])>10){
                    $info[$k]['content']=substr($v['content'], 0,9).'...';
                }
                if(strlen($v['title']) >10){
                    $info[$k]['title']=substr($v['title'], 0,9).'...';
                }

            }
            $this->assign('info',$info);
            //制作 页码 列表
            $pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
            $this->assign('pagelist',$pagelist);
            $this->display();
            
        }
    }
    function tianjia(){
        $news=D('news');
        if(IS_POST){ 
            //表单信息接受及处理
            $info=$news->create($_POST);
           
            $news->admin_id=1;      //模拟数据！
            $news->readtimes=1;     //模拟数据！
            $news->commenttimes=1;  //模拟数据！
            $news->title=$info['title'];
            $news->content=$info['content'];
            $news->pubtime=time();
            if($_FILES['newpic']['error']===0){
            //配置信息
            $cfg=array(
              'rootPath'=> './Public/Uploads/news/',//保存根路径
              'maxSize' =>0, //上传的文件大小限制 (0-不做限制)
              'exts'    =>  array('gif','png','jpg'), //允许上传的文件后缀
            );
            $up=new \Think\Upload($cfg);
            $z=$up->uploadOne($_FILES['newpic']);
            
            //拼装上传文件的路径 存入数据库
            $path=$up->rootPath.$z['savepath'].$z['savename'];
            $news->newpic=$path;
            $res=$news->add();
            if($res){
                $this->redirect('showlist');
            }else{
                $this->redirect('showlist', array(), 2, '添加失败');
            }
           }
         }else{
            $this->display();
        }
    } 
    function detail(){
        $news=D('news');
        $id=I("get.id");
        if(IS_POST){
            
        }else{
            $info=$news->where(array('id'=>$id))->find();
            $this->assign('info',$info);
            $this->display();
        }
        
    }
    function update(){
        $id=I('get.id');
        $news=D('news');
        
        if(IS_POST){
            //表单信息接受及处理
            $info=$news->create($_POST);
            $news->admin_id=1;       //模拟数据！
            $news->readtimes=1;      //模拟数据！
            $news->commenttimes=1;   //模拟数据！
            $news->title=$info['title'];
            $news->content=$info['content'];
            $news->pubtime=time();
            
            //如果有图片上传
            if($_FILES['newpic']['error']===0){
                //配置信息
            $cfg=array(
                'rootPath'=> './Public/Uploads/news/',//保存根路径
                'maxSize' =>0, //上传的文件大小限制 (0-不做限制)
                'exts'    =>  array('gif','png','jpg'), //允许上传的文件后缀
            );
            $up=new \Think\Upload($cfg);
            
            $z=$up->uploadOne($_FILES['newpic']);
            
            if($z){
                //如果有新图片上传就删除旧图片文件
                $one_info=$news->where(array('id'=>$id))->find();
                $ordpic=$one_info['newpic'];
                $zz=unlink($ordpic);
            }
            //拼装上传文件的路径 存入数据库
            $path=$up->rootPath.$z['savepath'].$z['savename'];
            $news->newpic=$path;
        }
            //更新操作
            $res=$news->where(array('id'=>$id))->save();
            
            if($res===false){ 
               $this->redirect('showlist', array(), 2, '修改失败');
            }else{ 
               $this->redirect('showlist', array(), 2, '修改成功');
            }
         
       }else{
             $info=$news->where(array('id'=>$id))->find();
             $this->assign('info',$info);
             $this->display();
        }  
    }   
    function del(){
        $ids=I('post.id');
        $news=D('news');
        //获得所有需要删除的 图片路径
        $infos=$news->where(array('id'=>array('in',$ids)))->select();
        //删除所有id对应 路径 图片
        foreach($info as $k=>$v){
            unlink($v['newpic']);
        }
        
        
        $z=$news->where(array('id'=>array('in',$ids)))->delete();
        if($z){
            $this->redirect('showlist', array(), 2, '删除成功');
        }else{
            $this->redirect('showlist', array(), 2, '删除失败');
        }
    }


}