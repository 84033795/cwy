<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:29:12
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\Link\link.html" */ ?>
<?php /*%%SmartyHeaderCode:2291256aaf8a8152e16-68512746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd5c254555a489b3e90c179a76200aab72debd2' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\Link\\link.html',
      1 => 1453990104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2291256aaf8a8152e16-68512746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf8a82c91d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf8a82c91d')) {function content_56aaf8a82c91d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">

   <tr>
      <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <p class="position"><span>网站管理</span>友情链接</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_form">
      <form name="myform" action="<?php echo @__CONTROLLER__;?>
/tianjia" method="post"  enctype="multipart/form-data">
      <caption>添加友情链接</caption>
      <tr>
        <td class="align_r">链接名称</td>
        <td class="align_l"><input type="text" name="link_name" value="" /></td>
      </tr>
      <tr>
        <td class="align_r">链接地址</td>
        <td class="align_l"><input type="text" name="link_url" value="" /></td>
      </tr>
       <tr>
        <td class="align_r">网站logo</td>
        <td class="align_l"><input type="file" name="link_logo" value="" /></td>
      </tr>
      <tr>
        <td class="align_r">&nbsp;</td>
        <td class="align_l"><input type="submit" name="submit" value="提交" /></td>
      </tr>
      </form>
      </table>
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <form action="<?php echo @__CONTROLLER__;?>
/showlist" method="post">
      <caption>友情链接列表</caption>
      <tr>
        <th>编号</th>
        <th>名称</th>
        <th>URL</th>
       <th>LOGO</th>
        <th width="300">操作</th>
      </tr>
     
      <volist name="list" id="qy">
       <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
      <tr>
        <td width="50"><?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
--<?php echo $_smarty_tpl->tpl_vars['v']->value['link_id'];?>
</td>
        <td class=""><?php echo $_smarty_tpl->tpl_vars['v']->value['link_name'];?>
</td>
        <td class="align_l"><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['link_url'];?>
" target="_blank" ><?php echo $_smarty_tpl->tpl_vars['v']->value['link_url'];?>
</a></td>
        <td class="align_l"><img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['link_logo'];?>
"></td>
        <td class="align_l"><a href="<?php echo @__CONTROLLER__;?>
/delete/link_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['link_id'];?>
">删除</a></td>
      </tr><?php } ?>
      </volist>
      
      <tr >
        <td class="align_r" colspan="5" style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
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
   </form>
</table>
</body>
</html>
<?php }} ?>