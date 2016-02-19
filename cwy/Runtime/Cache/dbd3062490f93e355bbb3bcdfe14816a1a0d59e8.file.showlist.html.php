<?php /* Smarty version Smarty-3.1.6, created on 2016-01-28 23:24:24
         compiled from "F:/cwyuan/cwy/Admin/View\News\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:67656a90b826b5f77-50951441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbd3062490f93e355bbb3bcdfe14816a1a0d59e8' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\News\\showlist.html',
      1 => 1453994661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '67656a90b826b5f77-50951441',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a90b82a120c',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a90b82a120c')) {function content_56a90b82a120c($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'F:\\cwyuan\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
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
                    <span>模块管理</span>新闻管理
                </p>
                <table border="0" cellpadding="0" cellspacing="1" class="table_form">
                    <div class="sub_nav">
                    <ul>
                        <li><a href="<?php echo @__CONTROLLER__;?>
/showlist">新闻列表</a></li>
                        <li><a href="<?php echo @__CONTROLLER__;?>
/tianjia">添加新闻</a></li>
                    </ul>
                    <div class="cl"></div>
                </table>
                <table border="0" cellpadding="0" cellspacing="1" class="table_list">
                    <form name="myform2" action="<?php echo @__CONTROLLER__;?>
/del" method="post">
                        <caption>新闻列表</caption>
                        <tr>
                            <th>选择</th>
                            <th>标题</th>
                            <th>内容</th>
                            <th>时间</th>
                            <th>来源</th>
                            <th>访问次数</th>
                            <th>评论次数</th>
                            <th>操作</th>
                        </tr>
                        
                        <volist name="list" id="qy">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <tr>
                            <td class=""><input type="checkbox" name="id[]"
                                value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"/></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['title'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['content'];?>
</a></td>
                            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['pubtime'],"%y-%m-%d %I:%M:%S");?>
</a></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['source'];?>
</td>
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['readtimes'];?>
</td> 
                            <td><?php echo $_smarty_tpl->tpl_vars['v']->value['commenttimes'];?>
</td>
                        <td>
                        <a href="<?php echo @__CONTROLLER__;?>
/detail/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="button_style">详情</a>
                        <a href="<?php echo @__CONTROLLER__;?>
/update/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" class="button_style">修改</a>
                        </tr>
                        <?php } ?>
                        </volist>
                        
                        <tr>
                            <td style="padding-left:28px"><input  type="checkbox"
                                id="chkall" onClick="checkall(this.form)" style="border: 0;"
                                value="check">全选</td>
                            <td class="align_2" ><input type="submit"
                                 value="批量删除" onClick="#"
                                class="button_style" />
                        <td colspan="7"><?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>
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