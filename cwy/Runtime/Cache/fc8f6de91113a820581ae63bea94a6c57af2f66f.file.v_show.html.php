<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:28:04
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\Message\v_show.html" */ ?>
<?php /*%%SmartyHeaderCode:2476556aaf864661d01-72653141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc8f6de91113a820581ae63bea94a6c57af2f66f' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\Message\\v_show.html',
      1 => 1453995875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2476556aaf864661d01-72653141',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
    'm' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aaf8647affc',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aaf8647affc')) {function content_56aaf8647affc($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <script type="text/javaScript" src="<?php echo @ADMIN_JS_URL;?>
jquery.min.js"></script>
    <script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
css.js"></script>
    <script language="JavaScript" src="<?php echo @ADMIN_JS_URL;?>
common.js"></script>
    <link href="<?php echo @ADMIN_CSS_URL;?>
admin.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="left">
                <img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" />
            </td>
            <td class="center">
                <p class="position"><span>网站管理</span>新闻评论列表</p>
                <if condition="strtolower(ACTION_NAME) eq message ">
                    <table border="0" cellpadding="0" cellspacing="1" class="table_form">

                        <tr class="sub_nav">
                            <td class="align_l" width="400" style="float: left;">
                                <a href="<?php echo @__CONTROLLER__;?>
/message">
                                    <input type="button" value="文章评论" />
                                </a>

                                <a href="<?php echo @__CONTROLLER__;?>
/p_show">
                                    <input type="button" value="相片评论" />
                                </a>

                                <a href="<?php echo @__CONTROLLER__;?>
/v_show">
                                    <input type="button" value="新闻评论" />
                                </a>
                            </td>
                            <form name="myform" action="<?php echo @__CONTROLLER__;?>
/v_chaxun" method="get">
                                <td class="align_r" width="100">
                                    <select name="field">
                                        <option value="biaoti">标题</option>
                                        <option value="mes_id">评论ID</option>
                                    </select>
                                </td>
                                <td class="align_l">


                                    <input name="keyword" value="" type="text" />
                                    <input type="submit" name="submit" value="搜索" />
                                </td>

                        </tr>
                        </form>
                    </table>
                    <table border="0" cellpadding="0" cellspacing="1" class="table_list">
                        <form action="<?php echo @__CONTROLLER__;?>
/v_del" method="post">
                            <caption>站内信息列表</caption>
                            <tr>
                                <th width="100">编号</th>
                                <th>发信者</th>
                                <th>接收者</th>
                                <th>标题</th>
                                <th width="150">时间</th>
                                <!-- <th width="100">状态</th> -->
                                <th width="200">操作</th>
                            </tr>

                            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
?>
                            <volist name="list" id="qy">

                                <tr>
                                    <td class="">
                                        <input type="checkbox" name="mid[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['mes_id'];?>
" />
                                        <!--  <?php echo $_smarty_tpl->tpl_vars['v']->iteration;?>
-- --><?php echo $_smarty_tpl->tpl_vars['v']->value['mes_id'];?>


                                    </td>
                                    <td>
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['sender'];?>

                                    </td>
                                    <td>

                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['receiver'];?>


                                    </td>
                                    <td class="align_l">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['biaoti'];?>

                                    </td>
                                    <td class="align_l">
                                        <?php echo $_smarty_tpl->tpl_vars['v']->value['shijian'];?>

                                    </td>
                                    <!--  <td>
                                       <?php if ($_smarty_tpl->tpl_vars['v']->value['zhuangtai']==1){?> 
                                           已读
                                        <?php }else{ ?>
                                          未读

                                       <?php }?>
                                    </td> -->



                                    <td>

                                        <a href="<?php echo @__CONTROLLER__;?>
/v_show/mes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mes_id'];?>
" onclick="">查询</a>
                                        <a href="<?php echo @__CONTROLLER__;?>
/v_del/mes_id/<?php echo $_smarty_tpl->tpl_vars['v']->value['mes_id'];?>
">删除</a>



                                    </td>
                                </tr>


                            </volist>
                            <?php } ?>

                            <tr>
                                <td class="">
                                    <input name="chkall" type="checkbox" id="chkall" onClick="checkall(this.form)" value="check">全选</td>
                                <td class="align_l" colspan="6">
                                    <input type="submit" name="submit" onClick="document.myform2.action='<?php echo @__CONTROLLER__;?>
/v_del'" value="批量删除" />
                                </td>
                            </tr>
                            <tr>
                                <td class="" colspan="7">
                                    <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

                                </td>
                            </tr>
                        </form>
                    </table>
                    <else/>

                    <table border="0" cellpadding="0" cellspacing="1" class="table_form">
                        <tr class="sub_nav">

                        </tr>

                        <caption>详细信息</caption>
                        <tr>
                            <td width="10%">发信人：</td>
                            <td width="10%" class="align_l">
                                <?php echo $_smarty_tpl->tpl_vars['m']->value['sender'];?>

                            </td>
                            <td width="10%" class="align_r">收信人：</td>
                            <td width="*" class="align_l">
                                <?php echo $_smarty_tpl->tpl_vars['m']->value['receiver'];?>

                            </td>
                        </tr>
                        <tr>
                            <td>标题：</td>
                            <td colspan="3" class="align_l">
                                <?php echo $_smarty_tpl->tpl_vars['m']->value['biaoti'];?>

                            </td>
                        </tr>
                        <tr>
                            <td>内容：</td>
                            <td colspan="3" class="align_l">

                                <?php echo $_smarty_tpl->tpl_vars['m']->value['video'];?>


                            </td>
                        </tr>


                    </table>


                </if>
            </td>
            <td class="right">
                <img src="<?php echo @ADMIN_IMG_URL;?>
tab_07.gif" width="14" height="30" />
            </td>
        </tr>
        <tr>
            <td height="29">
                <img src="<?php echo @ADMIN_IMG_URL;?>
tab_20.gif" width="14" height="29" />
            </td>
            <td background="<?php echo @ADMIN_IMG_URL;?>
tab_21.gif"></td>
            <td>
                <img src="<?php echo @ADMIN_IMG_URL;?>
tab_22.gif" width="14" height="29" />
            </td>
        </tr>
    </table>
</body>

</html>
<?php }} ?>