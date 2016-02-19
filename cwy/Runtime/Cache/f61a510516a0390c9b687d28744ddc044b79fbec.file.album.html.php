<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 10:28:40
         compiled from "F:/cwyuan/cwy/Admin/View\Album\album.html" */ ?>
<?php /*%%SmartyHeaderCode:1573856a9e839169519-73469841%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61a510516a0390c9b687d28744ddc044b79fbec' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Album\\album.html',
      1 => 1454034503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1573856a9e839169519-73469841',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56a9e83955250',
  'variables' => 
  array (
    'page' => 0,
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a9e83955250')) {function content_56a9e83955250($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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

<script>
   //全选功能
   function tongguo(){
   
     if($("#tg").attr("checked")==true){
        $("span>input:checkbox").attr("checked",true);
        $("eq>input:checkbox").attr("checked",false);
        $(".wg").hide();
        $(".tg").show();
     }else{
        $("span>input:checkbox").attr("checked",false);
        $(".wg").show();
         
     }
   }
   function weigui(){
     if($("#wg").attr("checked")==true){
        $("eq>input:checkbox").attr("checked",true);
        $("span>input:checkbox").attr("checked",false);
        $(".tg").hide();
        $(".wg").show();
     }else{
        $("eq>input:checkbox").attr("checked",false);
        $(".tg").show();
     }
   }
  $().ready(function(){
     $("eq input:checkbox").click(function(){
      var id=$(this).attr('id');
      var val=$(this).val();
      var one=id.substr(0,1);
      if(one=="a"){
        var id="#b"+val;
        $(id).toggle();
        $(id).next().toggle();
      }else if(one=="b"){
           var id="#a"+val;
          $(id).toggle();
          $(id).next().toggle();
      }
      
    });
    
  });
   
  
</script>
</head>

<body>
<table class="tab" border="0" align="center" cellpadding="0" cellspacing="0">
   <tr>
      <td class="left">
          <img src="<?php echo @ADMIN_IMG_URL;?>
tab_03.gif" width="15" height="30" />
      </td>
      <td class="center">
         <p class="position"><span>网站管理</span>相片管理</p>
         <table border="0" cellpadding="0" cellspacing="1" class="table_form">
           <form name="myform" action="<?php echo @__CONTROLLER__;?>
/album" method="post">
            <tr class="sub_nav">
               <td class="align_r"><select name="field" >
            <option value="uid">用户ID</option>
            <option value="id">图片ID</option></select>
         </td>
      <td  class="align_l"><input name="keyword" value="" type="text" /> 
         <input type="submit" id="submit" name="submit" value="搜索" />
      </td>
      <caption>会员头像列表&nbsp;&nbsp;
         <a href="<?php echo @__CONTROLLER__;?>
/album/shenhe/1">只显示未审核的</a>&nbsp;&nbsp;
         <a href="<?php echo @__CONTROLLER__;?>
/album">显示全部</a>
      </caption>
      </tr>
      </form>
      </table>

      <table border="0" cellpadding="0" cellspacing="1" class="table_form">
      <form action="<?php echo @__CONTROLLER__;?>
/checkAlbum/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
" name="myform2" method="post">
      
      <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['info']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>

            <ul class="piclist">
               <volist name="list" id="qy">
                  <li>
                     <img src="<?php echo @SITE_URL;?>
<?php echo $_smarty_tpl->tpl_vars['v']->value['pic_url'];?>
" width="100" height="110" />
                     <br />
         <eq name="qy.status" value="1">
         <?php if ($_smarty_tpl->tpl_vars['v']->value['status']==1){?>
            <font color="green">已审核</font>
            <a href="<?php echo @__CONTROLLER__;?>
/del/id/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
/page/<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">删除</a>
         <?php }else{ ?>
            <font color="red">未审核</font><br />

            <span><input type="checkbox" class="tg" name="ok[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="a<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
            <label class="tg" for="a<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">通过</label></span>
            &nbsp;&nbsp;
            <input type="checkbox" class="wg" name="no[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" id="b<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" />
             <label class="wg" for="b<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" value="3">违规</label>
         <?php }?>
         </eq><br  />
         <span>用户ID <?php echo $_smarty_tpl->tpl_vars['v']->value['user_id'];?>
</span> <br />
         头像ID <span id="touid"><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</span>
         <br />
                  </li>
               </volist>
            </ul>
        
       <?php } ?>
      <tr>
        <td width="50">
            <input type="checkbox" id="tg" class="tg" onclick="tongguo()" style="border:0;" value="check"><label class="tg" for="tg" checked="">通过</label>
         </td>
         <td width="50">
            <input type="checkbox" id="wg" class="wg" onclick="weigui()" style="border:0;" value="check"><label class="wg" for="wg" checked="">违规</label>
         </td>
         <td>
          <input type="submit" value="批量审核" />
         </td>
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
      <td  background="<?php echo @ADMIN_IMG_URL;?>
tab_21.gif"></td>
      <td><img src="<?php echo @ADMIN_IMG_URL;?>
tab_22.gif" width="14" height="29" /></td>
   </tr>
    <tr>
      <td colspan="20" style="text-align: center;">
          <?php echo $_smarty_tpl->tpl_vars['pagelist']->value;?>

      </td>
   </tr>
</table>
</body>
</html>
<?php }} ?>