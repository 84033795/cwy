<?php
namespace Admin\Controller;

use Think\Controller;

class ArticleController extends Controller
{

    function showlist()
    { 
        $acticle = D('article');
        $cnt=$acticle->count();//总记录数
        $per=5;//每页显示条数
        $page_obj=new \Tools\Page($cnt,$per);//分页类对象
        // 连表查询    获得每页的信息
        $info = $acticle->alias('a')
            ->join('cw_article_status s on a.id=s.article_id')
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
        
        $this->assign('info', $info);
        //制作 页码 列表
        $pagelist=$page_obj->fpage(array(3,4,5,6,7,8));
        $this->assign('pagelist',$pagelist);
        $this->display();
    }
    //模糊搜索
    function search(){
        $acticle = D('article');
        //获得get数据
        $map = array();
        if(I('get.field'))$f = I('get.field');
        if(I('get.keyword'))$k = I('get.keyword');
        $map["$f"] = array("like","%".I('get.keyword')."%");
        /***********数据分页效果制作***********/
        //① 总记录条数
        $cnt = $acticle -> where(empty($map)?"1":$map)->count();  //sum()min()max()avg()获得总记录条数
        $per = 5; //每页显示5条数据
        //② 分页类对象
        $page_obj = new \Tools\Page($cnt,$per);
        //③ 获得每页的信息数据信息
        $info = $acticle->alias('a')
            ->join('cw_article_status s on a.id=s.article_id')
            ->where(empty($map)?"1":$map)
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
        //④ 制作页码列表
        $pagelist = $page_obj -> fpage(array(3,4,5,6,7,8));
        $this -> assign('pagelist',$pagelist);
        $this -> assign('num',$page_obj->offset+1);
        /***********数据分页效果制作***********/
        $this -> assign('info',$info);
        $this->display('showlist');  
    }
    
    // 删除功能
    function del_stu()
    {
        $acticle = D('article');
        $status = D('article_status');
     
     if($_POST['article_id']){
        
         if ($_POST['submit'] == '删除') {
            // 得到 所需删除的所有的id
            $ids = $_POST['article_id'];
            // 文章表删除
            $z = $acticle->where(array('id'=>array('in',$ids)))->delete(); 
            if ($z) {
                // 审核表删除
                $zz = $status->where(array(
                    'article_id' => array(
                        'in',$ids)
                ))->delete();
                if ($zz) {
                    //两表都删除成功
                    $this->redirect('showlist', array(), 2, '删除成功');
                } else {
                    //审核表删除失败
                    $this->redirect('showlist', array(), 2, '删除失败');
                }
            } else {
                //文章表删除失败
                $this->redirect('showlist', array(), 2, '删除失败');
            }
            // 批量审核功能
        } elseif ($_POST['submit'] == '批量审核') {
            //获得所有id
            $ids = $_POST['article_id'];
            //修改所有id对应的字段的status状态            
            $res = $status->where(array( 'article_id' => array('in', $ids))
                )->save(array('status' => 1));
            if ($res === false) {
                $this->redirect('showlist', array(), 2, '审核失败');
            } else {   
                $this->redirect('showlist',array(), 2, '审核成功');
            }
        }
    }else{
        $this->redirect('showlist', array());
    }
 }  
    function detail(){
        $id=I("get.id");
        $article=D('article');
        $info=$article->where(array('id'=>$id))->find();
        $this->assign('info',$info);
        $this->display();
    }
    //单个审核
    function status(){
        $status=D('article_status');
        $id=I("get.id");
        $z=$status->where(array('article_id'=>$id))->save(array('status'=>1));
        if($z===false){
            $this->redirect('showlist', array(), 2, '审核失败');
        }else{
            $this->redirect('showlist', array(), 2, '审核成功');
        }
    }
}








