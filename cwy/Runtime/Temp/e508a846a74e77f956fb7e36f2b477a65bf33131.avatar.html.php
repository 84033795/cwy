<?php /*%%SmartyHeaderCode:489156aa46b91d4a06-82194231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e508a846a74e77f956fb7e36f2b477a65bf33131' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Avatar\\avatar.html',
      1 => 1453911946,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '489156aa46b91d4a06-82194231',
  'variables' => 
  array (
    'page' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa46b96e49c',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa46b96e49c')) {function content_56aa46b96e49c($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript" src="/cwy/Admin/Public/js/jquery.min.js"></script>
<script language="JavaScript" src="/cwy/Admin/Public/js/css.js"></script>

<link href="/cwy/Admin/Public/css/admin.css" rel="stylesheet" type="text/css" />
<script>
   //全选功能
   function tongguo(){
     $("#tg").attr("checked")==true?$("span>input:checkbox").attr("checked",true):$("span>input:checkbox").attr("checked",false);
   }
   function weigui(){
     $("#wg").attr("checked")==true?$("eq>input:checkbox").attr("checked",true):$("eq>input:checkbox").attr("checked",false);
   }
</script>
</head>

<body>

<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
      <td class="left">
          <img src="/cwy/Admin/Public/images/tab_03.gif" width="15" height="30" />
      </td>
      <td class="center">
      <p class="position"><span>网站管理</span>头像管理</p>
      <table border="0" cellpadding="0" cellspacing="1" class="table_form">

      <form name="myform" action="/cwy/index.php/admin/avatar/avatar" method="post">
      <tr class="sub_nav">
     
         <td class="align_r"><select name="field" >
            <option value="uid">用户ID</option>
            <option value="id">头像ID</option></select>
         </td>
      <td  class="align_l"><input name="keyword" value="" type="text" /> 
         <input type="submit" id="submit" name="submit" value="搜索" />
      </td>
    
      <caption>会员头像列表&nbsp;&nbsp;
         <a href="/cwy/index.php/admin/avatar/avatar/shenhe/1">只显示未审核的</a>&nbsp;&nbsp;
         <a href="/cwy/index.php/admin/avatar/avatar">显示全部</a>
      </caption>
    
      </tr>
      </form>

      </table>

      <table border="0" cellpadding="0" cellspacing="1" class="table_form">
     
        <form action="/cwy/index.php/admin/avatar/checkAvatar/page/" name="myform2" method="post">
            <tr>
         <td width="50">
            <input type="checkbox" id="tg" onclick="tongguo()" style="border:0;" value="check"><label for="tg" checked="">通过</label>
         </td>
         <td width="50">
            <input type="checkbox" id="wg" onclick="weigui()" style="border:0;" value="check"><label for="wg" checked="">违规</label>
         </td>
         <td>
            <input type="submit" name="audit" value="批量审核" />
         </td>
      </tr>
      </form>
   
     
      </table>
      </td>

      <td class="right"><img src="/cwy/Admin/Public/images/tab_07.gif" width="14" height="30" /></td>
   </tr>
   <tr>
      <td height="29"><img src="/cwy/Admin/Public/images/tab_20.gif" width="14" height="29" /></td>
      <td  background="/cwy/Admin/Public/images/tab_21.gif"></td>
      <td><img src="/cwy/Admin/Public/images/tab_22.gif" width="14" height="29" /></td>
   </tr>
   <tr>
      <td colspan="20" style="text-align: center;">
          &nbsp;&nbsp;每页显示<b>1</b>条，本页<b>0-0</b>条&nbsp;&nbsp;&nbsp;&nbsp;<b>1/0</b>页&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/avatar/avatar?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/avatar/avatar?&page=0'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>0)?0:this.value;location='/cwy/index.php/admin/avatar/avatar?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>0)?0:this.previousSibling.value;location='/cwy/index.php/admin/avatar/avatar?&page='+page+''">&nbsp;&nbsp;
      </td>
   </tr>
</table>
</body>
</html>
<?php }} ?>