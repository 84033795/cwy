<?php /*%%SmartyHeaderCode:2500056aa3d9c290351-11212227%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '06fbf41f3804a9a2667992a7359ec0872af39ae5' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Index\\top.html',
      1 => 1453997717,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2500056aa3d9c290351-11212227',
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa3e987a81b',
  'has_nocache_code' => false,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa3e987a81b')) {function content_56aa3e987a81b($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title> 
<style type="text/css">
body {
    margin-left: 0px;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
}

.STYLE1 {
    color: #43860c;
    font-size: 12px;
}

.clear {
    clear: both;
}

.top {
    width: 100%;
    height: 61px;
}

.top .head {
    height: 9px;
    background: url(/cwy/Admin/Public/images/main_04.gif) repeat-x;
}

.top .head2 {
    width: 100%;
    height: 47px;
    background: url(/cwy/Admin/Public/images/main_09.gif) repeat-x;
}

.top .head2 .l {
    width: 252px;
    float: left;
    height: 47px;
    background: url(/cwy/Admin/Public/images/top-left.gif) no-repeat;
}

.top .head2 .c {
    float: left;
    padding-top: 12px;
}

.top .head2 .r {
    float: right;
    width: 370px;
    height: 30px;
    padding-left: 18px;
    padding-top: 20px;
    background: url(/cwy/Admin/Public/images/main_11.gif) no-repeat top
        right;
}

.top .head2 .r a {
    float: left;
    margin-top: -5px;
    font-size: 12px;
    color: #000;
    height: 20px;
    border: 1px solid #CCC;
    line-height: 20px;
    text-decoration: none;
    margin-left: 15px;
    padding: 0 5px;
    background: url(/cwy/Admin/Public/images/button_bg.gif) repeat-x;
}

.top .head2 .r span {
    margin-left: 118px;
}

.top .head3 {
    width: 100%;
    height: 5px;
    background: url(/cwy/Admin/Public/images/main_18.gif) repeat-x;
}

.top .head3 .l {
    width: 180px;
    height: 5px;
    background: url(/cwy/Admin/Public/images/main_16.gif) no-repeat;
}
</style>
<script language="javascript">
    function getCurDate() {
        var d = new Date();
        var week;
        switch (d.getDay()) {
        case 1:
            week = "星期一";
            break;
        case 2:
            week = "星期二";
            break;
        case 3:
            week = "星期三";
            break;
        case 4:
            week = "星期四";
            break;
        case 5:
            week = "星期五";
            break;
        case 6:
            week = "星期六";
            break;
        default:
            week = "星期天";
        }
        var years = d.getYear();
        var month = add_zero(d.getMonth() + 1);
        var days = add_zero(d.getDate());
        var hours = add_zero(d.getHours());
        var minutes = add_zero(d.getMinutes());
        var seconds = add_zero(d.getSeconds());
        var ndate = month + "月" + days + "日 " + hours + ":" + minutes + ":"
                + seconds + " " + week;
        divT.innerHTML = ndate;
    }

    function add_zero(temp) {
        if (temp < 10)
            return "0" + temp;
        else
            return temp;
    }

    setInterval("getCurDate()", 100);
</script>

</head>

<body>
	<div class="top">
		<div class="head">
			<img src="/cwy/Admin/Public/images/main_01.gif" width="97"
				height="9" border="0" />
		</div>
		<div class="head2">
			<div class="l"></div>
			<div class="c">
				<img src="/cwy/Admin/Public/images/main_12.gif" width="367"
					height="23" border="0" usemap="#Map" />
			</div>
			<div class="r">
				<a href="http://www.cwyuan.com/cwy/Home"target="_blank">站点首页</a><span class="STYLE1" id="divT"></span>
					
			</div>
		</div>
		<div class="head3">
			<div class="l"></div>
		</div>

	</div>
	<map name="Map" id="Map">
		<area shape="rect" coords="3,1,49,22" href="/index.php?s=/Admin/"
			target="_parent" />
		<area shape="rect" coords="52,2,95,21"
			href="javascript:window.parent.frames.mainFrame.I1.history.go(-1);" />
		<area shape="rect" coords="102,2,144,21"
			href="javascript:window.parent.frames.mainFrame.I1.history.go(1);" />
		<area shape="rect" coords="150,1,197,22"
			href=" javascript:window.parent.frames.mainFrame.I1.location.reload();" />
		<area shape="rect" coords="210,2,304,20"
			href="/index.php?s=/Admin/adminpw" target="I1" />
		<area shape="rect" coords="314,1,361,23"
			href="/index.php?s=/Admin/logout" target="_parent" />
	</map>
</body>
</html><?php }} ?>