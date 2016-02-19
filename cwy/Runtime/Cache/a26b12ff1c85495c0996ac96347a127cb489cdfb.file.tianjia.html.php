<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 01:37:00
         compiled from "F:/cwyuan/cwy/Home/View\Video\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:532856a63076979724-42582001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a26b12ff1c85495c0996ac96347a127cb489cdfb' => 
    array (
      0 => 'F:/cwyuan/cwy/Home/View\\Video\\tianjia.html',
      1 => 1454002479,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '532856a63076979724-42582001',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a63076a736d',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a63076a736d')) {function content_56a63076a736d($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
    <form action="<?php echo @__SELF__;?>
" method="post" enctype="multipart/form-data">
        用户ID：<input type="text" name="user_id"/><br/>
        
        简介：<input type="text" name="pic_desc"/><br/>
        文件上传：<br/>
        <input type="file" name="pic"/>
        <input type="submit" value="提交"/>
        </form>
</body>
</html><?php }} ?>