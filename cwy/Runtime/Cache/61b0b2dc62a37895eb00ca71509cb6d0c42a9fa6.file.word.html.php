<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:26:00
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\Word\word.html" */ ?>
<?php /*%%SmartyHeaderCode:2435056aaf7e8830e89-90464627%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b0b2dc62a37895eb00ca71509cb6d0c42a9fa6' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\Word\\word.html',
      1 => 1453988764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2435056aaf7e8830e89-90464627',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf7e88d24f',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf7e88d24f')) {function content_56aaf7e88d24f($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
common.js"></script>
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="myform" action="<?php echo @__SELF__;?>
" method="post">
   <tr>
      <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <p class="position"><span>网站管理</span>词语过滤</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>词语过滤</caption>
      <tr>
         <th>添加违规词</th>
      </tr>
      <volist name="list" id="qy">
      <tr>
        <td class="align_l"><textarea name="word"><?php echo $_smarty_tpl->tpl_vars['str']->value;?>
</textarea></td>        
      </tr>
      </volist>
      <tr>
      <td colspan="2" class="align_l"><input type="submit" value="提交" /></td>
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