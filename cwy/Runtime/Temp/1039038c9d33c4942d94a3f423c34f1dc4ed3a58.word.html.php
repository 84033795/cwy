<?php /*%%SmartyHeaderCode:3067656aa46aed367a5-50474860%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1039038c9d33c4942d94a3f423c34f1dc4ed3a58' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Word\\word.html',
      1 => 1453988764,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3067656aa46aed367a5-50474860',
  'variables' => 
  array (
    'str' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa46af02fa4',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa46af02fa4')) {function content_56aa46af02fa4($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="/cwy/Admin/Public/js/jquery.min.js"></script>
<script language="JavaScript" src="/cwy/Admin/Public/js/css.js"></script>
<link href="/cwy/Admin/Public/css/admin.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="/cwy/Admin/Public/js/common.js"></script>
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
<form name="myform" action="/cwy/index.php/admin/Word/word" method="post">
   <tr>
      <td class="left"><img src="/cwy/Admin/Public/images/tab_03.gif" width="15" height="30" /></td>
      <td class="center">
      <p class="position"><span>网站管理</span>词语过滤</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_list">
      <caption>词语过滤</caption>
      <tr>
         <th>添加违规词</th>
      </tr>
      <volist name="list" id="qy">
      <tr>
        <td class="align_l"><textarea name="word">波仔,二B,,</textarea></td>        
      </tr>
      </volist>
      <tr>
      <td colspan="2" class="align_l"><input type="submit" value="提交" /></td>
      </tr>
      </table>
      </td>
      <td class="right"><img src="/cwy/Admin/Public/images/tab_07.gif" width="14" height="30" /></td>
   </tr>
   <tr>
      <td height="29"><img src="/cwy/Admin/Public/images/tab_20.gif" width="14" height="29" /></td>
      <td  background="/cwy/Admin/Public/images/tab_21.gif"></td>
      <td><img src="/cwy/Admin/Public/images/tab_22.gif" width="14" height="29" /></td>
   </tr>
   </form>
</table>
</body>
</html>
<?php }} ?>