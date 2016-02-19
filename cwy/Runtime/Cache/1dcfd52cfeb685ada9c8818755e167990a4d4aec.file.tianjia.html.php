<?php /* Smarty version Smarty-3.1.6, created on 2016-01-28 19:23:50
         compiled from "F:/cwyuan/cwy/Admin/View\News\tianjia.html" */ ?>
<?php /*%%SmartyHeaderCode:2128956a977c05a5e15-61185867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1dcfd52cfeb685ada9c8818755e167990a4d4aec' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\News\\tianjia.html',
      1 => 1453980217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2128956a977c05a5e15-61185867',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a977c063b64',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a977c063b64')) {function content_56a977c063b64($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
				</div> <if condition="strtolower(ACTION_NAME) eq announce ">
				<table border="0" cellpadding="0" cellspacing="1" class="table_list"
					id="tool1">
					

						<table border="0" cellpadding="0" cellspacing="1"
							class="table_form">
							<form name="myform" action="<?php echo @__CONTROLLER__;?>
/tianjia" method="post"enctype="multipart/form-data">
								<caption>添加新闻</caption>
								<tr>
									<td class="" width="100">标题：</td>
									<td class="align_l"><input type="text" name="title"
										value="" style="width: 300px;" /></td>
								</tr>
								<tr>
                                    <td class="" width="100">来源：</td>
                                    <td class="align_l"><input type="text" name="source"
                                        value="" style="width: 300px;" /></td>
                                </tr>
                                <tr>
                                    <td class="" width="100">图片：</td>
                                    <td><input type="file" name="newpic"/></td>
                                </tr>
								<tr>
									<td class="">内容：</td>
									<td class="align_l"><textarea id="ancontent"
											name="content" style="width: 700px; height: 300px;"></textarea></td>
								</tr>
								<tr>
									<td class="align_r">&nbsp;</td>
									<!--  <input type="hidden" name="edit" value="#" />
									<input type="hidden" name="aid" value="#" />-->
									<td class="align_1"><input type="submit" 
										value="提交" /></td>
								</tr>
							</form>
						</table>
				</if>
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