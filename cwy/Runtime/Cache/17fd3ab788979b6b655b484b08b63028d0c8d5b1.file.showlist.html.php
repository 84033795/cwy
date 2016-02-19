<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:27:02
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\Article\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1549156aaf826728250-05998787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17fd3ab788979b6b655b484b08b63028d0c8d5b1' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\Article\\showlist.html',
      1 => 1453962986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1549156aaf826728250-05998787',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf826948f1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf826948f1')) {function content_56aaf826948f1($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php_chengxu\\cwyuan\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript"
	src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
<script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>
<script language="JavaScript"
	src="<?php echo @ADMIN_JS_URL;?>
common.js"></script>
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
					<span>模块管理</span>文章管理
				</p>
				<table border="0" cellpadding="0" cellspacing="1" class="table_form">
					<form name="myform" action="<?php echo @__CONTROLLER__;?>
/search" method="get">
						<tr class="sub_nav">
							<td class="align_r"><select name="field"><option
										value="title">标题</option>
									
									<option value="author_id">用户ID</option></select></td>
							<td class="align_l"><input name="keyword" value=""
								type="text" /> <input type="submit" id="submit" 
								value="搜索" /></td>
						</tr>
					</form>
				</table>
				<table border="0" cellpadding="0" cellspacing="1" class="table_list">
					<form name="myform2" action="<?php echo @__CONTROLLER__;?>
/del_stu" method="post">
						<caption>文章列表</caption>
						<tr>
							<th>选择</th>
							<th>用户ID</th>
							<th>标题</th>
							<th>内容</th>
							<th>时间</th>
							<th>状态</th>
						</tr>
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
"/></td>
							<td><?php echo $_smarty_tpl->tpl_vars['v']->value['author_id'];?>
</td>
							<td><a href="<?php echo @__CONTROLLER__;?>
/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</a></td>
							<td><a href="<?php echo @__CONTROLLER__;?>
/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['article_id'];?>
"
								target="_self"><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</a></td>
							<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['dateline'],"%y-%m-%d %I:%M:%S");?>
</td>
							<td><eq name="qy.stat" value="1"> <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?> <font
									color="green">已审核</font> <?php }else{ ?><font color="red">未审核</font></eq></td> <?php }?>
						
						</tr>
						</volist>
						<?php } ?>
						<tr>
							<td style="padding-left:28px"><input  type="checkbox"
								id="chkall" onClick="checkall(this.form)" style="border: 0;"
								value="check">全选</td>
							<td class="" colspan="1"><input type="submit" name="submit"
								 value="删除" onClick="#"
								class="button_style" />&nbsp;&nbsp;
								 <input type="submit" name="submit" value="批量审核"
								onClick="#" class="button_style" /> </td>
								<td class="align_left" colspan="4"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
</td>
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
tab_22.gif"
				width="14" height="29" /></td>
		</tr>
	</table>
</body>
</html>
<?php }} ?>