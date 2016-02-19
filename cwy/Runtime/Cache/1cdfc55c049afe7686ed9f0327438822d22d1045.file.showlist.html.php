<?php /* Smarty version Smarty-3.1.6, created on 2016-01-27 21:39:18
         compiled from "F:/cwyuan/cwy/Admin/View\Video\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2783956a3333a534608-58337230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cdfc55c049afe7686ed9f0327438822d22d1045' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Video\\showlist.html',
      1 => 1453901954,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2783956a3333a534608-58337230',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a3333a71cae',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a3333a71cae')) {function content_56a3333a71cae($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="js/jquery.min.js"></script>
<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>
<script language="JavaScript"
	src="<?php echo @ADMIN_JS_URL;?>
common.js"></script>
<link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
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
					<span>模块管理</span>视频管理
				</p>
				<table border="0" cellpadding="0" cellspacing="1" class="table_form">
					<form name="myform" action="__URL__/album" method="post">
						<tr class="sub_nav">
							<td class="align_r"><select name="field">
									<option value="uid">用户ID</option>
									<option value="albumid">视频ID</option>
							</select></td>
							<td class="align_l"><input name="keyword" value=""
								type="text" /> <input class="button_style" type="submit" id="submit" name="submit"
								value="搜索" /></td>
						</tr>
					</form>
				</table>
				<table border="0" cellpadding="0" cellspacing="1" class="table_form">
					<form name="myform2" method="post">
						<caption>
							视频列表 <a href="#">只显示未审核的</a> <a
								href="#">显示全部</a>
						</caption>
						<tr>
							<td colspan="2">
								<ul class="vidlist">
									<volist name="list" id="qy">
									<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<li>
									 <eq name="qy.status" value="1">
                                       <input type="checkbox" name="albumid[]" value="#" />
                                       <font color="green">已审核</font>
                                       
									<video src="#" width="150" height="100" ></video>
									<p><?php echo $_smarty_tpl->tpl_vars['v']->value['video_desc'];?>
<br/></p>
									</li>
									<?php } ?>
									</volist>
								</ul>
							</td>
						</tr>
						<tr>
							<td width="50"><input name="chkall" type="checkbox"
								id="chkall" onClick="checkall(this.form)" style="border: 0;"
								value="check">全选</td>
							<td><input class="button_style" type="submit" name="del" onClick="#" value="删除" />
								<input class="button_style" type="submit" name="audit" value="批量审核"
								onClick="#" /></td>
						</tr>
					</form>
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
tab_22.gif" width="14"
				height="29" /></td>
		</tr>
	</table>
</body>
</html>
<?php }} ?>