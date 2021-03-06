<?php /* Smarty version Smarty-3.1.6, created on 2016-01-29 13:23:23
         compiled from "D:/php_chengxu/cwyuan/cwy/Home/View\Pet\showlist.html" */ ?>
<?php /*%%SmartyHeaderCode:2771756aae566c27a03-79979884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9367ef6104be2651226bcc34c7ab687c19afeec3' => 
    array (
      0 => 'D:/php_chengxu/cwyuan/cwy/Home/View\\Pet\\showlist.html',
      1 => 1454044998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2771756aae566c27a03-79979884',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aae566ea90b',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aae566ea90b')) {function content_56aae566ea90b($_smarty_tpl) {?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_common.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo @CSS_URL;?>
style_2_portal_index.css" />
<title>瀑布流</title>
<style type="text/css">
/* 标签重定义 */

body{ padding:0;margin:0;background:#ddd url(images/bg.jpg) repeat; }
img{ border:none; }
a{ text-decoration:none;color:#444; }
a:hover{color:#999;}
#title{ width:600px;margin:20px auto;text-align:center;}
/* 定义关键帧 */
@-webkit-keyframes shade{
    from{opacity:1;}
    15%{opacity:0.4;}
    to{opacity:1;}
}
@-moz-keyframes shade{
    from{opacity:1;}
    15%{opacity:0.4;}
    to{opacity:1;}
}
@-ms-keyframes shade{
    from{opacity:1;}
    15%{opacity:0.4;}
    to{opacity:1;}
}
@-o-keyframes shade{
    from{opacity:1;}
    15%{opacity:0.4;}
    to{opacity:1;}
}
@keyframes shade{
    from{opacity:1;}
    15%{opacity:0.4;}
    to{opacity:1;}
}

/* wrap */
#wrap{width:auto;height:auto;margin:0 auto;position:relative;}
#wrap .box{width:280px;height:auto;padding:10px;border:none;float:left;}
#wrap .box .info{width:280px;height:auto;border-radius:8px;box-shadow:0 0 11px #666;background:#fff;}
#wrap .box .info .pic{width:260px;height:auto;margin:0 auto;padding-top:10px;}
#wrap .box .info .pic:hover{
    -webkit-animation:shade 3s ease-in-out 1;
    -moz-animation:shade 3s ease-in-out 1;
    -ms-animation:shade 3s ease-in-out 1;
    -o-animation:shade 3s ease-in-out 1;
    animation:shade 3s ease-in-out 1;
}
#wrap .box .info .pic img{width:260px;border-radius:3px;}
#wrap .box .info .title{width:260px;height:40px;margin:0 auto;line-height:40px;text-align:center;color:#666;font-size:18px;font-weight:bold;overflow:hidden;}

</style>


<script type="text/javascript" src="<?php echo @PET_JS_URL;?>
jquery.js"></script>
<script type="text/javascript">
window.onload = function(){
    //运行瀑布流主函数
    PBL('wrap','box');
    
    //模拟数据
    
    var data = [{'src':'1.jpg','title':'This is a title.'},{'src':'2.jpg','title':'This is a title.'},{'src':'3.jpg','title':'This is a title.'},{'src':'4.jpg','title':'This is a title.'},{'src':'5.jpg','title':'This is a title.'},{'src':'6.jpg','title':'This is a title.'},{'src':'7.jpg','title':'This is a title.'},{'src':'8.jpg','title':'This is a title.'},{'src':'9.jpg','title':'This is a title.'},{'src':'10.jpg','title':'This is a title.'}];
    
    
    //设置滚动加载
    window.onscroll = function(){
        //校验数据请求
        if(getCheck()){
            var wrap = document.getElementById('wrap');
            for(i in data){
                //创建box
                var box = document.createElement('div');
                box.className = 'box';
                wrap.appendChild(box);
                //创建info
                var info = document.createElement('div');
                info.className = 'info';
                box.appendChild(info);
                //创建pic
                var pic = document.createElement('div');
                pic.className = 'pic';
                info.appendChild(pic);
                //创建img
                var img = document.createElement('img');
                img.src = '/cwy/Home/View/Pet/img/'+data[i].src;
                img.style.height = 'auto';
                pic.appendChild(img);
                //创建title
                var title = document.createElement('div');
                title.className = 'title';
                info.appendChild(title);
                //创建a标记
                var a = document.createElement('a');
                a.innerHTML = data[i].title;
                title.appendChild(a);
            }
            PBL('wrap','box');
        }
    }
}
/**
* 瀑布流主函数
* @param  wrap  [Str] 外层元素的ID
* @param  box   [Str] 每一个box的类名
*/
function PBL(wrap,box){
    //  1.获得外层以及每一个box
    var wrap = document.getElementById(wrap);
    var boxs  = getClass(wrap,box);
    //  2.获得屏幕可显示的列数
    var boxW = boxs[0].offsetWidth;
    var colsNum = Math.floor(document.documentElement.clientWidth/boxW);
    wrap.style.width = boxW*colsNum+'px';//为外层赋值宽度
    //  3.循环出所有的box并按照瀑布流排列
    var everyH = [];//定义一个数组存储每一列的高度
    for (var i = 0; i < boxs.length; i++) {
        if(i<colsNum){
            everyH[i] = boxs[i].offsetHeight;
        }else{
            var minH = Math.min.apply(null,everyH);//获得最小的列的高度
            var minIndex = getIndex(minH,everyH); //获得最小列的索引
            getStyle(boxs[i],minH,boxs[minIndex].offsetLeft,i);
            everyH[minIndex] += boxs[i].offsetHeight;//更新最小列的高度
        }
    }
}
/**
* 获取类元素
* @param  warp      [Obj] 外层
* @param  className [Str] 类名
*/
function getClass(wrap,className){
    var obj = wrap.getElementsByTagName('*');
    var arr = [];
    for(var i=0;i<obj.length;i++){
        if(obj[i].className == className){
            arr.push(obj[i]);
        }
    }
    return arr;
}
/**
* 获取最小列的索引
* @param  minH   [Num] 最小高度
* @param  everyH [Arr] 所有列高度的数组
*/
function getIndex(minH,everyH){
    for(index in everyH){
        if (everyH[index] == minH ) return index;
    }
}
/**
* 数据请求检验
*/
function getCheck(){
    var documentH = document.documentElement.clientHeight;
    var scrollH = document.documentElement.scrollTop || document.body.scrollTop;
    return documentH+scrollH>=getLastH() ?true:false;
}
/**
* 获得最后一个box所在列的高度
*/
function getLastH(){
    var wrap = document.getElementById('wrap');
    var boxs = getClass(wrap,'box');
    return boxs[boxs.length-1].offsetTop+boxs[boxs.length-1].offsetHeight;
}
/**
* 设置加载样式
* @param  box   [obj] 设置的Box
* @param  top   [Num] box的top值
* @param  left  [Num] box的left值
* @param  index [Num] box的第几个
*/
var getStartNum = 0;//设置请求加载的条数的位置
function getStyle(box,top,left,index){
    if (getStartNum>=index) return;
    $(box).css({
        'position':'absolute',
        'top':top,
        "left":left,
        "opacity":"0"
    });
    $(box).stop().animate({
        "opacity":"1"
    },999);
    getStartNum = index;//更新请求数据的条数位置
}
</script>


</head>
<body>

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
                        <a href="#" class="user_login" id="l">登录</a>
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
                                        <a href="http://www.petly.net/connect.php?mod=login&op=init&referer=portal.php&statfrom=login_simple"><img src="<?php echo @PIC_URL;?>
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
                        <input type="hidden" name="formhash" value="a462a3b9" />
                        <input type="hidden" name="srchtype" value="title" />
                        <input type="hidden" name="srhfid" value="0" />
                        <input type="hidden" name="srhlocality" value="portal::index" />
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

    <div id="wrap">
    
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
1.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
2.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
3.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
4.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
    
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
5.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
6.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
7.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
8.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
9.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
        
        <div class="box">
            <div class="info">
                <div class="pic"><img src="<?php echo @PET_IMG_URL;?>
10.jpg"></div>
                <div class="title"><a href="#">This is a title.</a></div>
            </div>
        </div>
    
    </div>

</body>
</html><?php }} ?>