<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 00:19:50
         compiled from "F:/cwyuan/cwy/Admin/View\Index\maininfo.html" */ ?>
<?php /*%%SmartyHeaderCode:2581756aa3d9d5d6c85-94228869%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b20d8cf6dbd60ce4de9b719c535dd1de6e2ffdff' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Index\\maininfo.html',
      1 => 1453997987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2581756aa3d9d5d6c85-94228869',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa3d9d968fd',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa3d9d968fd')) {function content_56aa3d9d968fd($_smarty_tpl) {?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
      <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <h4>欢迎使用 宠物缘 后台系统！</h4>
      <table border="0" width="100%" align="center" cellpadding="0" cellspacing="0">
      <tr>
      <td width="60%">
          <table class="table_list" cellpadding="0" cellspacing="1">
          <caption>网站统计</caption>
          <tr>
             <th>统计</th>
             <th>会员</th>
             <th>文章</th>
             <th>相片</th>
             <th>视频</th> 
          </tr>
          <tr>
            <td>总数</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>今日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>昨日</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>本周</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td>本月</td>
            <td>1</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          </table>
          <table class="table_list" cellpadding="0" cellspacing="1">
          <caption>系统信息</caption>
      <tr nowrap class="firstalt">
        <td width="25%">主机名 (IP：端口)：</td>
        <td width="75%"><<?php ?>?=$_SERVER['SERVER_NAME']?<?php ?>>(127.0.0.1:80)</td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">程序目录：</td>
        <td width="75%">/</td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">Web服务器：</td>
        <td width="75%"><<?php ?>?=$_SERVER['SERVER_SOFTWARE']?<?php ?>></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">PHP 运行方式：</td>
        <td width="75%"><<?php ?>?=PHP_SAPI?<?php ?>></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">PHP版本：</td>
        <td width="75%"><<?php ?>?=PHP_VERSION?<?php ?>>&nbsp;&nbsp;<span style="color: #999999;">(>5.20)</span></td>
      </tr>
      <tr nowrap class="firstalt">
        <td>MySQL 版本：</td>
        <td><<?php ?>?=function_exists("mysql_close")?mysql_get_client_info():NO?<?php ?>>&nbsp;&nbsp;<span style="color: #999999;">(>4.20)</span></td>
      </tr>
      <tr nowrap class="firstalt">
        <td>GD库版本：</td>
        <td>bundled (2.0.34 compatible)          &nbsp;&nbsp; <span style="color: #999999;">(&gt;=2.0.34 compatible)</span></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">Zend Optimizer：</td>
        <td width="75%"><<?php ?>?=defined("OPTIMIZER_VERSION")?OPTIMIZER_VERSION:NO?<?php ?>></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">最大上传限制：</td>
        <td width="75%"><<?php ?>?=ini_get('file_uploads') ? ini_get('upload_max_filesize') : '<span style="color:red">Disabled</span>';?<?php ?>></td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">最大执行时间：</td>
        <td width="75%"><<?php ?>?=ini_get('max_execution_time')?<?php ?>> seconds</td>
      </tr>
  
      <tr nowrap class="firstalt">
        <td width="25%">伪静态检测：</td>
        <td width="75%"><<?php ?>?=function_exists('iconv_strlen') ? '支持' : '<span style="color:red">不支持</span>'?<?php ?>></td>
      </tr>      
    </table>
    <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>产品说明</caption>
      <tr nowrap class="firstalt">
        <td width="25%">官方主页：</td>
        <td><font class="normalfont"><a href="http://www.cwyuan.com" target="_blank">http://www.cwyuan.com</a></font> </td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">程序开发：</td>
        <td>三组</td>
      </tr>
      <tr nowrap class="firstalt">
        <td width="25%">最新版本：</td>
        <td><script>var ppvod="";</script><script type="text/javascript" src=""></script>
        </td>
      </tr>
          </table>
      </td>
      <td width="1%"></td>
      <td width="39%" valign="top">
      <!--  
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>待定板块</caption>
      <tr nowrap class="firstalt">
        <td class="align_l" style="padding-left:15px;line-height:25px;">！。。。<br />
            授权类型：未授权  <a href="http://www.xgcms.com/love/" target="_blank"><span style="color:red; font-weight:bold">待定板块</span></a>
            <br />
            授权域名：            
            <br />
            授 权 码：未授权            <br />
            授权时间：            </td>
      </tr>
          </table>
          -->
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>个人信息</caption>
      <tr nowrap class="firstalt">
        <td class="align_l" style="padding-left:15px;">您好，admin            <br />
            上次登录：2016-01-14 01:06 
            <br />
            登录时间：2016-01-14 01:08            <br />
            登 录 IP：127.0.0.1            <br />
            登录次数：4 次</td>
      </tr>
          </table>
          
      </td>
      </tr>
      </table>
      </td>
      <td class="right"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_07.gif" width="14" height="30" /></td>
   </tr>
   <tr>
      <td height="29"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_20.gif" width="14" height="29" /></td>
      <td  background="<?php echo @ADMIN_IMG_URL;?>
tab_21.gif"></td>
      <td><img src="<?php echo @ADMIN_IMG_URL;?>
tab_22.gif" width="14" height="29" /></td>
   </tr>
</table>
<script src="#"></script></body>
</html><?php }} ?>