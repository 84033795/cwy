<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 10:15:54
         compiled from "F:/cwyuan/cwy/Home/View\Forum\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:904756aacb5a0dc6d0-73127810%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff33464e2f603007ee8204cf3fd9636340fc1c66' => 
    array (
      0 => 'F:/cwyuan/cwy/Home/View\\Forum\\showlist.html',
      1 => 1454033709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '904756aacb5a0dc6d0-73127810',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aacb5b3a7be',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aacb5b3a7be')) {function content_56aacb5b3a7be($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>宠物领养论坛 </title>

    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="generator" content="Discuz! X3.2" />
    <meta name="author" content="Discuz! Team and Comsenz UI Team" />
    <meta name="copyright" content="2001-2013 Comsenz Inc." />
    <meta name="MSSmartTagsPreventParsing" content="True" />
    <meta http-equiv="MSThemeCompatible" content="Yes" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_common_1.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_forum_index.css" />
    <script src="<?php echo @JS_URL;?>
jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo @JS_URL;?>
jquery.superslide.js" type="text/javascript"></script>
    <script src="<?php echo @JS_URL;?>
pace.js" type="text/javascript"></script>
    <script type="text/javascript">
        var STYLEID = '2',
            STATICURL = 'static/',
            IMGDIR = 'static/image/common',
            VERHASH = 'RR9',
            charset = 'utf-8',
            discuz_uid = '0',
            cookiepre = 'fOCZ_2132_',
            cookiedomain = '',
            cookiepath = '/',
            showusercard = '1',
            attackevasive = '0',
            disallowfloat = 'newthread',
            creditnotice = '1|威望|,2|金钱|,3|贡献|',
            defaultstyle = '',
            REPORTURL = 'aHR0cDovL3d3dy5wZXRseS5uZXQvZm9ydW0ucGhwP2dpZD0x',
            SITEURL = 'http://www.petly.net/',
            JSPATH = 'static/js/',
            CSSPATH = 'data/cache/style_',
            DYNAMICURL = '';
    </script>
    <script src="<?php echo @JS_URL;?>
common.js" type="text/javascript"></script>

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
    <link rel="archives" title="宠物领养网 Petly.net" href="http://www.petly.net/archiver/" />

    <link rel="stylesheet" id="css_widthauto" type="text/css" href="<?php echo @CSS_URL;?>
style_2_widthauto.css" />
    <script type="text/javascript">
        HTMLNODE.className += ' widthauto'
    </script>
    <script src="<?php echo @JS_URL;?>
forum.js" type="text/javascript"></script>
</head>

<body id="nv_forum" class="pg_index" onkeydown="if(event.keyCode==27) return false;">
    <div id="append_parent"></div>
    <div id="ajaxwaitid"></div>






    <div id="headnav">
        <div id="topbar" class="cl">
            <div class="wp">
                <!-- 站点LOGO -->

                <div class="hd_logo">
                    <h2><a href="./" title="宠物领养网 Petly.net"><img src="<?php echo @PIC_URL;?>
logo.png" alt="宠物领养网 Petly.net" border="0" /></a></h2>
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


                        <li class="a" id="mn_forum"><a href="<?php echo @__MODULE__;?>
/Forum/showlist" hidefocus="true" title="BBS">领养<span>BBS</span></a>
                        </li>


                        <li id="mn_P4"><a href="<?php echo @__MODULE__;?>
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
                        <a href="javascript:;" class="user_login" id="l">登录</a>
                        <a class="user_login" style="padding: 1px 0 0 0; margin: 0;">|</a>
                        <a href="member.php?mod=register" class="user_login" style="margin: 0;">注册</a>
                    </ul>
                    <div style="display:none">
                        <script src="<?php echo @JS_URL;?>
logging.js" type="text/javascript"></script>
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
                                                <script type="text/javascript">
                                                    simulateSelect('ls_fastloginfield')
                                                </script>
                                            </td>
                                            <td>
                                                <input type="text" name="username" id="ls_username" autocomplete="off" class="px vm" tabindex="901" />
                                            </td>
                                            <td class="fastlg_l">
                                                <label for="ls_cookietime">
                                                    <input type="checkbox" name="cookietime" id="ls_cookietime" class="pc" value="2592000" tabindex="903" />自动登录</label>
                                            </td>
                                            <td>&nbsp;<a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')">找回密码</a></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="ls_password" class="z psw_w">密码</label>
                                            </td>
                                            <td>
                                                <input type="password" name="password" id="ls_password" class="px vm" autocomplete="off" tabindex="902" />
                                            </td>
                                            <td class="fastlg_l">
                                                <button type="submit" class="pn vm" tabindex="904" style="width: 75px;"><em>登录</em></button>
                                            </td>
                                            <td>&nbsp;<a href="member.php?mod=register" class="xi2 xw1">立即注册</a></td>
                                        </tr>
                                    </table>
                                    <input type="hidden" name="quickforward" value="yes" />
                                    <input type="hidden" name="handlekey" value="ls" />
                                </div>

                                <div class="fastlg_fm y" style="margin-right: 10px; padding-right: 10px">
                                    <p>
                                        <a href="http://www.petly.net/connect.php?mod=login&op=init&referer=forum.php%3Fgid%3D1&statfrom=login_simple"><img src="<?php echo @PIC_URL;?>
qq_login.gif" class="vm" alt="QQ登录" /></a>
                                    </p>
                                    <p class="hm xg1" style="padding-top: 2px;">只需一步，快速开始</p>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
                <div id="scbar" class="cl">
                    <form id="scbar_form" method="post" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="search.php?searchsubmit=yes" target="_blank">
                        <input type="hidden" name="mod" id="scbar_mod" value="search" />
                        <input type="hidden" name="formhash" value="5332ba26" />
                        <input type="hidden" name="srchtype" value="title" />
                        <input type="hidden" name="srhfid" value="1" />
                        <input type="hidden" name="srhlocality" value="forum::index" />
                        <table cellspacing="0" cellpadding="0">
                            <tr>
                                <td class="scbar_txt_td">
                                    <input type="text" name="srchtxt" id="scbar_txt" value="请输入搜索内容" autocomplete="off" speech />
                                </td>
                                <td class="scbar_type_td"><a href="javascript:;" id="scbar_type" class="xg1" onclick="showMenu(this.id)" hidefocus="true">搜索</a></td>
                                <td class="scbar_btn_td">
                                    <button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true"><strong class="xi2">搜索</strong></button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <script type="text/javascript">
                    initSearchmenu('scbar', '');
                </script>
                <script type="text/javascript">
                    jQuery(function() {
                        jQuery("#scbar #scbar_txt").focus(function() {
                            jQuery("#scbar").addClass("bgchange");
                        }).blur(function() {
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

                <a href="javascript:;" onclick="setHomepage('http://www.petly.net/');">设为首页</a>

                <a href="http://www.petly.net/" onclick="addFavorite(this.href, '宠物领养网 Petly.net');return false;">收藏本站</a>




            </div>
            <div class="y"> <a id="switchblind" href="javascript:;" onClick="toggleBlind(this)" title="开启辅助访问" class="switchblind">开启辅助访问</a>



                <a href="javascript:;" id="switchwidth" onClick="widthauto(this)" title="切换到窄版" class="switchwidth">切换到窄版</a>



            </div>
        </div>
    </div>



    <div id="qmenu_menu" class="p_pop blk" style="display: none;">
        <div class="ptm pbw hm">
            请 <a href="javascript:;" class="xi2" onclick="lsSubmit()"><strong>登录</strong></a> 后使用快捷导航
            <br />没有帐号？<a href="member.php?mod=register" class="xi2 xw1">立即注册</a>
        </div>
        <div id="fjump_menu" class="btda"></div>
    </div>



    <!-- 二级导航 -->
    <div class="sub_nav">
        <div class="p_pop h_pop" id="mn_userapp_menu" style="display: none"></div>
    </div>


    <!-- 搜索筛选 -->
    <ul id="scbar_type_menu" class="p_pop" style="display: none;">
        <li><a href="javascript:;" rel="curforum" fid="1">本版</a></li>
        <li><a href="javascript:;" rel="article">文章</a></li>
        <li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
        <li><a href="javascript:;" rel="user">用户</a></li>
    </ul>
    <script type="text/javascript">
        initSearchmenu('scbar', '');
    </script>


    <!-- 用户菜单 -->
    <ul class="sub_menu" id="m_menu" style="display: none;">








        <li><a href="home.php?mod=magic" style="background-image:url(<?php echo @IMG_URL;?>
magic_b.png) !important">道具</a></li>


        <li><a href="home.php?mod=medal" style="background-image:url(<?php echo @IMG_URL;?>
medal_b.png) !important">勋章</a></li>


        <li><a href="home.php?mod=task" style="background-image:url(<?php echo @IMG_URL;?>
task_b.png) !important">任务</a></li>


        <li><a href="portal.php" style="background-image:url(<?php echo @IMG_URL;?>
portal_b.png) !important">门户</a></li>


        <li><a href="home.php?mod=spacecp">设置</a></li>



        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=5332ba26">退出</a></li>
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

            <script src="template/time_9th_keji/src/<?php echo @JS_URL;?>
jquery.superslide.js" type="text/javascript" type="text/javascript"></script>
            <div id="pt" class="bm cl">
                <div class="z"> <a href="./" class="nvhm" title="首页">宠物领养网 Petly.net</a><em>&raquo;</em><a href="forum.php">领养</a><em>&rsaquo;</em> 宠物领养 </div>
                <div class="z"></div>
            </div>


            <style id="diy_style" type="text/css"></style>

        </div>
        <div class="cl" style="width: 100%; margin: 0 auto;">
            <div class="wp cl" style="width: 1140px;">

                <!--[diy=diy_chart]-->
                <div id="diy_chart" class="area"></div>
                <!--[/diy]-->
                <div class="mn cl" style="float: left; width: 817px;">
                    <div class="top_box cl" style="width: 775px; padding: 20px; margin: 0 0 20px 0; border: 1px solid #E6E6E6; box-shadow: 0 0 4px #ECECEC; background: #FFFFFF;">
                        <div class="top_box_l cl" style="float: left; width: 450px; overflow: hidden;">
                            <!--[diy=diy_top]-->
                            <div id="diy_top" class="area">
                                <div id="frameXYVAYg" class="frame move-span cl frame-1">
                                    <div id="frameXYVAYg_left" class="column frame-1-c">
                                        <div id="frameXYVAYg_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_23" class="block move-span">
                                            <div id="portal_block_23_content" class="dxb_bc">
                                                <div class="focus_box2 cl">
                                                    <div class="bd2">
                                                        <div class="tempWrap" style="overflow:hidden; position:relative; width: 450px;">
                                                            <ul>
                                                                <li style="float: left; width: 450px;">
                                                                    <a href="thread-9466-1-1.html" target="_blank" title="厦门宠物招领"><img src="<?php echo @PIC_URL;?>
7a8f31bc90100636347fbe5014ec3f34.jpg" alt="厦门宠物招领" width="450" height="285"></a>
                                                                    <div class="t_box blackbg">
                                                                        <h2><a href="thread-9466-1-1.html" target="_blank" title="厦门宠物招领">厦门宠物招领...</a></h2>
                                                                    </div>
                                                                </li>
                                                                <li style="float: left; width: 450px;">
                                                                    <a href="thread-9464-1-1.html" target="_blank" title="喜欢猫猫会全心全意照顾它，希望能领养一只"><img src="<?php echo @PIC_URL;?>
f87f7d14e207787bb65ce0343a570c16.jpg" alt="喜欢猫猫会全心全意照顾它，希望能领养一只" width="450" height="285"></a>
                                                                    <div class="t_box blackbg">
                                                                        <h2><a href="thread-9464-1-1.html" target="_blank" title="喜欢猫猫会全心全意照顾它，希望能领养一只">喜欢猫猫会全心全意照顾它，希望能领...</a></h2>
                                                                    </div>
                                                                </li>
                                                                <li style="float: left; width: 450px;">
                                                                    <a href="thread-9455-1-1.html" target="_blank" title="北京 天通苑 燕丹村 两只猫求领养"><img src="<?php echo @PIC_URL;?>
538d76b7e6f49a332a55d190c8e9e559.jpg" alt="北京 天通苑 燕丹村 两只猫求领养" width="450" height="285"></a>
                                                                    <div class="t_box blackbg">
                                                                        <h2><a href="thread-9455-1-1.html" target="_blank" title="北京 天通苑 燕丹村 两只猫求领养">北京 天通苑 燕丹村 两只猫求领养...</a></h2>
                                                                    </div>
                                                                </li>
                                                                <li style="float: left; width: 450px;">
                                                                    <a href="thread-9454-1-1.html" target="_blank" title="小土狗一只求领养"><img src="<?php echo @PIC_URL;?>
71ee17b2e95043becbd4a67332da9dba.jpg" alt="小土狗一只求领养" width="450" height="285"></a>
                                                                    <div class="t_box blackbg">
                                                                        <h2><a href="thread-9454-1-1.html" target="_blank" title="小土狗一只求领养">小土狗一只求领养...</a></h2>
                                                                    </div>
                                                                </li>
                                                                <li style="float: left; width: 450px;">
                                                                    <a href="thread-9446-1-1.html" target="_blank" title="主人，带我走吧"><img src="<?php echo @PIC_URL;?>
366351a88266a7d59d63784be85897cd.jpg" alt="主人，带我走吧" width="450" height="285"></a>
                                                                    <div class="t_box blackbg">
                                                                        <h2><a href="thread-9446-1-1.html" target="_blank" title="主人，带我走吧">主人，带我走吧...</a></h2>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="hd2">
                                                        <ul>
                                                            <li class="">1</li>
                                                            <li class="">2</li>
                                                            <li class="">3</li>
                                                            <li class="">4</li>
                                                            <li class="">5</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <script type="text/javascript">
                                                    jQuery(".focus_box2").slide({
                                                        mainCell: ".bd2 ul",
                                                        titCell: ".hd2 ul",
                                                        effect: "leftLoop",
                                                        easing: "easeOutQuint",
                                                        delayTime: 400,
                                                        autoPlay: true,
                                                        autoPage: true
                                                    });
                                                </script>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--[/diy]-->
                        </div>
                        <div class="top_box_r cl" style="float: right; width: 305px; overflow: hidden;">
                            <!--[diy=diy_top_r]-->
                            <div id="diy_top_r" class="area">
                                <div id="frameCfIWs2" class="frame move-span cl frame-1">
                                    <div id="frameCfIWs2_left" class="column frame-1-c">
                                        <div id="frameCfIWs2_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_25" class="block move-span">
                                            <div id="portal_block_25_content" class="dxb_bc">
                                                <div class="headlines cl">
                                                    <ul>
                                                        <li class="cl">
                                                            <h3><a href="thread-7681-1-1.html" title="2岁母猫求主人,已绝育" target="_blank">2岁母猫求主人,已绝育</a></h3>
                                                            <p>我们家猫咪是成年猫咪，希望找个爱猫朋友领养喵喵[握手]（猫咪资料：成年母猫猫，大概... <a href="thread-7681-1-1.html">[查看]</a></p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="framerN1DpD" class="frame move-span cl frame-1">
                                    <div id="framerN1DpD_left" class="column frame-1-c">
                                        <div id="framerN1DpD_left_temp" class="move-span temp"></div>
                                        <div id="portal_block_26" class="block move-span">
                                            <div id="portal_block_26_content" class="dxb_bc">
                                                <div class=hot-news cl ">
<ul><li><a href="thread-9476-1-1.html " title="家里有只猫猫没人带，求领养 " target="_blank ">家里有只猫猫没人带，求领养</a></li><li><a href="thread-9473-1-1.html " title="想领养一只猫 " target="_blank ">想领养一只猫</a></li><li><a href="thread-9471-1-1.html " title="2个月大的小幼犬求爱心主人领养 " target="_blank ">2个月大的小幼犬求爱心主人领养</a></li><li><a href="thread-9470-1-1.html " title="求狗狗 " target="_blank ">求狗狗</a></li><li><a href="thread-9468-1-1.html " title="2岁半萨摩寻好人家 " target="_blank ">2岁半萨摩寻好人家</a></li></ul>
</div></div></div></div></div></div><!--[/diy]--></div>
    </div>
    <div class="Framebox cl " style="width: 775px; border: 1px solid #E6E6E6; box-shadow: 0 0 4px #ECECEC; background: #FFFFFF; ">
     
     
     
    
        <div class="fl bm "> 
       
       
       
            <div class="bm bmw flg cl ">
        <div class="bm_h cl "> <span class="o cl "> <img id="category_1_img " src="<?php echo @PIC_URL;?>
collapsed_no.gif " title="收起/展开 " alt="收起/展开 " onclick="toggle_collapse( 'category_1'); " /> </span> 
           
                    <h2><a href="forum.php?gid=1 " style=" ">宠物领养</a></h2>
        </div>
        <div id="category_1 " class="bm_c " style=" ">
          <table cellspacing="0 " cellpadding="0 " class="fl_tb ">
            <tr> 
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g " style="width: 60px; "> 
                   
                  <a href="forum-2-1.html "><img src="<?php echo @PIC_URL;?>
common_2_icon.png " align="left " alt=" " /></a> 
                   
                </div>
                <dl style="margin-left: 60px; ">
                <dt><a href="forum-2-1.html ">北京宠物领养</a></dt>
                <dd>                  <p class="xg2 ">北京免费领养宠物的网站</p>
                  </dd>
                
                                <dd><em>主题: 4344</em>, <em>帖数: 4504</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9477&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-27 17:23 ">昨天&nbsp;17:23</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g " style="width: 60px; "> 
                   
                  <a href="forum-36-1.html "><img src="<?php echo @PIC_URL;?>
common_36_icon.png " align="left " alt=" " /></a> 
                   
                </div>
                <dl style="margin-left: 60px; ">
                <dt><a href="forum-36-1.html ">上海宠物领养</a></dt>
                <dd>                  <p class="xg2 ">上海宠物领养救助中心</p>
                  </dd>
                
                                <dd><em>主题: 1439</em>, <em>帖数: 1507</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9476&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-27 15:09 ">昨天&nbsp;15:09</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g " style="width: 60px; "> 
                   
                  <a href="forum-38-1.html "><img src="<?php echo @PIC_URL;?>
common_38_icon.png " align="left " alt=" " /></a> 
                   
                </div>
                <dl style="margin-left: 60px; ">
                <dt><a href="forum-38-1.html ">广东宠物领养</a></dt>
                <dd>                  <p class="xg2 ">广州宠物救助领养网</p>
                  </dd>
                
                                <dd><em>主题: 900</em>, <em>帖数: 987</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9457&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 21:31 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g " style="width: 60px; "> 
                   
                  <a href="forum-47-1.html "><img src="<?php echo @PIC_URL;?>
common_47_icon.jpg " align="left " alt=" " /></a> 
                   
                </div>
                <dl style="margin-left: 60px; ">
                <dt><a href="forum-47-1.html ">天津宠物领养</a></dt>
                <dd>                  <p class="xg2 ">天津宠物领养救助中心</p>
                  </dd>
                
                                <dd><em>主题: 390</em>, <em>帖数: 413</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9467&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-26 10:50 ">前天&nbsp;10:50</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-48-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="重庆宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-48-1.html ">重庆宠物领养</a></dt>
                <dd>                  <p class="xg2 ">重庆免费领养宠物</p>
                  </dd>
                
                                <dd><em>主题: 84</em>, <em>帖数: 93</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9463&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-25 14:28 ">3&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-49-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="浙江宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-49-1.html ">浙江宠物领养</a></dt>
                <dd>                  <p class="xg2 ">浙江免费宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 180</em>, <em>帖数: 264</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9395&amp;goto=lastpost#lastpost ">最后发表: 2016-1-16 21:51</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-46-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="江苏宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-46-1.html ">江苏宠物领养</a></dt>
                <dd>                  <p class="xg2 ">江苏宠物免费领养</p>
                  </dd>
                
                                <dd><em>主题: 220</em>, <em>帖数: 251</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9357&amp;goto=lastpost#lastpost ">最后发表: 2016-1-11 14:03</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-50-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="河北宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-50-1.html ">河北宠物领养</a></dt>
                <dd>                  <p class="xg2 ">石家庄宠物领养中心</p>
                  </dd>
                
                                <dd><em>主题: 136</em>, <em>帖数: 164</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9433&amp;goto=lastpost#lastpost ">最后发表: 2016-1-20 17:46</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-51-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="河南宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-51-1.html ">河南宠物领养</a></dt>
                <dd>                  <p class="xg2 ">河南宠物领养狗狗</p>
                  </dd>
                
                                <dd><em>主题: 86</em>, <em>帖数: 100</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9427&amp;goto=lastpost#lastpost ">最后发表: 2016-1-20 00:53</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-44-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="山东宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-44-1.html ">山东宠物领养</a></dt>
                <dd>                  <p class="xg2 ">山东免费宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 134</em>, <em>帖数: 179</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9461&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 22:45 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-43-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="山西宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-43-1.html ">山西宠物领养</a></dt>
                <dd>                  <p class="xg2 ">山西宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 50</em>, <em>帖数: 57</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9310&amp;goto=lastpost#lastpost ">最后发表: 2016-1-11 07:34</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-52-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="湖南宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-52-1.html ">湖南宠物领养</a></dt>
                <dd>                  <p class="xg2 ">湖南免费领养宠物</p>
                  </dd>
                
                                <dd><em>主题: 67</em>, <em>帖数: 84</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=6595&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-23 15:42 ">5&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-53-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="湖北宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-53-1.html ">湖北宠物领养</a></dt>
                <dd>                  <p class="xg2 ">湖北宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 155</em>, <em>帖数: 172</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9473&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-27 08:59 ">昨天&nbsp;08:59</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-54-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="辽宁宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-54-1.html ">辽宁宠物领养</a></dt>
                <dd>                  <p class="xg2 ">辽宁免费宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 184</em>, <em>帖数: 194</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9416&amp;goto=lastpost#lastpost ">最后发表: 2016-1-18 20:05</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-55-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="吉林宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-55-1.html ">吉林宠物领养</a></dt>
                <dd>                  <p class="xg2 ">吉林免费宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 63</em>, <em>帖数: 70</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9168&amp;goto=lastpost#lastpost ">最后发表: 2015-12-12 14:15</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-45-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="黑龙江宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-45-1.html ">黑龙江宠物领养</a></dt>
                <dd>                  <p class="xg2 ">黑龙江宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 70</em>, <em>帖数: 89</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9334&amp;goto=lastpost#lastpost ">最后发表: 2016-1-9 10:26</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-40-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="内蒙古宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-40-1.html ">内蒙古宠物领养</a></dt>
                <dd>                  <p class="xg2 ">内蒙古免费宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 35</em>, <em>帖数: 45</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9452&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 09:02 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-41-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="安徽宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-41-1.html ">安徽宠物领养</a></dt>
                <dd>                  <p class="xg2 ">安徽免费领养宠物</p>
                  </dd>
                
                                <dd><em>主题: 33</em>, <em>帖数: 43</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9464&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-25 15:35 ">3&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-42-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="福建宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-42-1.html ">福建宠物领养</a></dt>
                <dd>                  <p class="xg2 ">福建宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 89</em>, <em>帖数: 137</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9466&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-26 14:53 ">前天&nbsp;14:53</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-56-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="四川宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-56-1.html ">四川宠物领养</a></dt>
                <dd>                  <p class="xg2 ">四川宠物免费领养</p>
                  </dd>
                
                                <dd><em>主题: 190</em>, <em>帖数: 250</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9462&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 23:13 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-67-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="江西宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-67-1.html ">江西宠物领养</a></dt>
                <dd>                  <p class="xg2 ">江西宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 44</em>, <em>帖数: 76</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9456&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 14:59 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-57-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="云南宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-57-1.html ">云南宠物领养</a></dt>
                <dd>                  <p class="xg2 ">云南免费领养宠物</p>
                  </dd>
                
                                <dd><em>主题: 54</em>, <em>帖数: 59</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9377&amp;goto=lastpost#lastpost ">最后发表: 2016-1-13 18:52</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-58-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="广西宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-58-1.html ">广西宠物领养</a></dt>
                <dd>                  <p class="xg2 ">广西宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 40</em>, <em>帖数: 55</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9437&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-21 14:08 ">7&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-59-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="贵州宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-59-1.html ">贵州宠物领养</a></dt>
                <dd>                  <p class="xg2 ">贵州宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 41</em>, <em>帖数: 53</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9163&amp;goto=lastpost#lastpost ">最后发表: 2015-12-10 12:32</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-60-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="陕西宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-60-1.html ">陕西宠物领养</a></dt>
                <dd>                  <p class="xg2 ">陕西宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 104</em>, <em>帖数: 135</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9454&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-24 12:44 ">4&nbsp;天前</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-61-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="宁夏宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-61-1.html ">宁夏宠物领养</a></dt>
                <dd>                  <p class="xg2 ">宁夏宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 7</em>, <em>帖数: 7</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9471&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-26 16:50 ">前天&nbsp;16:50</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-62-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="青海宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-62-1.html ">青海宠物领养</a></dt>
                <dd>                  <p class="xg2 ">青海宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 3</em>, <em>帖数: 3</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=7445&amp;goto=lastpost#lastpost ">最后发表: 2010-12-21 22:09</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-63-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="甘肃宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-63-1.html ">甘肃宠物领养</a></dt>
                <dd>                  <p class="xg2 ">甘肃宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 21</em>, <em>帖数: 25</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9470&amp;goto=lastpost#lastpost ">最后发表: <span title="2016-1-26 15:53 ">前天&nbsp;15:53</span></a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-64-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="新疆宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-64-1.html ">新疆宠物领养</a></dt>
                <dd>                  <p class="xg2 ">新疆宠物领养</p>
                  </dd>
                
                                <dd><em>主题: 16</em>, <em>帖数: 16</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=8180&amp;goto=lastpost#lastpost ">最后发表: 2015-8-21 06:20</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-65-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="西藏宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-65-1.html ">西藏宠物领养</a></dt>
                <dd>                  <p class="xg2 ">西藏宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 1</em>, <em>帖数: 2</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=7966&amp;goto=lastpost#lastpost ">最后发表: 2015-8-5 17:16</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
               
            </tr>
                        <tr class="fl_row "> 
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-68-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="海南宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-68-1.html ">海南宠物领养</a></dt>
                <dd>                  <p class="xg2 ">海南宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 20</em>, <em>帖数: 23</em></dd>
                                
                <dd> 
                   
                   
                   
                  <a href="forum.php?mod=redirect&amp;tid=9370&amp;goto=lastpost#lastpost ">最后发表: 2016-1-12 18:43</a> 
                   
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-66-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="港澳宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-66-1.html ">港澳宠物领养</a></dt>
                <dd>                  <p class="xg2 ">港澳宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 0</em>, <em>帖数: 0</em></dd>
                                
                <dd> 
                   
                   
                  从未 
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               
               
               
                            <td class="fl_g " width="32.9% "><div class="fl_icn_g "> 
                   
                  <a href="forum-69-1.html "><img src="<?php echo @PIC_URL;?>
forum.gif " alt="台湾宠物领养 " /></a> 
                   
                </div>
                <dl>
                <dt><a href="forum-69-1.html ">台湾宠物领养</a></dt>
                <dd>                  <p class="xg2 ">台湾宠物领养网</p>
                  </dd>
                
                                <dd><em>主题: 0</em>, <em>帖数: 0</em></dd>
                                
                <dd> 
                   
                   
                  从未 
                   
                   
                </dd>
                
                                
                </dl></td>
               
               
               </tr>
          </table>
        </div>
      </div>
       
       
       
      
    </div>
    
        <div class="wp mtn "> 
      <!--[diy=diy3]--><div id="diy3 " class="area "></div><!--[/diy]--> 
    </div>
    
     
    
     
    
     
  </div>
  </div>
  
  <div class="sd cl " style="float: right; width: 260px; padding: 0 20px 25px 20px; border: 1px solid #E6E6E6; box-shadow: 0 0 4px #ECECEC; background: #FFFFFF; "> 
     <!--[diy=top]--><div id="top " class="area "><div id="frameP33XxX " class="frame move-span cl frame-1 "><div id="frameP33XxX_left " class="column frame-1-c "><div id="frameP33XxX_left_temp " class="move-span temp "></div><div id="portal_block_19 " class="block move-span "><div id="portal_block_19_content " class="dxb_bc "><div class="portal_block_summary "><div class="ad-right cl " style="padding: 20px 0; ">
<a href="http://www.fang.eu " target="_blank "><img src="<?php echo @PIC_URL;?>
a3.jpg " width="260 " /></a>
</div></div></div></div></div></div></div><!--[/diy]-->
     <div class="tit01 cl " style="margin: 5px 0 0 0; "><h2>最新主题</h2></div>
     <!--[diy=sbody]--><div id="sbody " class="area "><div id="framew6n67f " class="frame move-span cl frame-1 "><div id="framew6n67f_left " class="column frame-1-c "><div id="framew6n67f_left_temp " class="move-span temp "></div><div id="portal_block_24 " class="block move-span "><div id="portal_block_24_content " class="dxb_bc "><ul class="recitems_recread cl "><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9477 " title="forum.php?mod=viewthread&tid=9477 " target="_blank ">2岁哈士奇免费领养</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9476 " title="forum.php?mod=viewthread&tid=9476 " target="_blank ">家里有只猫猫没人带，求领养</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9473 " title="forum.php?mod=viewthread&tid=9473 " target="_blank ">想领养一只猫</a></li></ul></div></div></div></div></div><!--[/diy]--> 
     <!--[diy=diy2]--><div id="diy2 " class="area "><div id="frameoYSfAs " class="frame move-span cl frame-1 "><div id="frameoYSfAs_left " class="column frame-1-c "><div id="frameoYSfAs_left_temp " class="move-span temp "></div><div id="portal_block_22 " class="block move-span "><div id="portal_block_22_content " class="dxb_bc "><div class="portal_block_summary "><div class="forum_hd " style="margin: 15px 0 20px 0; ">
   <h2>推荐阅读</h2>
</div></div></div></div><div id="framejYOH6n " class="frame move-span cl frame-1 "><div id="framejYOH6n_left " class="column frame-1-c "><div id="framejYOH6n_left_temp " class="move-span temp "></div><div id="portal_block_20 " class="block move-span "><div id="portal_block_20_content " class="dxb_bc "><ul class="toprec_recread cl "><li>
  <a href="thread-9454-1-1.html " target="_blank "><img src="<?php echo @PIC_URL;?>
83db2657ba3cecb38ef537de4ca72f22.jpg " cc="小土狗一只求领养 " width="120 " height="90 " /></a>
  <h3><a href="thread-9454-1-1.html " target="_blank ">小土狗一只求领养</a></h3>
   </li><li>
  <a href="thread-9446-1-1.html " target="_blank "><img src="<?php echo @PIC_URL;?>
45d8bd10585eb0d6dc8fb75ba08e116c.jpg " cc="主人，带我走吧 " width="120 " height="90 " /></a>
  <h3><a href="thread-9446-1-1.html " target="_blank ">主人，带我走吧</a></h3>
   </li></ul></div></div></div></div></div></div><div id="frameGSuvN7 " class="frame move-span cl frame-1 "><div id="frameGSuvN7_left " class="column frame-1-c "><div id="frameGSuvN7_left_temp " class="move-span temp "></div><div id="portal_block_21 " class="block move-span "><div id="portal_block_21_content " class="dxb_bc "><ul class="recitems_recread cl "><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9468 " title="forum.php?mod=viewthread&tid=9468 " target="_blank ">2岁半萨摩寻好人家</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9467 " title="forum.php?mod=viewthread&tid=9467 " target="_blank ">9个月小型犬。求领养</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9466 " title="forum.php?mod=viewthread&tid=9466 " target="_blank ">厦门宠物招领</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9464 " title="forum.php?mod=viewthread&tid=9464 " target="_blank ">喜欢猫猫会全心全意照顾它，希望能领养一只</a></li><li class="thread "><a class="cg " href="forum.php?mod=viewthread&tid=9463 " title="forum.php?mod=viewthread&tid=9463 " target="_blank ">我想领一只体积小的狗狗，吉娃娃，博美，泰</a></li></ul></div></div><div id="portal_block_88 " class="block move-span "><div id="portal_block_88_content " class="dxb_bc "><div class="portal_block_summary "><div class="ad-right cl " style="padding: 20px 0; ">
<script type="text/javascript ">
    /*250*250 漂浮 2015-08-20*/
    var cpro_id = "u2273532 ";
</script>
<script src="<?php echo @JS_URL;?>
c.js " type="text/javascript "></script>
</div></div></div></div></div></div></div><!--[/diy]-->
  </div>
</div>
</div>
 
<script>fixed_top_nv();</script> 
<script type="text/javascript ">jQuery(".slideBox ").slide( { mainCell:".bd ul ",effect:"left ",easing:"easeOutQuart ",delayTime:500,autoPlay:true} );jQuery(".hbody ").slide({ titCell:".hd li ", mainCell:".bd ",delayTime:0 });</script> </div>
 
     




<div id="footer " class="footer cl ">
  <div id="ft " class="wp cl ">
      <div class="footer-left cl ">&copy; 2001-2015 <a href="http://www.petly.com " target="_blank ">宠物领养网</a> <a href="http://www.petly.net " target="_blank ">PETLY</a>  
         备案：<a href="http://www.miitbeian.gov.cn/ " target="_blank ">冀ICP备11010768号-4</a> 
         
        <script>
var _hmt = _hmt || [];
(function() {
  var hm = document.createElement("script ");
  hm.src = "//hm.baidu.com/hm.js?a3e7dea0b0240cb3036db165aa11281b ";
  var s = document.getElementsByTagName("script ")[0]; 
  s.parentNode.insertBefore(hm, s);
})();
</script>
</div>
        <div class="rgt ">
           <a href="/aboutus/index.html " target="_blank " title=" ">关于我们</a><span></span>
           <a href="/aboutus/remind.html " target="_blank " title=" ">领养提示</a><span></span>
           <a href="/aboutus/help.html " target="_blank " title=" ">使用帮助</a><span></span>
           <a href="/aboutus/cooperation.html " target="_blank " title=" ">商务合作</a><span></span>
           <a href="/aboutus/contact.html " target="_blank " title=" ">联系我们</a>
        </div>
  </div> 

<script src="<?php echo @JS_URL;?>
home_1.php " type="text/javascript "></script> 

<div id="share ">
<a id="totop " title=" ">返回顶部</a>
</div>
 
      <div id="discuz_tips " style="display:none; "></div>
      <script type="text/javascript ">
        var tipsinfo = '46826411|X3.2|0.6||0||0|7|1453914885|46edca0fc5b85a920b9c3cd5e4ce8731|2';
      </script>
      <script src="<?php echo @JS_URL;?>
discuz_tips.js " type="text/javascript " charset="UTF-8 "></script></div>
</div>
</body></html><?php }} ?>