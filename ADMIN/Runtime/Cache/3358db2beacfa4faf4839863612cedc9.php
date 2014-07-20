<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title>齐大电商后台管理CMS</title>

<link rel="stylesheet" href="__CSS__/admin_main.css" media="screen" type="text/css" />

<script src='__JS__/jquery.js'></script>
<script src="__JS__/admin_index.js"></script>
  
<!--<script src="/gg_bd_ad_720x90.js" type="text/javascript"></script>
<script src="/follow.js" type="text/javascript"></script>-->
<script>
$(document).ready( function() {
 var APP = "__APP__";
	   var IMG = "__IMG__";
	$(".admin_index").load(APP+"/Index/main");
	$("#index").click(function(){
		$(".admin_index").load(APP+"/Index/main");
	});			
	$("#member").click(function(){
		$(".admin_index").load(APP+"/Member/index");
	});
	$("#news").click(function(){
		$(".admin_index").load(APP+"/News/index");
	});
	$("#activity").click(function(){
		$(".admin_index").load(APP+"/Ds/index");
	});
	$("#admin").click(function(){
		$(".admin_index").load(APP+"/Admin/index");
	});
	$("#other").click(function(){
		$(".admin_index").load(APP+"/Qt/index");
	});
    $('body').on("click", ".larg div h3", function(){
    if ($(this).children('span').hasClass('close')) {
      $(this).children('span').removeClass('close');
    }
    else {
      $(this).children('span').addClass('close');
    }
    $(this).parent().children('p').slideToggle(250);
  });
  
  $('body').on("click", "nav ul li a", function(){
    var title = $(this).data('title');
    $('.title').children('h2').html(title);
  });
});
function bodyLoad(){
var dateTime=new Date();
var hh=dateTime.getHours();//小时
var mm=dateTime.getMinutes();//分钟
var ss=dateTime.getSeconds();//秒钟

var yy=dateTime.getFullYear();//年份
var MM=dateTime.getMonth()+1; //月份-因为1月这个方法返回为0，所以加1
var dd=dateTime.getDate();//日数

var week=dateTime.getDay();//周(0~6,0表示星期日)
var days=[ '日 ', '一 ', '二 ', '三 ', '四 ', '五 ', '六 ',]

document.getElementById('date').innerHTML=yy+'年'+MM+'月'+dd+'日 '+'星期'+days[week]+hh+'时'+mm+'分'+ss+'秒' ;

setTimeout(bodyLoad,1000);
}
</script>
</head>

<body oncontextmenu="return false;" 
ondragstart="return false;" 
onload="if(window.location.href.indexOf('temp')==-1)window.location.href=window.location.href+'?temp='+Math.random().toString();bodyLoad();" 
onpaste="return false;" 
oncut="return false;"  
oncopy="return false;"
>


<span class='bckg'></span>
<header>
  <h1>
    齐大电商CMS
  </h1>
  <nav>
    <ul>
     <li>
        <a data-title='首页' id="index">首页</a>
      </li>
      <li>
        <a data-title='会员管理' id="member">会员管理</a>
      </li>
      <li>
        <a data-title='社团活动' id="activity">社团活动</a>
      </li>
      <li>
        <a data-title='新闻咨询' id="news">新闻咨询</a>
      </li>
      <li>
        <a data-title='管理员' id="admin">管理员</a>
      </li>
      <li>
        <a data-title='其他' id="other">其他</a>
      </li>
    </ul>
  </nav>
</header>

<main  class="admin_index">
  <div class='title'>
    <h2>首页</h2>
    <a href='#' title='Profil'>
      Hello <strong style="color:#F00"><?php echo $_SESSION['admin'];?></strong>
    </a>
  </div>
<article class='larg'>

</article>
</main>
    
</body>

</html>