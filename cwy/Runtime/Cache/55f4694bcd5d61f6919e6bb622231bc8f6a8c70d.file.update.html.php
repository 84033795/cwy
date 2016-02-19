<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 01:49:05
         compiled from "F:/cwyuan/cwy/Admin/View\News\update.html" */ ?>
<?php /*%%SmartyHeaderCode:1411356a9ee36639685-18685033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55f4694bcd5d61f6919e6bb622231bc8f6a8c70d' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\News\\update.html',
      1 => 1454003336,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1411356a9ee36639685-18685033',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a9ee369c325',
  'variables' => 
  array (
    'info' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a9ee369c325')) {function content_56a9ee369c325($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>

<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>

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
/tab_03.gif" width="15"
				height="30" /></td>
			<td class="center">
				<div class="position">
					<span>网站管理</span>网站公告
				</div>
				<div class="sub_nav">
					<ul>
						<li><a href="<?php echo @__CONTROLLER__;?>
/showlist">新闻列表</a></li>
						<li><a href="<?php echo @__CONTROLLER__;?>
/tianjia">添加新闻</a></li>
					</ul>
					<div class="cl"></div>
				</div>

				<table border="0" cellpadding="0" cellspacing="1" class="table_form">
					<form name="myform" action="<?php echo @__CONTROLLER__;?>
/update/id/<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
"
						method="post" enctype="multipart/form-data">
						<caption>新闻详情</caption>
						<tr>
							<td class="" width="100">标题：</td>
							<td class="align_l"><input type="text" name="title"
								value="<?php echo $_smarty_tpl->tpl_vars['info']->value['title'];?>
" style="width: 300px;" /></td>
						</tr>
						<tr>
							<td class="" width="100">来源：</td>
							<td class="align_l"><input type="text" name="source"
								value="<?php echo $_smarty_tpl->tpl_vars['info']->value['source'];?>
" style="width: 300px;" /></td>
						</tr>
                        <tr>
                            <td class="" width="100">图片：</td>
                            <td class="align_l"><input type="file" name="newpic"
                                value="" style="width: 300px;" /></td>
                        </tr>
						<tr>
							<td class="">内容：</td>
							<td class="align_l"><textarea id="ancontent" name="content"
									style="width: 700px; height: 300px;"><?php echo $_smarty_tpl->tpl_vars['info']->value['content'];?>
</textarea>
								<img style='width: 300px'
								src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['info']->value['newpic'];?>
" /></td>
						</tr>
						<tr>
						<td class="align_r">&nbsp;</td>
                            <td class="align_1"><input class="button_style" type="submit" value="提交" /></td>              
					    </tr>
					</form>
				</table> </if>
			</td>
			<td class="right"><img
				src="<?php echo @ADMIN_IMG_URL;?>
/tab_07.gif" width="14"
				height="30" /></td>
		</tr>
		<tr>
			<td height="29"><img
				src="<?php echo @ADMIN_IMG_URL;?>
/tab_20.gif" width="14"
				height="29" /></td>
			<td background="<?php echo @ADMIN_IMG_URL;?>
/tab_21.gif"></td>
			<td><img src="<?php echo @ADMIN_IMG_URL;?>
/tab_22.gif"
				width="14" height="29" /></td>
		</tr>
	</table>
</body>
</html>

<?php }} ?>