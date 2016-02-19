<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 10:15:57
         compiled from "F:/cwyuan/cwy/Home/View\Pet\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:429156aacb5d89ea94-01121831%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b8ab5b9622e693a3b39a0f3400fc134eb7e9f9c' => 
    array (
      0 => 'F:/cwyuan/cwy/Home/View\\Pet\\showlist.html',
      1 => 1454033714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '429156aacb5d89ea94-01121831',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aacb5e3be2c',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aacb5e3be2c')) {function content_56aacb5e3be2c($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>宠物</title>

<meta name="keywords" content="视频" />
<meta name="description" content="视频 " />
<meta name="generator" content="Discuz! X3.2" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<link rel="stylesheet" type="text/css" href="data/cache/style_2_common.css?RR9" /><link rel="stylesheet" type="text/css" href="data/cache/style_2_portal_list.css?RR9" />    <script src="template/petly/src/js/jquery.min.js" type="text/javascript"></script>
    <script src="template/petly/src/js/jquery.SuperSlide.js" type="text/javascript"></script>
    <script src="template/petly/src/js/pace.js" type="text/javascript"></script>
<script type="text/javascript">var STYLEID = '2', STATICURL = 'static/', IMGDIR = 'static/image/common', VERHASH = 'RR9', charset = 'utf-8', discuz_uid = '0', cookiepre = 'fOCZ_2132_', cookiedomain = '', cookiepath = '/', showusercard = '1', attackevasive = '0', disallowfloat = 'newthread', creditnotice = '1|威望|,2|金钱|,3|贡献|', defaultstyle = '', REPORTURL = 'aHR0cDovL3d3dy5wZXRseS5uZXQvdmlkZW8vaW5kZXgucGhw', SITEURL = 'http://www.petly.net/', JSPATH = 'static/js/', CSSPATH = 'data/cache/style_', DYNAMICURL = '';</script>
<script src="static/js/common.js?RR9" type="text/javascript"></script>
    
    <!--[if IE 6]>
     <script language='javascript' type="text/javascript">   
    function ResumeError() {  
         return true;  
    }  
    window.onerror = ResumeError;   
    </script> 
    <![endif]-->

<meta name="application-name" content="宠物领养网 Petly.net" />
<meta name="msapplication-tooltip" content="宠物领养网 Petly.net" />
<meta name="msapplication-task" content="name=首页;action-uri=http://www.petly.net/portal.php;icon-uri=http://www.petly.net/static/image/common/portal.ico" />
<meta name="msapplication-task" content="name=领养;action-uri=http://www.petly.net/forum.php;icon-uri=http://www.petly.net/static/image/common/bbs.ico" />
<script src="static/js/portal.js?RR9" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo @PET_CSS_URL;?>
normalize1.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo @PET_CSS_URL;?>
default1.css">
  <link rel="stylesheet" type="text/css" href="<?php echo @PET_CSS_URL;?>
style1.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo @PET_CSS_URL;?>
default.css">
   <style>
   * { margin:0; }
  #div1 { margin:auto; position:relative; }
  .box { float:left; padding:10px; border:1px solid #ccc; background:#f7f7f7; box-shadow:0 0 8px #ccc; }
  .box:hover { box-shadow:0 0 10px #999; }
  .box img { width:200px; display: block;}
  </style>
</head><body id="nv_portal" class="pg_list pg_list_4" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
 
 
 
 
 

<div id="headnav" >
  <div id="topbar" class="cl"> 
        <div class="wp"> 
      <!-- 站点LOGO -->
      
      <div class="hd_logo"> 
                <h2><a href="./" title="宠物领养网 Petly.net"><img src="picture/logo_1.png" alt="宠物领养网 Petly.net" border="0" /></a></h2>
      </div>
      
                <!-- 导航 -->
                <div class="nav">
                    <ul>

                        <li id="mn_portal"><a href="<?php echo @__MODULE__;?>
" hidefocus="true" title="Portal">首页<span>Portal</span></a>
                        </li>


                        <li id="mn_P1"><a href="<?php echo @__MODULE__;?>
/News/showlist">新闻</a>
                        </li>


                        <li id="mn_forum"><a href="<?php echo @__MODULE__;?>
/Forum/showlist" hidefocus="true" title="BBS">领养<span>BBS</span></a>
                        </li>


                        <li class="a" id="mn_P4"><a href="<?php echo @__MODULE__;?>
/Pet/showlist" hidefocus="true">宠物</a>
                        </li>


                        <li id="mn_P3"><a href="<?php echo @__MODULE__;?>
/User" hidefocus="true">个人中心</a>
                        </li>
                    </ul>
                </div>
      <!-- 用户信息 -->
      <div class="userbox"> 
                <ul class="usernav user_part">
          <a href="javascript:;" class="user_login" id="l" onMouseOver="showMenu({ 'ctrlid':'l','ctrlclass':'hover','duration':2} );" onClick="javascript:lsSubmit();">登录</a>
          <a class="user_login" style="padding: 1px 0 0 0; margin: 0;">|</a>
          <a href="member.php?mod=register" class="user_login" style="margin: 0;">注册</a>
        </ul>
        <div style="display:none"><script src="static/js/logging.js?RR9" type="text/javascript"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&amp;action=login&amp;loginsubmit=yes&amp;infloat=yes&amp;lssubmit=yes" onsubmit="return lsSubmit();">
<div class="fastlg cl">
<span id="return_ls" style="display:none"></span>
<div class="y pns">
<table cellspacing="0" cellpadding="0">
<tr>
<td>
<span class="ftid">
<select name="fastloginfield" id="ls_fastloginfield" width="40" tabindex="900">
<option value="username">用户名</option>
<option value="email">Email</option>
</select>
</span>
<script type="text/javascript">simulateSelect('ls_fastloginfield')</script>
</td>
<td><input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" /></td>
<td class="fastlg_l"><label for="ls_cookietime"><input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自动登录</label></td>
<td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密码</a></td>
</tr>
<tr>
<td><label for="ls_password" class="z psw_w">密码</label></td>
<td><input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" /></td>
<td class="fastlg_l"><button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button></td>
<td>&nbsp;<a href="member.php?mod=register" class="xi2 xw1">立即注册</a></td>
</tr>
</table>
<input type="hidden" name="quickforward" value="yes" />
<input type="hidden" name="handlekey" value="ls" />
</div>

<div class="fastlg_fm y" style="margin-right: 10px; padding-right: 10px">
<p><a href="http://www.petly.net/connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple"><img src="picture/qq_login_1.gif" class="vm" alt="QQ登录" /></a></p>
<p class="hm xg1" style="padding-top: 2px;">只需一步，快速开始</p>
</div>
</div>
</form>

</div>
         
      </div>
      <div id="scbar" class="cl">
<form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="f7294097" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="0" />
<input type="hidden" name="srhlocality" value="portal::list" />
<table cellspacing="0" cellpadding="0">
<tr>
<td class="scbar_txt_td"><input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" speech /></td>
<td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
<td class="scbar_btn_td"><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button></td>
</tr>
</table>
</form>
</div>
<script type="text/javascript">
initSearchmenu('scbar', '');
</script>
<script type="text/javascript">
    jQuery(function(){
jQuery("#scbar #scbar_txt").focus(function(){
  jQuery("#scbar").addClass("bgchange");
}).blur(function(){
  jQuery("#scbar").removeClass("bgchange");
});
    })
</script>
    </div>
  </div>
</div>
<div id="toptb" class="cl" style="display: none;">
  <div class="wp">
    <div class="z"> 
       
      <a href="javascript:;"  onclick="setHomepage('http://www.petly.net/');">设为首页</a> 
       
      <a href="http://www.petly.net/"  onclick="addFavorite(this.href, '宠物领养网 Petly.net');return false;">收藏本站</a> 
       
       
       
       
    </div>
    <div class="y"> <a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a> 
       
       
       
       
       
    </div>
  </div>
</div>

 
 
 <div id="qmenu_menu" class="p_pop blk" style="display: none;">
<div class="ptm pbw hm">
请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航<br />没有帐号？<a href="member.php?mod=register" class="xi2 xw1">立即注册</a>
</div>
<div id="fjump_menu" class="btda"></div></div> 
 

 
<!-- 二级导航 -->
<div class="sub_nav"> <div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div> </div>

 
<!-- 搜索筛选 -->
<ul id="scbar_type_menu" class="p_pop" style="display: none;">
  <li><a href="javascript:;" rel="article">文章</a></li><li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li><li><a href="javascript:;" rel="user">用户</a></li></ul>
<script type="text/javascript">
initSearchmenu('scbar', '');
</script> 
 

<!-- 用户菜单 -->
<ul class="sub_menu" id="m_menu" style="display: none;">
   
   
   
   
   
   
   
   
    <li><a href="home.php?mod=magic" style="background-image:url(images/magic_b.png) !important">道具</a></li>
   
   
    <li><a href="home.php?mod=medal" style="background-image:url(images/medal_b.png) !important">勋章</a></li>
   
   
    <li><a href="home.php?mod=task" style="background-image:url(images/task_b.png) !important">任务</a></li>
   
   
    <li><a href="portal.php" style="background-image:url(images/portal_b.png) !important">门户</a></li>
   
   
    <li><a href="home.php?mod=spacecp">设置</a></li>
   
   
   
    <li></li>
  <li></li>
  <li></li>
  <li></li>
  <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=f7294097">退出</a></li>
</ul>
<ul class="sub_menu" id="l_menu" style="display: none;">
  
  <!-- 第三方登录 -->
  <li class="user_list app_login"><a href="connect.php?mod=login&amp;op=init&amp;referer=forum.php&amp;statfrom=login"><i class="i_qq"></i>腾讯QQ</a></li>
  <li class="user_list app_login"><a href="wechat-login.html"><i class="i_wb"></i>微信登录</a></li>
</ul>
<div class="wp" style="display:none;"> 
  <!-- 隐藏导航AD位置 --> 
   
   
</div>

 

<div class="wrap_box cl">
<div id="wp" class="wp time_wp cl">

<link rel="stylesheet" type="text/css" href="template/petly/src/list.css" />
<script src="template/petly/src/js/jquery.superslide.js" type="text/javascript" type="text/javascript"></script><style id="diy_style" type="text/css"></style>
<div class="wp"> 
  <!--[diy=diy1]--><div id="diy1" class="area"></div><!--[/diy]--> 
</div>
<div class="tit_top cl"> 
                <h3>视频</h3><div class="cl" style="float: left; min-width: 200px; min-height: 30px;"><!--[diy=diy_info]--><div id="diy_info" class="area"><div id="frameSlo7D8" class="frame move-span cl frame-3-1"><div id="frameSlo7D8_left" class="column frame-3-1-l"><div id="frameSlo7D8_left_temp" class="move-span temp"></div><div id="portal_block_54" class="block move-span"><div id="portal_block_54_content" class="dxb_bc"><div class="portal_block_summary"><span class="album-subtitle">
   <span>宠物</span>
</span></div></div></div></div><div id="frameSlo7D8_center" class="column frame-3-1-r"><div id="frameSlo7D8_center_temp" class="move-span temp"></div></div></div></div><!--[/diy]--></div> 
</div>
<div id="ct" class="ct2 wp inside_box cl">
  <div class="mn"> 
     
    <!--[diy=listcontenttop]--><div id="listcontenttop" class="area"></div><!--[/diy]-->
    <div class="bm">
      <!-- 文章列表 begin -->
    <div class="list_new Framebox cl">      <div id="div1">
          <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (1).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (1).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
          <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (2).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (2).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (3).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (3).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (4).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (4).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (5).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (5).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (6).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (6).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (7).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (7).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (8).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (8).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (10).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (10).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (11).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (11).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (12).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (12).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (13).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (13).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (14).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (14).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (15).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (15).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (16).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (16).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (17).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (17).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (18).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (18).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (19).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (19).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>
        <div class="box">
          <a href="<?php echo @PET_IMG_URL;?>
tu (20).jpg">
            <img src="<?php echo @PET_IMG_URL;?>
tu (20).jpg" alt="" title="博爱" />
          </a>
          <div class="heart" id="like2" rel="like"></div> <div class="likeCount" id="likeCount2">10</div>
          </div>
        </div>

      </div>
      
      
 
      
    </div>
      <!-- 文章列表 end --> 
      <!--[diy=listloopbottom]--><div id="listloopbottom" class="area"></div><!--[/diy]--> 
    </div>
     
        <div class="pgs cl"><div class="pg"><strong>1</strong><a href="http://www.petly.net/video/index.php?page=2" >2</a><label><input type="text" name="custompage" class="px" size="2" title="输入页码，按回车快速跳转" value="1" onkeydown="if(event.keyCode==13) { window.location='http://www.petly.net/video/index.php?page='+this.value;; doane(event); }" /><span title="共 2 页"> / 2 页</span></label><a href="http://www.petly.net/video/index.php?page=2" class="nxt">下一页</a></div></div>
     
    
    <!--[diy=diycontentbottom]--><div id="diycontentbottom" class="area"></div><!--[/diy]--> 
    
  </div>
  <div class="sd pph">
    <div class="drag"> 
      <!--[diy=diyrighttop]--><div id="diyrighttop" class="area"></div><!--[/diy]--> 
    </div>
    
    <!-- 分类 -->
    <div class="list_box cl" style="margin: 0;">
          <div class="tit01 cl" style="margin: 11px 0 20px 0;">
        <h2>下级分类</h2>
      </div>
      <div class="portal_sort Framebox2 cl" style="margin: 0 0 15px 0;">
        <ul>
                    <li><a href="http://www.petly.net/video/dog/">狗</a></li>
                    <li><a href="http://www.petly.net/video/cat/">猫</a></li>
                    <li><a href="http://www.petly.net/video/fish/">水族</a></li>
                    <li><a href="http://www.petly.net/video/crawl/">爬行</a></li>
                    <li><a href="http://www.petly.net/video/insect/">昆虫</a></li>
                    <li><a href="http://www.petly.net/video/bird/">鸟</a></li>
                    <li><a href="http://www.petly.net/video/mouse/">鼠</a></li>
                    <li><a href="http://www.petly.net/video/rabbit/">兔</a></li>
                    <li><a href="http://www.petly.net/video/other/">其他</a></li>
                  </ul>
      </div>
    </div> 
    <!-- 推荐阅读 -->
    <div class="sbody cl" style="margin: 10px 0 0 0;"> 
      <!--[diy=sbody]--><div id="sbody" class="area"><div id="frameYdW93b" class="frame move-span cl frame-1"><div id="frameYdW93b_left" class="column frame-1-c"><div id="frameYdW93b_left_temp" class="move-span temp"></div><div id="portal_block_55" class="block move-span"><div id="portal_block_55_content" class="dxb_bc">      <div class="tit01 cl">
        <h2>推荐阅读</h2>
      </div>
      <div class="bd Framebox2 cl">
        <ul><li>
            <h3><a href="article-3024-1.html"  target="_blank" title="猴子收养流浪小狗还百般呵护,这得是有多喜爱~">猴子收养流浪小狗还百般呵护,这得是有多喜</a></h3>
            <div class="pic"><a href="article-3024-1.html"  target="_blank" title="猴子收养流浪小狗还百般呵护,这得是有多喜爱~"><img src="picture/8142152422a6f7efc6266a10d7aa369a.jpg" width="90" height="90" alt="猴子收养流浪小狗还百般呵护,这得是有多喜爱~"></a></div>
             <p>印度南部一只猴子有严重的“恋狗情结”，它收养了一只流浪小狗，彼此形影不离。猴子对小狗百般呵...</p>
          </li><li>
            <h3><a href="article-3023-1.html"  target="_blank" title="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时</a></h3>
            <div class="pic"><a href="article-3023-1.html"  target="_blank" title="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷"><img src="picture/4c6e410bb350338374682a27359ead61.jpg" width="90" height="90" alt="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷"></a></div>
             <p>　自然社会中，弱肉强食、适者生存是自然规律，在人类社会中，这种现象更是屡见不鲜。下面这个小...</p>
          </li></ul>
      </div></div></div><div id="portal_block_56" class="block move-span"><div id="portal_block_56_content" class="dxb_bc"><div class="portal_block_summary"><div class="tit01 cl" style="margin: 0;">
   <h2>最新主题</h2>
</div></div></div></div><div id="portal_block_57" class="block move-span"><div id="portal_block_57_content" class="dxb_bc"><ul class="recitems_recread cl"><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9473" title="forum.php?mod=viewthread&tid=9473" target="_blank">想领养一只猫</a></li><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9471" title="forum.php?mod=viewthread&tid=9471" target="_blank">2个月大的小幼犬求爱心主人领养</a></li><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9470" title="forum.php?mod=viewthread&tid=9470" target="_blank">求狗狗</a></li><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9466" title="forum.php?mod=viewthread&tid=9466" target="_blank">厦门宠物招领</a></li><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9468" title="forum.php?mod=viewthread&tid=9468" target="_blank">2岁半萨摩寻好人家</a></li><li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9467" title="forum.php?mod=viewthread&tid=9467" target="_blank">9个月小型犬。求领养</a></li></ul></div></div><div id="portal_block_58" class="block move-span"><div id="portal_block_58_content" class="dxb_bc"><div class="portal_block_summary"><div class="ad-right cl" style="padding: 20px 0;">
<script type="text/javascript">
    /*250*250 漂浮 2015-08-20*/
    var cpro_id = "u2273532";
</script>
<script src="js/c.js" type="text/javascript"></script>
</div></div></div></div></div></div></div><!--[/diy]--> 
    </div>

    <div class="drag"> 
      <!--[diy=diy2]--><div id="diy2" class="area"></div><!--[/diy]--> 
    </div>
  </div>
</div>
<div class="wp mtn"> 
  <!--[diy=diy3]--><div id="diy3" class="area"></div><!--[/diy]--> 
</div></div>
 
     




<div id="footer" class="footer cl">
  <div id="ft" class="wp cl">
      <div class="footer-left cl">&copy; 2001-2015 <a href="http://www.petly.com" target="_blank">宠物领养网</a> <a href="http://www.petly.net" target="_blank">PETLY</a>  
         备案：<a href="http://www.miitbeian.gov.cn/" target="_blank">冀ICP备11010768号-4</a> 
         
        <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script");
  hm.src = "//hm.baidu.com/hm.js?a3e7dea0b0240cb3036db165aa11281b";
  var s = document.getElementsByTagName("script")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</div>
        <div class="rgt">
           <a href="/aboutus/index.html" target="_blank" title="">关于我们</a><span></span>
           <a href="/aboutus/remind.html" target="_blank" title="">领养提示</a><span></span>
           <a href="/aboutus/help.html" target="_blank" title="">使用帮助</a><span></span>
           <a href="/aboutus/cooperation.html" target="_blank" title="">商务合作</a><span></span>
           <a href="/aboutus/contact.html" target="_blank" title="">联系我们</a>
        </div>
  </div> 
 

 

 
 

 

 
<script src="http://libs.baidu.com/jquery/1.7.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?php echo @PET_JS_URL;?>
jquery-1.11.0.min.js"><\/script>')</script>

  <script src="<?php echo @PET_JS_URL;?>
jquery.waterfall.js"></script>
  <!--图片弹窗引入-->
  <script src="<?php echo @PET_JS_URL;?>
jquery.poptrox.min.js"></script>
  <script>
  //图片弹窗功能实现
  $(function() {        
    $('.box').poptrox({
      usePopupCaption: true
    });





    $('body').on("click",'.heart',function()
    {
      
      var A=$(this).attr("id");
      var B=A.split("like");
        var messageID=B[1];
        var C=parseInt($("#likeCount"+messageID).html());
      $(this).css("background-position","")
        var D=$(this).attr("rel");
       
        if(D === 'like') 
        {      
        $("#likeCount"+messageID).html(C+1);
        $(this).addClass("heartAnimation").attr("rel","unlike");
        
        }
        else
        {
        $("#likeCount"+messageID).html(C-1);
        $(this).removeClass("heartAnimation").attr("rel","like");
        $(this).css("background-position","left");
        }


    });








  
  });
  //图片弹窗功能实现end

  $("#div1").waterfall({
      itemClass: ".box",
      minColCount: 2,
      spacingHeight: 10,
      resizeable: true,
      ajaxCallback: function(success, end) {
          var data = { "data": [
              { "src": "tu (1).jpg" }, { "src": "tu (2).jpg" }, { "src": "tu (3).jpg" }, { "src": "tu (4).jpg" }, { "src": "tu (5).jpg" }, { "src": "tu (6).jpg" }, { "src": "tu (7).jpg" }, { "src": "tu (8).jpg" }, { "src": "tu (9).jpg" }, { "src": "tu (10).jpg" }, { "src": "tu (11).jpg" }, { "src": "tu (12).jpg" }, { "src": "tu (13).jpg" }, { "src": "tu (14).jpg" }, { "src": "tu (15).jpg" }, { "src": "tu (16).jpg" }, { "src": "tu (17).jpg" }, { "src": "tu (18).jpg" }, { "src": "tu (19).jpg" }, { "src": "tu (20).jpg" }
          ]};
          var str = "";
          var templ = '<div class="box" style="opacity:0;filter:alpha(opacity=0);"><div class="pic"><img src="<?php echo @PET_IMG_URL;?>
{ { src } }" /></div></div>'

          for(var i = 0; i < data.data.length; i++) {
              str += templ.replace("{ { src } }", data.data[i].src);
          }
          $(str).appendTo($("#div1"));
          success();
          end();
      }
  });
  </script>
</body></html>
<?php }} ?>