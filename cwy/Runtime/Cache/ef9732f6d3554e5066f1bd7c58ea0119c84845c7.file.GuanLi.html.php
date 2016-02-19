<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:26:38
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\GuanLi\GuanLi.html" */ ?>
<?php /*%%SmartyHeaderCode:1822656aaf80ee51584-82542729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9732f6d3554e5066f1bd7c58ea0119c84845c7' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\GuanLi\\GuanLi.html',
      1 => 1453999721,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1822656aaf80ee51584-82542729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'admin_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf80f17cdf',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf80f17cdf')) {function content_56aaf80f17cdf($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/css.js"></script>
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="myform" action="__URL__/adminpw" method="post">
   <tr>
      <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <p class="position"><span>网站管理</span>导航菜单</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>修改管理员密码</caption>
      <tr>
        <td class="">登录名</td>
        <td class="align_l"><?php echo $_smarty_tpl->tpl_vars['admin_name']->value;?>
</td>
      </tr>
      <tr>
        <td class="">原密码</td>
        <td class="align_l"><input type="password" name="oldpw" value="" /></td>
      </tr>
      <tr>
        <td class="">新密码</td>
        <td class="align_l"><input type="password" name="newpw" value="" /></td>
      </tr>
      <tr>
        <td class="">新密码确认</td>
        <td class="align_l"><input type="password" name="newpw2" value="" /></td>
      </tr>
      <tr>
        <td class="align_r">&nbsp;</td>
        <td class="align_l"><input type="submit" name="submit" value="提交" /></td>
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
   </form>
</table>
</body>
</html>
<?php }} ?>