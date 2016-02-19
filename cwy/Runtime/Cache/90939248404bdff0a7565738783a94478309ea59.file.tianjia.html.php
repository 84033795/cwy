<?php /* Smarty version Smarty-3.1.6, created on 2016-01-25 09:55:22
         compiled from "F:/cwyuan/cwy/Home/View\Article\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:1872156a4be8592b6b4-37105453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90939248404bdff0a7565738783a94478309ea59' => 
    array (
      0 => 'F:/cwyuan/cwy/Home/View\\Article\\tianjia.html',
      1 => 1453686541,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1872156a4be8592b6b4-37105453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a4be85a041c',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a4be85a041c')) {function content_56a4be85a041c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
    <form action="<?php echo @__SELF__;?>
" method="post">
        作者ID：<input type="text" name="userid"/><br/>
        标题：<input type="text"name="title"/><br/>
        内容：<br/>
        <textarea rows="10" cols="30" name="content"></textarea>
        <input type="submit" value="提交"/>
        </form>
</body>
</html><?php }} ?>