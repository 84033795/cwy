<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:29:22
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\User\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:1938556aaf8b22d1e66-56627855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68d373b6608ef05213746979ae72ae482a914edf' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\User\\showlist.html',
      1 => 1453992101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1938556aaf8b22d1e66-56627855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'qy' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf8b23de8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf8b23de8d')) {function content_56aaf8b23de8d($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'D:\\php_chengxu\\cwyuan\\ThinkPHP\\Library\\Vendor\\Smarty\\plugins\\modifier.date_format.php';
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <script type="text/javaScript" src="<?php echo @PUBLIC_JS_URL;?>
jquery.min.js"></script>
    <script language="JavaScript" src="<?php echo @PUBLIC_JS_URL;?>
css.js"></script>
    <script language="JavaScript" src="<?php echo @PUBLIC_JS_URL;?>
common.js"></script>
    <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
</head>
 
<body>
    <table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="left"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" /></td>
            <td class="center">
                <p class="position"><span>网站管理</span>会员列表</p>
                <table border="0" cellpadding="0" cellspacing="1" class="table_form">
                    <form name="myform" action="<?php echo @__CONTROLLER__;?>
/search" method="get">
                        <tr class="sub_nav">
                            <td class="align_r">
                                <select name="field">
                                    <option value="user_name">用户名</option>
                                    <option value="user_id">用户ID</option>
                                    <option value="email">注册Email</option>
                                </select>
                            </td>
                            <td class="align_l">
                                <input name="keyword" value="" type="text" />
                                <input class="button_style" type="submit" id="submit" name="submit" value="搜索" />
                            </td>
                        </tr>
                    </form>
                </table>
                <table border="0" cellpadding="0" cellspacing="1" class="table_list">
                    <form name="myform2" method="post">
                        <caption>会员列表</caption>
                        <tr>
                            <th>选择</th>
                            <th>用户ID</th>
                            <th>用户名</th>
                            <th>性别</th>
                            <th>年龄</th>
                            <th>地区</th>
                            <th>手机号</th>
                            <th>邮箱</th>
                            <th>注册时间</th>
                            <th>登陆次数</th>
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
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
" />
                                </td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</td>
                                <td><a href="__URL__/view/uid/<?php echo $_smarty_tpl->tpl_vars['qy']->value['uid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['user_name'];?>
</a></td>
                                <?php if ($_smarty_tpl->tpl_vars['v']->value['gender']==0){?>
                                <td>女</td>
                                <?php }elseif($_smarty_tpl->tpl_vars['v']->value['gender']==1){?>
                                <td>男</td>
                                <?php }?>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['age'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['address'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['phone_num'];?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
</td>
                                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['v']->value['reg_time'],"%Y-%m-%d %T");?>
</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/<?php echo $_smarty_tpl->tpl_vars['qy']->value['uid'];?>
">ta的宠物</a>|<a href="__URL__/delmember/uid/<?php echo $_smarty_tpl->tpl_vars['qy']->value['uid'];?>
">ta的帖子</a></td>
                            </tr>
                            <?php } ?>
                            <tr>
                                <td colspan="20" style="text-align: center;">
                                    <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                                </td>
                            </tr>
                        </volist>
                        <tr>
                            <td class="">
                                <input name="chkall" type="checkbox" id="chkall" onClick="checkall(this.form)" style="border:0;" value="check">全选</td>
                            <td class="align_l " colspan="10">
                                <input class="button_style" type="submit" name="del" value="批量删除" onClick="document.myform2.action='<?php echo @__CONTROLLER__;?>
/delete'" />
                        </tr>
                    </form>
                </table>
            </td>
            <td class="right"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_07.gif" width="14" height="30" /></td>
        </tr>
        <tr>
            <td height="29"><img src="<?php echo @ADMIN_IMG_URL;?>
tab_20.gif" width="14" height="29" /></td>
            <td background="<?php echo @ADMIN_IMG_URL;?>
tab_21.gif"></td>
            <td><img src="<?php echo @ADMIN_IMG_URL;?>
tab_22.gif" width="14" height="29" /></td>
        </tr>
    </table>
</body>

</html><?php }} ?>