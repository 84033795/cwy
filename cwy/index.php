<?php
    header("Content-type:text/html;charset=utf-8");
    //开启 开发调试模式
    define('APP_DEBUG', true);
    
    //全局 静态常量
    define('SITE_URL', 'http://www.cwyuan.com/cwy/');//域名
    
    //给 前台 静态文件定义常量
    define('CSS_URL', '/cwy/Home/Public/css/');
    define('JS_URL',  '/cwy/Home/Public/js/');
    define('IMG_URL', '/cwy/Home/Public/images/');
    define('PIC_URL', '/cwy/Home/Public/picture/');
    //前台瀑布流定义常量
    define('PET_CSS_URL', '/cwy/Home/View/Pet/css/');
    define('PET_JS_URL', '/cwy/Home/View/Pet/js/');
    define('PET_IMG_URL', '/cwy/Home/View/Pet/img/');
    //后台静态常量
    define('ADMIN_CSS_URL', '/cwy/Admin/Public/css/');
    define('ADMIN_JS_URL',  '/cwy/Admin/Public/js/');
    define('ADMIN_IMG_URL', '/cwy/Admin/Public/images/');
    
    include "../ThinkPHP/ThinkPHP.php";