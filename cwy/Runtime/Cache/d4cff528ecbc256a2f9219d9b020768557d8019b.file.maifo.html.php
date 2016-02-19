<?php /* Smarty version Smarty-3.1.6, created on 2016-01-28 21:58:27
         compiled from "F:/cwyuan/cwy/Admin/View\Maifo\maifo.html" */ ?>
<?php /*%%SmartyHeaderCode:930956aa1e83e46433-85740982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4cff528ecbc256a2f9219d9b020768557d8019b' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Maifo\\maifo.html',
      1 => 1453989408,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '930956aa1e83e46433-85740982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa1e8416a03',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa1e8416a03')) {function content_56aa1e8416a03($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>基本设置</title>
<script type="text/javaScript" src="js/jquery.min.js"></script>
<script language="JavaScript" src="js/css.js"></script>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="myform" action="<?php echo @__SELF__;?>
" method="post">
   <tr>
      <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <p class="position"><span>网站管理</span>基本设置</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_form">
      <caption>网站基本设置</caption>
      <tr>
        <td class="align_r">网站名称</td>
        <td class="align_l"><input type="text" name="site_name" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_name'];?>
"></td>
      </tr>
      <tr>
        <td class="align_r">网站地址</td>
        <td class="align_l"><input  type="text" name="site_url" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_url'];?>
"></td>
      </tr>
      <tr>
        <td class="align_r">安装目录</td>
        <td class="align_l"><input  type="text" name="site_path" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_path'];?>
"></td>
      </tr>
      <tr>
        <td class="align_r">网站标题</td>
        <td class="align_l"><input type="text" name="site_title"value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_title'];?>
" size="35"></td>
      </tr>
      <tr>
        <td class="align_r">关键字</td>
        <td class="align_l"><input type="text" name="site_keywords" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_keywords'];?>
" size="35"></td>
      </tr>
      <tr>
        <td class="align_r">网站描述</td>
        <td class="align_l"><input  type="text" name="site_desc" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_desc'];?>
" size="35" ></td>
      </tr>
      <tr>
        <td class="align_r">站长EMAIL</td>
        <td class="align_l"><input  type="text" name="site_email" size="35" maxlength="50" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_email'];?>
"></td>
      </tr>
      <tr>
        <td class="align_r">网站ICP备案号</td>
        <td class="align_l"><input type="text" name="site_icp" size="35" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['site_icp'];?>
"></td>
      </tr> 
         
      <tr>
        <td class="align_r">&nbsp;</td>
        <td class="align_l">            <input type="submit" id="submit" value=" 提交 " >
            <input type="reset" name="Input" value=" 重置 " ></td>
      </tr>
          </table>
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
</html><?php }} ?>