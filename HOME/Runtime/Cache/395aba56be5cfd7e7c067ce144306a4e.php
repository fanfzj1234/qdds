<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>齐大电子商务</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="__CSS__/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="__CSS__/layout.css" type="text/css" />
<script type="text/javascript" src="__JS__/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="__JS__/bootstrap.js"></script>
<script type="text/javascript" src="__JS__/index.js"></script>

<script type="text/javascript" src="__JS__/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="__JS__/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="__JS__/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="__JS__/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="__JS__/jquery.galleryview.setup.js"></script>
   
<script type="text/javascript">
       var APP = "__APP__";
	   var IMG = "__IMG__";
	   var GAME_PHOTO = "__GAME_PHOTO__";
</script>
</head>
<body id="top">
<div class="wrapper col0">
  <div id="topline">
    <p> <?php echo date('Y-m-d H:i:s',time()); ?> |  Tel: 13888888888888888 | Mail: info@163.com  | QQ : 1111111</p>
    <ul>
      <?php
 session_start(); if(!isset($_SESSION['member']) || $_SESSION['member']==''){ ?>
          <li><a href="#login-win" data-toggle="modal">登陆</a></li>
          <li class="last"><a href="#">注册</a></li>
       <?php  }else{ ?>
         <li><a href="__APP__/UserInfo/show_user_info?user_id=<?php echo $_SESSION['member']['id'] ?>" id="user"><?php  echo $_SESSION['member']['username']; ?></a>
         </li>
         <li>
              <a href="#confire-logout-win" data-toggle="modal">退出</a>
         </li>
      <?php
 } ?>
    </ul>
    <br class="clear" />
  </div>
</div>

<!--log win--><!--JQUERY 1.10以上-->
 <div class="modal hide fade" id="login-win" role="dialog">
              <div class="modal-header">
                 <a class="close" data-dismiss="modal" id="close_login_win">X</a>                    <h2>用户登陆</h2>
                       
              </div>
              <div class="modal-body">
                    <div class="modal-form">
                       <form  method="post"  class="form-horizontal" name="user_login">
                        <div class="control-group">
                           <label for="username" class="control-label">用户名</label>
                           <div class="controls">
                            <input type="text" name="username" id="username" placeholder="用户名"  />
                            <p class="help-inline" id="username-warning" style="color:#F00;"></p>
                            </div>
                        </div>
                          
                        <div class="control-group">
                          <label for="pwd" class="control-label">密码</label>
                         <div class="controls">
                          <input type="password" name="pwd" id="pwd" placeholder="密码" />
                          <p class="help-inline" id="pwd-warning" style="color:#F00;"></p>
                         </div>
                        </div>
                        
                        <div class="control-group">
                          <label for="code" class="control-label">验证码</label>
                         <div class="controls">
                          <input style="width:100px;" type="text" name="code" id="code" placeholder="验证码" /><img src="__APP__/Public/code" alt="" onclick='this.src=this.src+"?"+Math.random()'><span>(点击验证码刷新)</span>
                         <p class="help-inline" id="code_warning" style="color:#F00;"></p>
                         </div>
                        </div>   
                        
                        <div class="control-group" style="margin-left:100px;">
                           <p id="login_warning" style="color:#F00;"></p>
                        </div>
                           
                    </div>     
              </div>
              <div class="modal-footer">
                    <a href="__APP__/Register/register" class="btn btn-primary" id="to-register-win-close-btn">现在注册</a>
                    <a type="button" class="btn btn-primary" id="login-sub-btn">确定登陆</a>
              </div>
              </form>  
    </div>

<!--confirm logout-->
      <div class="modal hide fade" id="confire-logout-win">
              <div class="modal-header">
                 <a class="close" data-dismiss="modal">×</a>
                       <h2>确定注销</h2> 
              </div>
              
              <div class="modal-body">
                 <a href="__APP__/Login/do_logout" class="btn btn-primary">确定退出</a>
               <!--   <a id="logout-cancel-btn" class="btn btn-primary">取消</a>-->
              </div>
    </div>


<!--banner -->
<div class="wrapper">
  <div id="header">
    <div class="fl_left">
      <h1><a href="#"><strong>齐大</strong>电商 <strong>社团</strong>网站</a></h1>
      <p>Free CSS Website Template</p>
    </div>
    <div class="fl_right"><a href="#"><img src="__IMG__/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>



<!-- nav -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="__APP__">首页</a></li>
        <li><a href="#">新闻资讯</a>
           <ul>
            <li><a href="__APP__/Show/show_bc_info_list">创业社资讯</a></li>
            <li><a href="__APP__/Show/show_qd_news_list">齐大新闻</a></li>
            <li><a href="__APP__/Show/show_qd_alliance_list">大学联盟</a></li>
            <li><a href="__APP__/Show/show_ds_consult_list">电商资讯</a></li>
            <li><a href="__APP__/Show/show_origliterature_list">原创文学</a></li>
           </ul>
        </li>
        <li><a href="full-width.html">社团活动</a>
           <ul>
            <li><a href="__APP__/Show/show_activity_list">活动召集</a></li>
            <li><a href="#">网上创业社活动展示</a></li>
            <li><a href="#">大学生社团活动展示</a></li>
            <li><a href="#">大学联盟活动展示</a></li>
           </ul>
        </li>
        <li><a href="#">电子商务专业</a>
          <ul>
            <li><a href="__APP__/Show/show_ds_practice_list">电子商务实践</a></li>
            <li><a href="#">电子商务课程</a></li>
            <li><a href="#">电子商务作业</a></li>
            <li><a href="#">职业技能实训</a></li>   
          </ul>
        </li>
        <li><a href="#">网上创业技能</a>
          <ul>
          	<li><a href="__APP__/Show/show_cy_project_list">创业项目</a></li>
	        <li><a href="__APP__/Show/show_taobao_marketing_list">淘宝网营销</a></li>
	        <li><a href="#">网站制作</a></li>
            <li><a href="#">网络推广</a></li>
	        <li><a href="#">PS图片处理</a></li>
          </ul>
        </li>
        
         <li><a href="__ROOT__/qdds/Forum/upload/forum.php" target="_blank">电子商务论坛</a>
         <li><a href="#">课程｜毕业设计</a>
         <li class="last"><a href="#">关于我们</a>
      </ul>
    </div>
    <!--
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>站内搜索</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="站内搜索" />
        </fieldset>
      </form>
    </div>-->
    <br class="clear" />
  </div>
</div>


<link rel="stylesheet" href="__CSS__/show.css" type="text/css" />
<div class="container">
 <a href="__APP__">首页</a>>>社团活动
<div id="info_main" class="wrapper col8">
    <div id="header"><h2><?php echo $outstanding_bc['theme']; ?></h2></div>
    <div id="info_content">
     <?php
 echo $outstanding_bc['content'] ?>
    </div>
    <div id="footer"><div><?php echo $outstanding_bc['fb_time'] ?></div><div></div>
</div>
</div>

<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 -齐大电子商务社团 - <a href="#">Domain Name</a></p>
    <p class="fl_right"> <a href="http://www.ljyx.biz/" title="模板之家" target="_blank">乐俊游戏</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>