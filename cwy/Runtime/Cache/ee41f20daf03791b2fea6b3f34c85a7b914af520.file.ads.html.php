<?php /* Smarty version Smarty-3.1.6, created on 2016-01-28 21:47:46
         compiled from "F:/cwyuan/cwy/Admin/View\Ads\ads.html" */ ?>
<?php /*%%SmartyHeaderCode:111356aa1c0205a553-16656226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee41f20daf03791b2fea6b3f34c85a7b914af520' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Ads\\ads.html',
      1 => 1453988777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '111356aa1c0205a553-16656226',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'qy' => 0,
    'ads' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa1c02238e2',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa1c02238e2')) {function content_56aa1c02238e2($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="js/jquery.min.js"></script>
<script language="JavaScript" src="js/css.js"></script>
<link href="<?php echo @ADMIN_CSS_URL;?>
/admin.css" rel="stylesheet" type="text/css" />
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
      <caption>网站广告</caption>
      <tr>
        <th class="form_th">广告标识码</th>
        <th class="form_th">广告内容</th>
      </tr>
      <volist name="listads" id="qy">
      <tr><input name="adsid[<?php echo $_smarty_tpl->tpl_vars['qy']->value['adsid'];?>
]" type="hidden"  value="<?php echo $_smarty_tpl->tpl_vars['qy']->value['adsid'];?>
" maxlength="50">
        <td class="align_r"><input name="ads_top_name"  type="text" value="首页顶部广告" maxlength="50"></td>
        <td class="align_l"><textarea name="ads_top" cols="80" style="height:80px"><?php echo $_smarty_tpl->tpl_vars['ads']->value;?>
</textarea></td>
      </tr>
      </volist>
      <tr>
        <td class="align_r" ><input name="ads_list_name" type="text" maxlength="50" value="列表页广告"></td>
        <td class="align_l" ><textarea name="ads_list" cols="80" style="height:80px;"></textarea>
      </tr>
      <tr>
        <td class="align_r">&nbsp;</td>
        <td class="align_l">            <input class="submit" type="submit" name="submit" value=" 提交 " >
            <input type="reset" name="Input" value=" 重置 " ></td>
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
</html><?php }} ?>