<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="__JS__/jquery.min.js"></script>
<script type="text/javascript" src="__JS__/ddaccordion.js"></script>
<script type="text/javascript" src="__JS__/admin_ddaccordion.js"></script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__ckeditor__/ckeditor.js"></script>
<script>
	   var APP = "__APP__";
	   var IMG = "__IMG__";
$(document).ready(function()
{
	$("#main").load(APP+"/Index/main");
	$("#index").click(function(){
		$("#main").load(APP+"/Index/main");
	});	
		
	$("#zhuce_xy").click(function(){
		$("#main").load(APP+"/Member/zhuce_xy");
	});
	$("#user").click(function(){
		$("#main").load(APP+"/Member/member");
	});
	$("#hylx").click(function(){
		$("#main").load(APP+"/Member/hylx");
	});
	
	
	$("#cyszx").click(function(){
		$("#main").load(APP+"/News/cyszx");
	});
	$("#qdzx").click(function(){
		$("#main").load(APP+"/News/qdzx");
	});
	$("#dxlm").click(function(){
		$("#main").load(APP+"/News/dxlm");
	});
	$("#dszx").click(function(){
		$("#main").load(APP+"/News/dszx");
	});
	$("#ycwx").click(function(){
		$("#main").load(APP+"/News/ycwx");
	});
	
	$("#hdzj").click(function(){
		$("#main").load(APP+"/Activity/hdzj");
	});
	$("#cyshd").click(function(){
		$("#main").load(APP+"/Activity/cyshd");
	});
	$("#sthd").click(function(){
		$("#main").load(APP+"/Activity/sthd");
	});
	$("#lmhd").click(function(){
		$("#main").load(APP+"/Activity/lmhd");
	});
	
	$("#dskc").click(function(){
		$("#main").load(APP+"/Ds/dskc");
	});
	$("#dszy").click(function(){
		$("#main").load(APP+"/Ds/dszy");
	});
	$("#zyjn").click(function(){
		$("#main").load(APP+"/Ds/zyjn");
	});
	$("#dssj").click(function(){
		$("#main").load(APP+"/Ds/dssj");
	});

	$("#cyxm").click(function(){
		$("#main").load(APP+"/Bc/cyxm");
	});
	$("#tbyx").click(function(){
		$("#main").load(APP+"/Bc/tbyx");
	});
	$("#wzzz").click(function(){
		$("#main").load(APP+"/Bc/wzzz");
	});
	$("#wztg").click(function(){
		$("#main").load(APP+"/Bc/wztg");
	});
	$("#pscl").click(function(){
		$("#main").load(APP+"/Bc/pscl");
	});
	
	$("#content").click(function(){
		$("#main").load(APP+"/Dslt/content");
	});
	$("#answer").click(function(){
		$("#main").load(APP+"/Dslt/answer");
	});
	
	$("#admin_gl").click(function(){
		$("#main").load(APP+"/Admin/admin_gl");
	});
	$("#admin_add").click(function(){
		$("#main").load(APP+"/Admin/admin_add");
	});
	
	$("#yhzc").click(function(){
		$("#main").load(APP+"/Qt/yhzc");
	});
	$("#yqlj").click(function(){
		$("#main").load(APP+"/Qt/yqlj");
	});
	$("#bysj").click(function(){
		$("#main").load(APP+"/Qt/bysj");
	});
	$("#gywm").click(function(){
		$("#main").load(APP+"/Qt/gywm");
	});
});
</script>
<link rel="stylesheet" type="text/css" href="__CSS__/admin_index.css"/>
<link rel="stylesheet" type="text/css" href="__CSS__/bass.css"/>
<title>DZSW后台管理平台</title>

</head>
<body>
<div id="container">
<div id="left">
<div class="logo" style=" height:150px"><img src="__IMG__/qddshh.jpg" style="width:100px; height:100px; margin-left:30px;" /></div>
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
  
  <h3 class="menuheader expandable" id="xwzx">咨询</h3>
  <ul class="categoryitems">
    <li><a id="qdzx">齐大咨询</a></li>
    <li><a id="dxlm">大学联盟</a></li>
    <li><a id="dszx">电商资讯</a></li>
  </ul>
  
  <h3 class="menuheader expandable" id="sthd">社团活动</h3>
  <ul class="categoryitems">
    <li><a id="hdzj">活动召集</a></li>
    <li><a id="sthd">大学社团活动展示</a></li>
    <li><a id="lmhd">电商活动展示</a></li>
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