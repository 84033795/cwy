<?php /* Smarty version Smarty-3.1.6, created on 2016-01-27 12:25:42
         compiled from "F:/cwyuan/cwy/Admin/View\Article\atc_detail.html" */ ?>
<?php /*%%SmartyHeaderCode:1941056a59ba4df3a88-74785527%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e78eb0b1330d1cdd050900376972791e23068f23' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Article\\atc_detail.html',
      1 => 1453868740,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1941056a59ba4df3a88-74785527',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a59ba5036d3',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a59ba5036d3')) {function content_56a59ba5036d3($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
                    <form name="myform2" action="" method="post">
                        <caption style="text-align:center;">文章标题</caption>
                       <tr>
                       <td>文章 内容 。。。。。</td>
                       </tr> 
                       <tr><td class="align_r">
                                <input class="button_style" type="button" value="审核"/> 
                                &nbsp;&nbsp; &nbsp;   
                                <input class="button_style" type="button" value="返回"/>&nbsp;
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