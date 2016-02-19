<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 00:52:31
         compiled from "F:/cwyuan/cwy/Admin/View\Article\detail.html" */ ?>
<?php /*%%SmartyHeaderCode:2991056aa474f59e000-70727442%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a2153d3e1e197164e984355467c4094db72e13a' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Article\\detail.html',
      1 => 1453873607,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2991056aa474f59e000-70727442',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa474f78fa9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa474f78fa9')) {function content_56aa474f78fa9($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="js/jquery.min.js"></script>
<script language="JavaScript" src="js/css.js"></script>
<script language="JavaScript" src="js/common.js"></script>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet"
    type="text/css" />
</head>

<body>
    <table class="tab" border="0" align="center" cellpadding="0"
        cellspacing="0">
        <tr>
            <td class="left"><img
                src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
            <td class="center">
                <p class="position">
                    <span>文章管理</span>文章详情
                </p>
                <table border="0" cellpadding="0" cellspacing="1" class="table_form">
                    
                </table>
                <table border="0" cellpadding="0" cellspacing="1" class="table_list">
                    <form name="myform2" action="<?php echo @__CONTROLLER__;?>
/status/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" method="get">
                        <caption style="text-align:center;"><?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
</caption>
                       <tr>
                       <td><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</td>
                       </tr> 
                       <tr><td class="align_r">
                                <input class="button_style" type="submit" value="审核"/> &nbsp;&nbsp; &nbsp;
                        </form>        
                                <input class="button_style" type="button" value="返回"onClick="javascript:window.history.back()"/>&nbsp;
                           </td>
                       </tr>
                </table>
            </td>
            <td class="right"><img
                src="<?php echo @ADMIN_IMG_URL;?>
tab_07.gif" width="14" height="30" /></td>
        </tr>
        <tr>
            <td height="29"><img
                src="<?php echo @ADMIN_IMG_URL;?>
tab_20.gif" width="14" height="29" /></td>
            <td background="<?php echo @ADMIN_IMG_URL;?>
tab_21.gif"></td>
            <td><img src="<?php echo @ADMIN_IMG_URL;?>
tab_22.gif"
                width="14" height="29" /></td>
        </tr>
    </table>
</body>
</html>
<?php }} ?>