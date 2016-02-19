<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 10:15:51
         compiled from "F:/cwyuan/cwy/Home/View\News\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2963656aacb577c3965-42481287%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f14cb3599718ea209e49b7ffc12efbecb5f83d88' => 
    array (
      0 => 'F:/cwyuan/cwy/Home/View\\News\\showlist.html',
      1 => 1454033709,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2963656aacb577c3965-42481287',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'smraty' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aacb583cb3d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aacb583cb3d')) {function content_56aacb583cb3d($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>宠物新闻 狗狗新闻 宠物世界 </title>

    <meta name="keywords" content="新闻" />
    <meta name="description" content="新闻 " />
    <meta name="generator" content="Discuz! X3.2" />
    <meta name="author" content="Discuz! Team and Comsenz UI Team" />
    <meta name="copyright" content="2001-2013 Comsenz Inc." />
    <meta name="MSSmartTagsPreventParsing" content="True" />
    <meta http-equiv="MSThemeCompatible" content="Yes" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_portal_list.css" />
    <script src="<?php echo @JS_URL;?>
jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo @JS_URL;?>
jquery.SuperSlide.js" type="text/javascript"></script>
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
            REPORTURL = 'aHR0cDovL3d3dy5wZXRseS5uZXQvbmV3cy9pbmRleC5waHA=',
            SITEURL = 'http://www.petly.net/',
            JSPATH = 'static/js/',
            CSSPATH = 'data/cache/style_',
            DYNAMICURL = '';
    </script>
    <script src="<?php echo @JS_URL;?>
common.js" type="text/javascript"></script>
    <meta name="application-name" content="宠物领养网 Petly.net" />
    <meta name="msapplication-tooltip" content="宠物领养网 Petly.net" />
    <meta name="msapplication-task" content="name=首页;action-uri=http://www.petly.net/portal.php;icon-uri=http://www.petly.net/static/image/common/portal.ico" />
    <meta name="msapplication-task" content="name=领养;action-uri=http://www.petly.net/forum.php;icon-uri=http://www.petly.net/static/image/common/bbs.ico" />
    <script src="<?php echo @JS_URL;?>
portal.js" type="text/javascript"></script>
</head>

<body id="nv_portal" class="pg_list pg_list_1" onkeydown="if(event.keyCode==27) return false;">
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


                        <li class="a" id="mn_P1"><a href="<?php echo @__MODULE__;?>
/News/showlist">新闻</a>
                        </li>


                        <li id="mn_forum"><a href="<?php echo @__MODULE__;?>
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
                        <a href="javascript:;" class="user_login" id="l" onMouseOver="showMenu({ 'ctrlid':'l','ctrlclass':'hover','duration':2 });" onClick="javascript:lsSubmit();">登录</a>
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
                                        <a href="http://www.petly.net/connect.php?mod=login&op=init&referer=index.php&statfrom=login_simple"><img src="<?php echo @PIC_URL;?>
qq_login_1.gif" class="vm" alt="QQ登录" /></a>
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
                        <input type="hidden" name="formhash" value="c6df663f" />
                        <input type="hidden" name="srchtype" value="title" />
                        <input type="hidden" name="srhfid" value="0" />
                        <input type="hidden" name="srhlocality" value="portal::list" />
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
        <li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=c6df663f">退出</a></li>
    </ul>
    <div class="wp" style="display:none;">
        <!-- 隐藏导航AD位置 -->


    </div>



    <div class="wrap_box cl">
        <div id="wp" class="wp time_wp cl">

            <link rel="stylesheet" type="text/css" href="template/petly/src/list.css" />
            <script src="<?php echo @JS_URL;?>
jquery.superslide.js" type="text/javascript"></script>
            <style id="diy_style" type="text/css"></style>
            <div class="wp">
                <!--[diy=diy1]-->
                <div id="diy1" class="area"></div>
                <!--[/diy]-->
            </div>
            <div class="tit_top cl">
                <h3>新闻</h3>
                <div class="cl" style="float: left; min-width: 200px; min-height: 30px;">
                    <!--[diy=diy_info]-->
                    <div id="diy_info" class="area">
                        <div id="frameuq3vkq" class="frame move-span cl frame-1">
                            <div id="frameuq3vkq_left" class="column frame-1-c">
                                <div id="frameuq3vkq_left_temp" class="move-span temp"></div>
                                <div id="portal_block_28" class="block move-span">
                                    <div id="portal_block_28_content" class="dxb_bc">
                                        <div class="portal_block_summary"><span class="album-subtitle">
   <span>揭密第一手新闻资料</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--[/diy]-->
                </div>
            </div>
            <div id="ct" class="ct2 wp inside_box cl">
                <div class="mn">

                    <!--[diy=listcontenttop]-->
                    <div id="listcontenttop" class="area"></div>
                    <!--[/diy]-->
                    <div class="bm">
                        <!-- 文章列表 begin -->
                        <div class="list_new Framebox cl">

                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3023-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
061014ht25onn01gzqmniw.jpg.thumb.jpg" alt="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3023-1.html" target="_blank"  style="">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷</a> </h2>
                                        <div class="meta"><span class="meta-date">2016-1-25 06:10</span>
                                        </div>
                                        <p>　自然社会中，弱肉强食、适者生存是自然规律，在人类社会中，这种现象更是屡见不鲜。下面这个小朋友与一只贪吃的狗狗同时面对一块饼干的诱惑时，会发生什么呢？你觉得谁会赢得这场饼干争夺战的胜利呢？一起来看一下 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3022-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
220944wf9y7wlwwwdx4467.jpg.thumb.jpg" alt="两只乌龟因严寒被冻水中 网友:它们还有救吗" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3022-1.html" target="_blank"  style="">两只乌龟因严寒被冻水中 网友:它们还有救吗</a> </h2>
                                        <div class="meta"><span class="meta-date">2016-1-24 22:09</span>
                                        </div>
                                        <p>今天，这两只小乌龟被冻在一块厚实的冰里的照片“广为流传”！好多人都在问，这两只乌龟还活着吗？救活了没有，还有人在责怪主人，怎么不把他们挪进空调房！好想知道着两只乌龟的现状…救活了吗？ ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3021-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
220859bfy3nmg39fmmlzs9.jpg.thumb.jpg" alt="台湾男子盗窃被判刑 家中小狗警局痴等" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3021-1.html" target="_blank"  style="">台湾男子盗窃被判刑 家中小狗警局痴等</a> </h2>
                                        <div class="meta"><span class="meta-date">2016-1-24 22:09</span>
                                        </div>
                                        <p>中国台湾网1月22日讯　据台湾中时电子报报道，淡水51岁陈姓通缉犯，19日在家中遭警方逮捕，不料爱犬“小黑”一路追赶，5天来痴痴在警局前守候，不肯离开。警方见它忠心、乖巧，不忍驱赶，希望爱狗人士愿暂代照料，等 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_body">
                                        <h2><a href="article-3020-1.html" target="_blank"  style="">英女子带爱犬过年男友被咬死</a> </h2>
                                        <div class="meta"><span class="meta-date">2016-1-5 05:09</span>
                                        </div>
                                        <p>英国元旦发生悲剧，一名女子的爱犬突然发狂咬死男友，而兽医事后把该条狗人道毁灭。希尔当天带着斗牛犬，到兰开夏郡普雷斯顿的男友家中欢度新年，想不到下午3时45分左右，斗牛犬突然噬咬22岁男友休伊森，令他身受重 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3019-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
094207y0wopztu05wsww5g.jpg.thumb.jpg" alt="和哈利波特的宠物一起喝咖啡" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3019-1.html" target="_blank"  style="">和哈利波特的宠物一起喝咖啡</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-30 09:44</span>
                                        </div>
                                        <p>猫头鹰在欧美和日本被当作”幸运鸟“，可是别说在家饲养了，平常连看到它都很难。于是一些猫头鹰咖啡馆就应运而生。它们提供和猫头鹰亲密接触和互动的空间，展示猫头鹰各种可爱的姿态。如今猫头鹰咖啡馆在日本的人气 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_body">
                                        <h2><a href="article-3018-1.html" target="_blank"  style="">小区周边多条宠物狗集体死掉 是中毒还是染病？</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-30 09:39</span>
                                        </div>
                                        <p>　　12月29日，家住青西新区的段先生打电话向记者反映，一周前自己养的两条宠物狗突然口吐粘液死掉，后来段先生打听到，自己所住小区以及附近也有几户人家养的宠物狗，也以相同的症状死掉，这让段先生和邻居很担心， ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3017-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
001822jmm6zv4iqmmrq8er.jpg.thumb.jpg" alt="盐城盗狗贼用针管毒死小狗 网友：一点人性都没有" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3017-1.html" target="_blank"  style="">盐城盗狗贼用针管毒死小狗 网友：一点人性都没有</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:18</span>
                                        </div>
                                        <p>沭阳网讯 【盐城盗狗贼用针管毒死小狗 网友：一点人性都没有】近日，盐城一道路旁躺着两条小狗，远看以为是在睡觉，走近一看发现两条狗已经死了，在狗旁边还发现了两只针管，看来是被毒死的。 据目击者反映，都不知 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3016-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
001417pcjcvdocju78o98p.png.thumb.jpg" alt="职业模特狗狗又出新片 COS&quot;英国女王&quot;发表演讲" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3016-1.html" target="_blank"  style="">职业模特狗狗又出新片 COS&quot;英国女王&quot;发表演讲</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:17</span>
                                        </div>
                                        <p>据英国《每日邮报》近日报道，作为一名经验丰富的职业模特，来自英国斯坦福德基尔市的小狗鲁伯特（Rupert）近日又拍摄了一组大片。照片中它戴上皇冠、假发和珍珠项链，模仿英国女王发表了传统的圣诞日演讲，表情惟妙 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3015-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
001237w78g03l4ln77kn5n.jpg.thumb.jpg" alt="猫咪被纸杯罩头难脱身 好心狗狗“拔杯相助”" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3015-1.html" target="_blank"  style="">猫咪被纸杯罩头难脱身 好心狗狗“拔杯相助”</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:12</span>
                                        </div>
                                        <p>中新网1月27日电 据外媒报道，在彷徨无助而又有点尴尬的情况下，如果有人伸出援手，确实是温暖人心的时刻。人类如此，就连一向被视为“不和”的猫狗，也有互助互爱的时候。　　网上近期热传一段狗狗“拔杯相助”救猫 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3014-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
001128eueo3ybb22n77c1q.jpg.thumb.jpg" alt="小狗为失明同伴当导盲犬 形影不离似&quot;双侠&quot;" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3014-1.html" target="_blank"  style="">小狗为失明同伴当导盲犬 形影不离似&quot;双侠&quot;</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:12</span>
                                        </div>
                                        <p>英国一只双目失明的狗狗艾莉通过气味寻找同伴弗兰克，在同伴带领下走路两只小狗感情要好，形影不离　　中新网12月28日电 据外媒27日报道，英国皇家防止动物虐待协会近日迎来了一对儿“黑白双侠”——四岁大的狗狗弗 ...</p>
                                    </div>
                                </div>
                            </div>




                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_body">
                                        <h2><a href="article-3013-1.html" target="_blank"  style="">猫咪狗狗感情好 分离10天再见面紧抱不放手</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:09</span>
                                        </div>
                                        <p>谁说猫咪与狗狗之间不能有好感情？　　据英国《每日邮报》报道，一只名叫Bow-Z的狗狗和一只名叫Jasper的猫咪从小玩到大，有一次分开了10天，彼此之间都非常想念对方，当Bow-Z一回家，Jasper就马上跑到它身边，紧紧抱 ...</p>
                                    </div>
                                </div>
                            </div>

                            <div class="news_list cl">
                                <div class="cl">
                                    <div class="new_pic">
                                        <div class="bubba">
                                            <a href="article-3011-1.html" target="_blank"><img src="<?php echo @PIC_URL;?>
000003jjzxgx0rxz4g7jr9.jpg.thumb.jpg" alt="训练警犬找A片 狗狗如何用嗅觉搜索黄碟" /></a>
                                        </div>
                                    </div>
                                    <div class="new_body">
                                        <h2><a href="article-3011-1.html" target="_blank"  style="">训练警犬找A片 狗狗如何用嗅觉搜索黄碟</a> </h2>
                                        <div class="meta"><span class="meta-date">2015-12-29 00:00</span>
                                        </div>
                                        <p>　据台湾ettoday网站8月28日报道，这组专门嗅查电子装置和出版品的警犬队，成员仅只有5只，其中阿熊（Bear）就是其中之一。它们的工作和一般警犬所做的有很大的不同，大多数的警犬被训练得做巡逻、缉毒、搜救、侦查 ...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 文章列表 end -->
                        <!--[diy=listloopbottom]-->
                        <div id="listloopbottom" class="area"></div>
                        <!--[/diy]-->
                    </div>

                    <div class="pgs cl">
                        <div class="pg"><strong>1</strong><a href="http://www.petly.net/news/index.php?page=2">2</a><a href="http://www.petly.net/news/index.php?page=3">3</a><a href="http://www.petly.net/news/index.php?page=4">4</a><a href="http://www.petly.net/news/index.php?page=5">5</a><a href="http://www.petly.net/news/index.php?page=6">6</a><a href="http://www.petly.net/news/index.php?page=7">7</a><a href="http://www.petly.net/news/index.php?page=8">8</a><a href="http://www.petly.net/news/index.php?page=9">9</a><a href="http://www.petly.net/news/index.php?page=10">10</a><a href="http://www.petly.net/news/index.php?page=90" class="last">... 90</a>
                            <label>
                                <input type="text" name="custompage" class="px" size="2" title="输入页码，按回车快速跳转" value="1" onkeydown="if(event.keyCode==13) { window.location='http://www.petly.net/news/index.php?page='+this.value;; doane(event); }" /><span title="共 90 页"> / 90 页</span></label><a href="http://www.petly.net/news/index.php?page=2" class="nxt">下一页</a></div>
                    </div>


                    <!--[diy=diycontentbottom]-->
                    <div id="diycontentbottom" class="area"></div>
                    <!--[/diy]-->

                </div>
                <div class="sd pph">
                    <div class="drag">
                        <!--[diy=diyrighttop]-->
                        <div id="diyrighttop" class="area"></div>
                        <!--[/diy]-->
                    </div>

                    <!-- 分类 -->
                    <div class="list_box cl" style="margin: 0;">
                        <div class="tit01 cl" style="margin: 11px 0 20px 0;">
                            <h2>相关分类</h2>
                        </div>
                        <div class="portal_sort Framebox2 cl" style="margin: 0 0 15px 0;">
                            <ul>
                                <li><a href="http://www.petly.net/news/">新闻</a></li>
                                <li><a href="http://www.petly.net/know/">知识</a></li>
                                <li><a href="http://www.petly.net/video/">视频</a></li>
                                <li><a href="http://www.petly.net/baike/">百科</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- 推荐阅读 -->
                    <div class="sbody cl" style="margin: 10px 0 0 0;">
                        <!--[diy=sbody]-->
                        <div id="sbody" class="area">
                            <div id="framelr2iRR" class="frame move-span cl frame-1">
                                <div id="framelr2iRR_left" class="column frame-1-c">
                                    <div id="framelr2iRR_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_27" class="block move-span">
                                        <div id="portal_block_27_content" class="dxb_bc">
                                            <div class="tit01 cl">
                                                <h2>推荐阅读</h2>
                                            </div>
                                            <div class="bd Framebox2 cl">
                                                <ul>
                                                    <li>
                                                        <h3><a href="article-3023-1.html"  target="_blank" title="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷">当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时</a></h3>
                                                        <div class="pic">
                                                            <a href="article-3023-1.html" target="_blank" title="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷"><img src="<?php echo @PIC_URL;?>
061014ht25onn01gzqmniw.jpg" width="90" height="90" alt="当贪吃狗狗和贪吃小朋友拼命争夺一块饼干时，结果已笑喷"></a>
                                                        </div>
                                                        <p>　自然社会中，弱肉强食、适者生存是自然规律，在人类社会中，这种现象更是屡见不鲜。下面这个小...</p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="frameCm2bTY" class="frame move-span cl frame-1">
                                <div id="frameCm2bTY_left" class="column frame-1-c">
                                    <div id="frameCm2bTY_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_31" class="block move-span">
                                        <div id="portal_block_31_content" class="dxb_bc">
                                            <div class="portal_block_summary">
                                                <div class="tit01 cl" style="margin: 0;">
                                                    <h2>最新主题</h2>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="framepRwkkW" class="frame move-span cl frame-1">
                                <div id="framepRwkkW_left" class="column frame-1-c">
                                    <div id="framepRwkkW_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_30" class="block move-span">
                                        <div id="portal_block_30_content" class="dxb_bc">
                                            <ul class="recitems_recread cl">
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9473" title="forum.php?mod=viewthread&tid=9473" target="_blank">想领养一只猫</a></li>
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9471" title="forum.php?mod=viewthread&tid=9471" target="_blank">2个月大的小幼犬求爱心主人领养</a></li>
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9470" title="forum.php?mod=viewthread&tid=9470" target="_blank">求狗狗</a></li>
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9466" title="forum.php?mod=viewthread&tid=9466" target="_blank">厦门宠物招领</a></li>
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9468" title="forum.php?mod=viewthread&tid=9468" target="_blank">2岁半萨摩寻好人家</a></li>
                                                <li class="thread"><a class="cg" href="forum.php?mod=viewthread&tid=9467" title="forum.php?mod=viewthread&tid=9467" target="_blank">9个月小型犬。求领养</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="framedrC8Q8" class="frame move-span cl frame-1">
                                <div id="framedrC8Q8_left" class="column frame-1-c">
                                    <div id="framedrC8Q8_left_temp" class="move-span temp"></div>
                                    <div id="portal_block_100" class="block move-span">
                                        <div id="portal_block_100_content" class="dxb_bc">
                                            <div class="portal_block_summary">
                                                <div class="ad-right cl" style="padding: 20px 0;">
                                                    <a href="http://www.fang.eu" target="_blank"><img src="<?php echo @IMG_URL;?>
a3.jpg" width="260" /></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="portal_block_32" class="block move-span">
                                        <div id="portal_block_32_content" class="dxb_bc">
                                            <div class="portal_block_summary">
                                                <div class="ad-right cl" style="padding: 20px 0;">
                                                    <script type="text/javascript">
                                                        /*250*250 漂浮 2015-08-20*/
                                                        var cpro_id = "u2273532";
                                                    </script>
                                                    <script src="<?php echo $_smarty_tpl->tpl_vars['smraty']->value['const']['JS_URL'];?>
c.js" type="text/javascript"></script>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--[/diy]-->
                    </div>

                    <div class="drag">
                        <!--[diy=diy2]-->
                        <div id="diy2" class="area"></div>
                        <!--[/diy]-->
                    </div>
                </div>
            </div>
            <div class="wp mtn">
                <!--[diy=diy3]-->
                <div id="diy3" class="area"></div>
                <!--[/diy]-->
            </div>
        </div>






        <div id="footer" class="footer cl">
            <div id="ft" class="wp cl">
                <div class="footer-left cl">&copy; 2001-2015 <a href="http://www.petly.com" target="_blank">宠物领养网</a> <a href="http://www.petly.net" target="_blank">PETLY</a> 备案：
                    <a href="http://www.miitbeian.gov.cn/" target="_blank">冀ICP备11010768号-4</a>

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










            <script src="home.php?mod=misc&ac=sendmail&rand=1453914755" type="text/javascript"></script>










            <div id="share">
                <a id="totop" title="">返回顶部</a>
            </div>
            <script type="text/javascript">
                jQuery.noConflict();
                jQuery(function() {
                    //首先将#back-to-top隐藏
                    jQuery("#totop").hide();
                    //当滚动条的位置处于距顶部100像素以下时，跳转链接出现，否则消失
                    jQuery(function() {
                        jQuery(window).scroll(function() {
                            if (jQuery(window).scrollTop() > 100) {
                                jQuery("#totop").fadeIn();
                            } else {
                                jQuery("#totop").fadeOut();
                            }
                        });
                        //当点击跳转链接后，回到页面顶部位置
                        jQuery("#totop").click(function() {
                            jQuery('body,html').animate({
                                scrollTop: 0
                            }, 500);
                            return false;
                        });
                    });
                });
            </script>

            <div id="discuz_tips" style="display:none;"></div>
            <script type="text/javascript">
                var tipsinfo = '46826411|X3.2|0.6||0||0|7|1453914755|0a109d47f03ec7a5947d07598fd0cb45|2';
            </script>
            <script src="js/discuz_tips.js" type="text/javascript" charset="UTF-8"></script>
        </div>
    </div>
</body>

</html><?php }} ?>