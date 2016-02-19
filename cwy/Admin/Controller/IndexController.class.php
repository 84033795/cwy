<?php
namespace Admin\Controller;

use Think\Controller;

class IndexController extends Controller
{

    public function index()
    {
     if(session('admin_id') && session('admin_name')){
             $this->display();
      }else{
            $this->redirect('Manager/login','',1,"请登录！");
          }
        
    }
    public function top()
    {
        $this->display();
    }
    public function footer()
    {
        $this->display();
    }
    public function center()
    {
        $this->display();
    }
    public function left()
    {
        $this->display();
    }
    public function maininfo()
    {
        $this->display();
    }
}