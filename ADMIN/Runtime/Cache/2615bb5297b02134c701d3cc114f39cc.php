<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__JS__/jquery.min.js"></script>
<script type="text/javascript" src="__JS__/ddaccordion.js"></script>
<script type="text/javascript" src="__JS__/admin_ddaccordion.js"></script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script>
// JavaScript Document

$(document).ready(function()
{
	$("#main").load("__APP__/Index/main");
	$("#index").click(function(){
		$("#main").load("__APP__/Index/main");
	});	
		
	$("#zhuce_xy").click(function(){
		$("#main").load("__APP__/Member/zhuce_xy");
	});
	$("#user").click(function(){
		$("#main").load("__APP__/Member/member");
	});
	$("#hylx").click(function(){
		$("#main").load("__APP__/Member/hylx");
	});
	
	
	$("#cyszx").click(function(){
		$("#main").load("__APP__/News/cyszx");
	});
	$("#qdzx").click(function(){
		$("#main").load("__APP__/News/qdzx");
	});
	$("#dxlm").click(function(){
		$("#main").load("__APP__/News/dxlm");
	});
	$("#dszx").click(function(){
		$("#main").load("__APP__/News/dszx");
	});
	$("#ycwx").click(function(){
		$("#main").load("__APP__/News/ycwx");
	});
	
	$("#hdzj").click(function(){
		$("#main").load("__APP__/Activity/hdzj");
	});
	$("#cyshd").click(function(){
		$("#main").load("__APP__/Activity/cyshd");
	});
	$("#sthd").click(function(){
		$("#main").load("__APP__/Activity/sthd");
	});
	$("#lmhd").click(function(){
		$("#main").load("__APP__/Activity/lmhd");
	});
	
	$("#dskc").click(function(){
		$("#main").load("__APP__/Ds/dskc");
	});
	$("#dszy").click(function(){
		$("#main").load("__APP__/Ds/dszy");
	});
	$("#zyjn").click(function(){
		$("#main").load("__APP__/Ds/zyjn");
	});
	$("#dssj").click(function(){
		$("#main").load("__APP__/Ds/dssj");
	});

	$("#cyxm").click(function(){
		$("#main").load("__APP__/Bc/cyxm");
	});
	$("#tbyx").click(function(){
		$("#main").load("__APP__/Bc/tbyx");
	});
	$("#wzzz").click(function(){
		$("#main").load("__APP__/Bc/wzzz");
	});
	$("#wztg").click(function(){
		$("#main").load("__APP__/Bc/wztg");
	});
	$("#pscl").click(function(){
		$("#main").load("__APP__/Bc/pscl");
	});
	
	$("#content").click(function(){
		$("#main").load("__APP__/Dslt/content");
	});
	$("#answer").click(function(){
		$("#main").load("__APP__/Dslt/answer");
	});
	
	$("#admin_gl").click(function(){
		$("#main").load("__APP__/Admin/admin_gl");
	});
	$("#admin_add").click(function(){
		$("#main").load("__APP__/Admin/admin_add");
	});
	
	$("#yhzc").click(function(){
		$("#main").load("__APP__/Qt/yhzc");
	});
	$("#yqlj").click(function(){
		$("#main").load("__APP__/Qt/yqlj");
	});
	$("#bysj").click(function(){
		$("#main").load("__APP__/Qt/bysj");
	});
	$("#gywm").click(function(){
		$("#main").load("__APP__/Qt/gywm");
	});
});

</script>
<title>DZSW后台管理平台</title>
<link rel="stylesheet" type="text/css" href="__CSS__/admin_index.css"/>
</head>
<body>
<div id="container">
<div id="left">
<div class="logo" style=" height:100px"><img src="__IMG__/qddshh.jpg" style="width:100px; height:100px; margin-left:30px;" /></div>
<div class="arrowlistmenu">
  <h3 class="menuheader expandable" id="sy">首页</h3>
  <ul class="categoryitems">
    <li><a id="index">首页</a></li>
    <li><a href="__APP__/Login/logout">退出登录</a></li>
  </ul>

  <h3 class="menuheader expandable" id="hygl">会员管理</h3>
  <ul class="categoryitems">
    <li><a id="user">会员管理</a></li>
    <li><a id="zhuce_xy">注册协议</a></li>
    <li><a id="hylx">会员类型</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="xwzx">新闻咨询</h3>
  <ul class="categoryitems">
    <li><a id="cyszx">创业社咨询</a></li>
    <li><a id="qdzx">齐大咨询</a></li>
    <li><a id="dxlm">大学联盟</a></li>
    <li><a id="dszx">电商资讯</a></li>
    <li><a id="ycwx">原创文学</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="sthd">社团活动</h3>
  <ul class="categoryitems">
    <li><a id="hdzj">活动召集</a></li>
    <li><a id="cyshd">网上创业社活动展示</a></li>
    <li><a id="sthd">大学社团活动展示</a></li>
    <li><a id="lmhd">大学联盟活动展示</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="dzswzy">电子商务专业</h3>
  <ul class="categoryitems">
    <li><a id="dskc">电子商务课程</a></li>
    <li><a id="dszy">电子商务作业</a></li>
    <li><a id="zyjn">职业技能实训</a></li>
    <li><a id="dssj">电子商务实践</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="cyjn">创业技能</h3>
  <ul class="categoryitems">
    <li><a id="cyxm">创业项目</a></li>
    <li><a id="tbyx">淘宝营销</a></li>
    <li><a id="wzzz">网站制作</a></li>
    <li><a id="wztg">网络推广</a></li>
    <li><a id="pscl">ps图片处理</a></li>
  </ul>
  
   <h3 class="menuheader expandable" id="dslt">电商论坛</h3>
  <ul class="categoryitems">
    <li><a id="content">文章</a></li>
    <li><a id="answer">评论</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="admin">管理员</h3>
  <ul class="categoryitems">
    <li><a id="admin_gl">管理员管理</a></li>
    <li><a id="admin_add">添加管理员</a></li>
  </ul>
  
   <h3 class="menuheader expandable" id="qt">其他</h3>
  <ul class="categoryitems">
    <li><a id="yhzc">优惠政策</a></li>
    <li><a id="yqlj">友情链接</a></li>
    <li><a id="bysj">课程|毕业设计</a></li>
    <li><a id="gywm">关于我们</a></li>
  </ul>
  
</div>

</div>

<div id="main">
   
</div> 
</div>
</body>
</html>