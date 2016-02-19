<?php /*%%SmartyHeaderCode:1983756aa46b5939f32-48396166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67eee3d1ddfa7dcfe3fb8809162c08e7e577ce0f' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\User\\showlist.html',
      1 => 1453992101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1983756aa46b5939f32-48396166',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'qy' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa46b5d9db8',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa46b5d9db8')) {function content_56aa46b5d9db8($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <script type="text/javaScript" src="PUBLIC_JS_URLjquery.min.js"></script>
    <script language="JavaScript" src="PUBLIC_JS_URLcss.js"></script>
    <script language="JavaScript" src="PUBLIC_JS_URLcommon.js"></script>
    <link href="/cwy/Admin/Public/css/admin.css" rel="stylesheet" type="text/css" />
</head>
 
<body>
    <table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td class="left"><img src="/cwy/Admin/Public/images/tab_03.gif" width="15" height="30" /></td>
            <td class="center">
                <p class="position"><span>网站管理</span>会员列表</p>
                <table border="0" cellpadding="0" cellspacing="1" class="table_form">
                    <form name="myform" action="/cwy/index.php/admin/user/search" method="get">
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
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="14" />
                                </td>
                                <td>14</td>
                                <td><a href="__URL__/view/uid/">小兔子</a></td>
                                                                <td>女</td>
                                                                <td>17</td>
                                <td>泉州</td>
                                <td>18800484200</td>
                                <td>tuzi@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="13" />
                                </td>
                                <td>13</td>
                                <td><a href="__URL__/view/uid/">菲菲</a></td>
                                                                <td>女</td>
                                                                <td>26</td>
                                <td>长沙</td>
                                <td>18800835200</td>
                                <td>feifei@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="12" />
                                </td>
                                <td>12</td>
                                <td><a href="__URL__/view/uid/">小宁</a></td>
                                                                <td>女</td>
                                                                <td>21</td>
                                <td>杭州</td>
                                <td>18800008485</td>
                                <td>xiaoning@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="10" />
                                </td>
                                <td>10</td>
                                <td><a href="__URL__/view/uid/">小四</a></td>
                                                                <td>女</td>
                                                                <td>28</td>
                                <td>长春</td>
                                <td>18800082600</td>
                                <td>caoheyang@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="8" />
                                </td>
                                <td>8</td>
                                <td><a href="__URL__/view/uid/">孙越</a></td>
                                                                <td>女</td>
                                                                <td>30</td>
                                <td>北京</td>
                                <td>18800666000</td>
                                <td>sunyue@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="6" />
                                </td>
                                <td>6</td>
                                <td><a href="__URL__/view/uid/">三胖</a></td>
                                                                <td>男</td>
                                                                <td>44</td>
                                <td>台北</td>
                                <td>18800994000</td>
                                <td>sanpang@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td class="">
                                    <input type="checkbox" name="user_id[]" value="5" />
                                </td>
                                <td>5</td>
                                <td><a href="__URL__/view/uid/">小屁</a></td>
                                                                <td>男</td>
                                                                <td>26</td>
                                <td>天津</td>
                                <td>18804440000</td>
                                <td>xiaopi@163.com</td>
                                <td>2016-01-25 13:54:39</td>
                                <td>...</td>
                                <td><a href="__URL__/delmember/uid/">ta的宠物</a>|<a href="__URL__/delmember/uid/">ta的帖子</a></td>
                            </tr>
                                                        <tr>
                                <td colspan="20" style="text-align: center;">
                                    &nbsp;1&nbsp;&nbsp;<a href='/cwy/index.php/admin/User/showlist?&page=2'>2</a>&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/User/showlist?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/User/showlist?&page=2'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>2)?2:this.value;location='/cwy/index.php/admin/User/showlist?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>2)?2:this.previousSibling.value;location='/cwy/index.php/admin/User/showlist?&page='+page+''">&nbsp;&nbsp;
                                </td>
                            </tr>
                        </volist>
                        <tr>
                            <td class="">
                                <input name="chkall" type="checkbox" id="chkall" onClick="checkall(this.form)" style="border:0;" value="check">全选</td>
                            <td class="align_l " colspan="10">
                                <input class="button_style" type="submit" name="del" value="批量删除" onClick="document.myform2.action='/cwy/index.php/admin/user/delete'" />
                        </tr>
                    </form>
                </table>
            </td>
            <td class="right"><img src="/cwy/Admin/Public/images/tab_07.gif" width="14" height="30" /></td>
        </tr>
        <tr>
            <td height="29"><img src="/cwy/Admin/Public/images/tab_20.gif" width="14" height="29" /></td>
            <td background="/cwy/Admin/Public/images/tab_21.gif"></td>
            <td><img src="/cwy/Admin/Public/images/tab_22.gif" width="14" height="29" /></td>
        </tr>
    </table>
</body>

</html><?php }} ?>