<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'       =>true,    //页面跟踪日志
    
    //设置默认分组
    'DEFAULT_MODULE'        =>'Admin',  // 默认模块
    'MODULE_ALLOW_LIST'     =>array('Admin','Home'),
    
    //切换模板引擎为Smarty
    'TMPL_ENGINE_TYPE'      =>  'Smarty',
    
    /* 数据库设置 */
    'DB_TYPE'               =>  'mysql',          // 数据库类型
    'DB_HOST'               =>  'localhost',     // 服务器地址
    'DB_NAME'               =>  'xiaozu',          // 数据库名
    'DB_USER'               =>  'root',         // 用户名
    'DB_PWD'                =>  '123',          // 密码
    'DB_PORT'               =>  '3306',         // 端口
    'DB_PREFIX'             =>  'cw_',         // 数据库表前缀
    'DB_PARAMS'          	=>  array(),       // 数据库连接参数
    'DB_DEBUG'  			=>  TRUE,         // 数据库调试模式 开启后可以记录SQL日志
    'DB_FIELDS_CACHE'       =>  true,         // 启用字段缓存
    'DB_CHARSET'            =>  'utf8',       // 数据库编码默认采用utf8
);