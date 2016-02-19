<?php /*%%SmartyHeaderCode:1252956aa47074c9d45-68862476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be2435e864ff9c391fb374e1315fdf5098011754' => 
    array (
      0 => 'F:/cwyuan/cwy/Admin/View\\Article\\showlist.html',
      1 => 1453962986,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1252956aa47074c9d45-68862476',
  'variables' => 
  array (
    'info' => 0,
    'v' => 0,
    'pagelist' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_56aa47078eb61',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56aa47078eb61')) {function content_56aa47078eb61($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<script type="text/javaScript"
	src="/cwy/Admin/Public/js/jquery.min.js"></script>
<script language="JavaScript" src="/cwy/Admin/Public/js/css.js"></script>
<script language="JavaScript"
	src="/cwy/Admin/Public/js/common.js"></script>
<link href="/cwy/Admin/Public/css/admin.css" rel="stylesheet"
	type="text/css" />
</head>

<body>
	<table class="tab" border="0" align="center" cellpadding="0"
		cellspacing="0">
		<tr>
			<td class="left"><img
				src="/cwy/Admin/Public/images/tab_03.gif" width="15" height="30" /></td>
			<td class="center">
				<p class="position">
					<span>模块管理</span>文章管理
				</p>
				<table border="0" cellpadding="0" cellspacing="1" class="table_form">
					<form name="myform" action="/cwy/index.php/admin/article/search" method="get">
						<tr class="sub_nav">
							<td class="align_r"><select name="field"><option
										value="title">标题</option>
									
									<option value="author_id">用户ID</option></select></td>
							<td class="align_l"><input name="keyword" value=""
								type="text" /> <input type="submit" id="submit" 
								value="搜索" /></td>
						</tr>
					</form>
				</table>
				<table border="0" cellpadding="0" cellspacing="1" class="table_list">
					<form name="myform2" action="/cwy/index.php/admin/article/del_stu" method="post">
						<caption>文章列表</caption>
						<tr>
							<th>选择</th>
							<th>用户ID</th>
							<th>标题</th>
							<th>内容</th>
							<th>时间</th>
							<th>状态</th>
						</tr>
												<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="44"/></td>
							<td>2</td>
							<td><a href="/cwy/index.php/admin/article/detail/id/44">二二二...</a></td>
							<td><a href="/cwy/index.php/admin/article/detail/id/44"
								target="_self">二二二...</a></td>
							<td>16-01-25 10:03:09</td>
							<td><eq name="qy.stat" value="1"> <font color="red">未审核</font></eq></td> 						
						</tr>
						</volist>
												<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="45"/></td>
							<td>3</td>
							<td><a href="/cwy/index.php/admin/article/detail/id/45">三三三...</a></td>
							<td><a href="/cwy/index.php/admin/article/detail/id/45"
								target="_self">三三三...</a></td>
							<td>16-01-25 10:03:27</td>
							<td><eq name="qy.stat" value="1">  <font
									color="green">已审核</font> 						
						</tr>
						</volist>
												<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="46"/></td>
							<td>4</td>
							<td><a href="/cwy/index.php/admin/article/detail/id/46">四四四...</a></td>
							<td><a href="/cwy/index.php/admin/article/detail/id/46"
								target="_self">四四四...</a></td>
							<td>16-01-25 10:03:56</td>
							<td><eq name="qy.stat" value="1"> <font color="red">未审核</font></eq></td> 						
						</tr>
						</volist>
												<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="47"/></td>
							<td>5</td>
							<td><a href="/cwy/index.php/admin/article/detail/id/47">五五五...</a></td>
							<td><a href="/cwy/index.php/admin/article/detail/id/47"
								target="_self">五五五...</a></td>
							<td>16-01-25 10:04:15</td>
							<td><eq name="qy.stat" value="1">  <font
									color="green">已审核</font> 						
						</tr>
						</volist>
												<volist name="list" id="qy">
						<tr>
						    
							<td class=""><input type="checkbox" name="article_id[]"
								value="48"/></td>
							<td>6</td>
							<td><a href="/cwy/index.php/admin/article/detail/id/48">漆黑uqg...</a></td>
							<td><a href="/cwy/index.php/admin/article/detail/id/48"
								target="_self">qnoiqhjeo...</a></td>
							<td>16-01-25 10:12:43</td>
							<td><eq name="qy.stat" value="1">  <font
									color="green">已审核</font> 						
						</tr>
						</volist>
												<tr>
							<td style="padding-left:28px"><input  type="checkbox"
								id="chkall" onClick="checkall(this.form)" style="border: 0;"
								value="check">全选</td>
							<td class="" colspan="1"><input type="submit" name="submit"
								 value="删除" onClick="#"
								class="button_style" />&nbsp;&nbsp;
								 <input type="submit" name="submit" value="批量审核"
								onClick="#" class="button_style" /> </td>
								<td class="align_left" colspan="4">&nbsp;1&nbsp;&nbsp;<a href='/cwy/index.php/admin/Article/showlist?&page=2'>2</a>&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/Article/showlist?&page=2'>下一页</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='/cwy/index.php/admin/Article/showlist?&page=2'>尾 页</a>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" onkeydown="javascript:if(event.keyCode==13){var page=(this.value>2)?2:this.value;location='/cwy/index.php/admin/Article/showlist?&page='+page+''}" value="1" style="width:25px"><input type="button" value="GO" onclick="javascript:var page=(this.previousSibling.value>2)?2:this.previousSibling.value;location='/cwy/index.php/admin/Article/showlist?&page='+page+''">&nbsp;&nbsp;</td>
						</tr>
					</form>
					
				</table>
			</td>
			<td class="right"><img
				src="/cwy/Admin/Public/images/tab_07.gif" width="14" height="30" /></td>
		</tr>
		<tr>
			<td height="29"><img
				src="/cwy/Admin/Public/images/tab_20.gif" width="14" height="29" /></td>
			<td background="/cwy/Admin/Public/images/tab_21.gif"></td>
			<td><img src="/cwy/Admin/Public/images/tab_22.gif"
				width="14" height="29" /></td>
		</tr>
	</table>
</body>
</html>
<?php }} ?>