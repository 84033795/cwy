<?php
namespace Admin\Controller;

use Think\Controller;

class AlbumController extends Controller{
	public function album(){
       //$g = new \Model\AvatarModel();
        $a=D('picture');
        //数据分页效果制作
        //显示第几页
        $page=isset($_GET['page'])?$_GET['page']:1;
        $shenhe=I('get.shenhe');
        $id=I('post.field');
        //判断提交的条件是不是数字
        $keyword=is_numeric(I('post.keyword'))?I('post.keyword'):0;
       
        //1.总记录条数
        //$cnt=$a->count();//sum()min()max()avg()获得总记录条数

        if($shenhe==1){
            $cnt=$a->where('status=0')->count();
        }elseif($id=='uid'){
            $cnt=1;
        }elseif($id=='id'){
            $cnt=1;
        }else{
            $cnt=$a->count();
        }
        $per=12;//每页显示7条数据
        //2.分页类对象
        $page_obj=new \Tools\Page($cnt,$per);
        //3.获得每页的信息数据信息
        
        if($id=='uid'){//查询用户ID的头像
            $info=$a->where("user_id=$keyword")->select();
        }elseif($id=='id'){//查询头像ID的头像
            $info=$a->where("id=$keyword")->select();
        }elseif($shenhe==1){//查询未审核的头像
            $info=$a->where('status=0')
                    ->limit($page_obj->offset,$per)
                    ->order('id desc')->select();
        }else{//查询全部的头像
            $info=$a->limit($page_obj->offset,$per)
                    ->order('id desc')
                    ->select();
        }
        
        //4.制作页码列表
        $pagelist=$page_obj -> fpage(array(1,2,3,4,5,6,7,8));
        $this->assign('pagelist',$pagelist);
        $this->assign('num',$page_obj->offset+1);
        //dump($info);
        $this->assign('info',$info);
        $this->assign('page', $_GET['page']);
        $this->display();
    }
    //图片审核
    public function checkAlbum(){
        //dump($_POST);
        $page=I('get.page');
        
        //dump($avatarids);exit;
        $a=D('picture');
        $ok=I('post.ok')?I('post.ok'):0;
        $no=I('post.no')?I('post.no'):0;
        
        if($ok){
            //将接收过来的审核 头像ID 拼接成字符串
            $ids=implode(',',$_POST['ok']);
            //1表示审核通过
            $a->status=1;
             //修改avatar_id 在 头像id 里的数据
            $res=$a->where(array('id'=>array('in',$ids)))->save();
        }
        if($no){
            //将接收过来的审核 头像ID 拼接成字符串
            $ids=implode(',',$_POST['no']);
            //1表示审核通过
            $a->status=1;
            $a->pic_url="./Public/uploads/picture/2016-01-29/weitongguo.jpg";
             //修改avatar_id 在 头像id 里的数据
            $res=$a->where(array('id'=>array('in',$ids)))->save();
        }
        
       
        if($res){
            $this->redirect("admin/album/album/page/$page",array(), 1, '审核成功');
        }else{
            $this->redirect("admin/album/album/page/$page",array(), 1, '审核失败');
        }
    }

    //删除违规的图片
    public function del(){
        //dump($_GET['page']);
        //显示第几页
        $page=I('get.page');
        //接收头像ID
        $id=I('get.id');
        $a=D('picture');
        //替换图片
        $a->pic_url="./Public/uploads/picture/2016-01-29/weitongguo.jpg";
        $res=$a->where("id=$id")->save();
        if($res){
            $this->redirect("admin/album/album/page/$page",array(), 0, '删除成功');
        }else{
            $this->redirect("admin/album/album/page/$page",array(), 0, '删除失败');
        }
    }
}
