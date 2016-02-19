<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 11:31:01
         compiled from "D:/php_chengxu/cwyuan/cwy/Admin/View\Manager\login.html" */ ?>
<?php /*%%SmartyHeaderCode:1285256aadcf5087f10-85909756%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07d52887c61afce7d0998a012b3335ee7691a8d8' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Admin/View\\Manager\\login.html',
      1 => 1453998960,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1285256aadcf5087f10-85909756',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aadcf51bc01',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aadcf51bc01')) {function content_56aadcf51bc01($_smarty_tpl) {?><html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理平台</title>
<script type="text/javascript" src="js/thinkajax.js"></script>
<style type="text/css">
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	overflow:hidden;
}
.STYLE3 {
  color: #528311; font-size: 12px;
}
.STYLE4 {
	color: #42870a;
	font-size: 12px;
}

</style>
<script type="text/javascript">

function form_submit()

{

    var obj_form = document.getElementById('loginform');

    obj_form.submit();

}
function fleshVerify(){
	var verify=document.getElementById('verifyImg');
	verify.setAttribute('src','picture/index.php'+new Date());
}

</script>

</head>

<body>
<script language="JavaScript1.2">if(self!=top){ top.location=self.location;}</script>
<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
<form name="loginform" id="loginform" action="<?php echo @__SELF__;?>
" method="post" >
  <tr>
    <td bgcolor="#e5f6cf">&nbsp;</td>
  </tr>
  <tr>
    <td height="608" background="<?php echo @ADMIN_IMG_URL;?>
login_03.gif"><table width="862" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td height="266" background="<?php echo @ADMIN_IMG_URL;?>
login_04.gif">&nbsp;</td>
      </tr>
      <tr>
        <td height="95"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="424" height="95" background="<?php echo @ADMIN_IMG_URL;?>
login_06.gif">&nbsp;</td>
            <td width="183" background="<?php echo @ADMIN_IMG_URL;?>
login_07.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="21%" height="30"><div align="center"><span class="STYLE3">用户</span></div></td>
                <td width="79%" height="30"><input type="text" name="admin_name"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
              </tr>
              <tr>
                <td height="30"><div align="center"><span class="STYLE3">密码</span></div></td>
                <td height="30"><input type="password" name="pass_word"  style="height:18px; width:130px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;"></td>
              </tr>

      <tr>
        <td height="30"><div align="center"><span class="STYLE3">验证码</span></div></td>
        <td height="30"><input type="text" name="captcha"  style="height:17px; width:40px; border:solid 1px #cadcb2; font-size:12px; color:#81b432;">
        <img width="80px" height="30px" src="<?php echo @__CONTROLLER__;?>
/verifyImg"  alt="" 
        onclick="this.src='<?php echo @__CONTROLLER__;?>
/verifyImg/'+Math.random()"</td>
      </tr>
            </table></td>
            <td width="255" background="<?php echo @ADMIN_IMG_URL;?>
login_08.gif">&nbsp;</td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="247" valign="top" background="<?php echo @ADMIN_IMG_URL;?>
login_09.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="22%" height="30">&nbsp;</td>
            <td width="56%" align="center">　　　　　　　　　<img src="<?php echo @ADMIN_IMG_URL;?>
dl.gif" width="81" height="22" border="0" usemap="#Map"></td>
            <td width="22%">&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td height="30"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="44%" height="20">&nbsp;</td>
                <td width="56%" class="STYLE4">版本 2011V1.0 </td>
              </tr>
            </table></td>
            <td>&nbsp;</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td bgcolor="#a2d962">&nbsp;</td>
  </tr>
  </form>
</table>

<map name="Map"><area shape="rect" coords="3,3,36,19" href="javascript:form_submit();"><area shape="rect" coords="40,3,78,18" href="javascript:document.loginform.reset();"></map></body>
</html><?php }} ?>