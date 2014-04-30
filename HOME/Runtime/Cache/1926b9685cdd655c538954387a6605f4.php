<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="featured_slide">
        <ul id="featurednews">
          <li><img src="__IMG__/1.jpg" alt="" />
            <div class="panel-overlay">
              <h2>赛车</h2>
              <p>赛车运动起源距今已有超过100年的历史。最早的赛车比赛是在城市间的公路上进行的。许多车手因为公路比赛极大的危险<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="__IMG__/2.jpg" alt="" />
            <div class="panel-overlay">
              <h2>Aliquatjusto quisque nam</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="__IMG__/3.jpg" alt="" />
            <div class="panel-overlay">
              <h2>Dapiensociis temper donec</h2>
              <p>Temperinte interdum sempus odio urna eget curabitur semper convallis nunc laoreet.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="__IMG__/4.jpg" alt="" />
            <div class="panel-overlay">
              <h2>Semvelit nonummy odio tempus</h2>
              <p>Justolacus eger at pede felit in dictum sempus elit curabitur ipsum. Ametpellentum.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
          <li><img src="__IMG__/5.jpg" alt="" />
            <div class="panel-overlay">
              <h2>Pedefamet orci orci quisque</h2>
              <p>Nonnam aenenasce morbi liberos malesuada risus id donec volutpat estibulum curabitae.<br />
                <a href="#">Continue Reading &raquo;</a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="column">
      <ul class="latestnews">
        <li><img src="http://placehold.it/100x100" alt="" /><?php $club_activity_arr[0]['photo'] ?>
          <p><strong><a href="__APP__/Show/show_activity?Id=<?php echo$club_activity_arr[0]['Id']; ?>"><?php echo $club_activity_arr[0]['theme']; ?></a></strong> <?php echo substr($club_activity_arr[0]['demand'],0,100); ?></p>
        </li>
        <li><img src="http://placehold.it/100x100" alt="" /><?php $club_activity_arr[1]['photo'] ?>
          <p><strong><a href="__APP__/Show/show_activity?Id=<?php echo$club_activity_arr[1]['Id']; ?>"><?php echo $club_activity_arr[0]['theme']; ?></a></strong> <?php echo substr($club_activity_arr[1]['demand'],0,100); ?></p>
        </li>
         <li><img src="http://placehold.it/100x100" alt="" /><?php $club_activity_arr[0]['photo'] ?>
          <p><strong><a href="#"><?php echo $club_activity_arr[0]['theme']; ?></a></strong> <?php echo substr($club_activity_arr[0]['demand'],0,100); ?></p>
        </li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="adblock">
    <div class="fl_left"><a href="#"><img src="__IMG__/demo/468x60.gif" alt="" /></a></div>
    <div class="fl_right"><a href="#"><img src="__IMG__/demo/468x60.gif" alt="" /></a></div>
    <br class="clear" />
  </div>
  <div id="hpage_cats">
    <div class="fl_left">
      <h2><a href="__APP__/Show/show_bc_info_list">创业资讯 &raquo;</a></h2>
      <ul>
       <?php if(is_array($bc_infos)): foreach($bc_infos as $key=>$bc_info): ?><li><a href="__APP__/Show/show_bc_info?Id=<?php echo ($bc_info["Id"]); ?>"><?php echo ($bc_info["theme"]); ?></a> <span style="margin-left:18px;"><?php echo ($bc_info["publish_time"]); ?></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    <div class="fl_right">
      <h2><a href="__APP__/Show/show_ds_practice_list">电子商务实践 &raquo;</a></h2>
      <ul>
       <?php if(is_array($ds_practices)): foreach($ds_practices as $key=>$ds_practice): ?><li><a href="__APP__/Show/show_ds_practice?Id=<?php echo ($ds_practice["id"]); ?>"><?php echo ($ds_practice["theme"]); ?></a> <span style="margin-left:18px;"><?php echo ($ds_practice["publish_time"]); ?></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    <br class="clear" />
    <div class="fl_left">
      <h2><a href="__APP__/Show/show_train_info_list">创业培训信息 &raquo;</a></h2>
      <ul>
       <?php if(is_array($train_infos)): foreach($train_infos as $key=>$train_info): ?><li><a href="__APP__/Show/show_train_info?Id=<?php echo ($train_info["Id"]); ?>"><?php echo ($train_info["theme"]); ?></a> <span style="margin-left:18px;"><?php echo ($train_info["datetime"]); ?></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    <div class="fl_right">
      <h2><a href="__APP__/Show/show_preferential_policy_list">创业优惠政策 &raquo;</a></h2>
      <ul>
       <?php if(is_array($preferential_policys)): foreach($preferential_policys as $key=>$preferential_policy): ?><li><a href="__APP__/Show/show_preferential_policy?Id=<?php echo ($preferential_policy["Id"]); ?>"><?php echo ($preferential_policy["theme"]); ?></a> <span style="margin-left:18px;"><?php echo ($preferential_policy["datetime"]); ?></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div class="container">
    <div class="content">
      <div id="hpage_latest">
        <h2>优秀创业案例展示</h2>
        <ul>
          <li><img src="http://placehold.it/200x140" alt="" />
            <p><?php echo $outstanding_bc_arr[0]['theme'] ?></p>
            <p><?php echo mb_substr($outstanding_bc_arr[0]['content'],0,60,'utf8'); ?></p>
            <p class="readmore"><a href="__APP__/Show/show_outstanding_bc?Id=<?php echo $outstanding_bc_arr[0]['Id'];?>">阅读全部 &raquo;</a></p>
          </li>
          <li><img src="http://placehold.it/200x140" alt="" />
            <p><?php echo $outstanding_bc_arr[1]['theme'] ?></p>
           <p><?php echo mb_substr($outstanding_bc_arr[1]['content'],0,60,'utf8'); ?></p>
            <p class="readmore"><a href="__APP__/Show/show_outstanding_bc?Id=<?php echo $outstanding_bc_arr[1]['Id'];?>">阅读全部 &raquo;</a></p>
          </li>
          <li class="last"><img src="http://placehold.it/200x140" alt="" />
           <p><?php echo $outstanding_bc_arr[2]['theme'] ?></p>
          <p><?php echo mb_substr($outstanding_bc_arr[2]['content'],0,60,'utf8'); ?></p>
            <p class="readmore"><a href="__APP__/Show/show_outstanding_bc?Id=<?php echo $outstanding_bc_arr[2]['Id'];?>">阅读全部 &raquo;</a></p>
          </li>
        </ul>
        <br class="clear" />
      </div>
    </div>
    <div class="column">
      <div class="holder"><a href="#"><img src="__IMG__/demo/300x250.gif" alt="" /></a></div>
      <div class="holder"><a href="#"><img src="__IMG__/demo/300x80.gif" alt="" /></a></div>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="footer">
    <div class="footbox">
      <h2>B2B商务</h2>
      <ul>
       <?php if(is_array($ds_b2b_consults)): foreach($ds_b2b_consults as $key=>$ds_consult): ?><li><a href="__APP__/Show/show_ds_consult?Id=<?php echo ($ds_consult["Id"]); ?>"><?php echo ($ds_consult["name"]); ?></a> <span style="margin-left:18px;"></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    
    <div class="footbox">
      <h2>互联网金融</h2>
      <ul>
       <?php if(is_array($ds_www_consults)): foreach($ds_www_consults as $key=>$ds_consult): ?><li><a href="__APP__/Show/show_ds_consult?Id=<?php echo ($ds_consult["Id"]); ?>"><?php echo ($ds_consult["name"]); ?></a> <span style="margin-left:18px;"></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
  
    <div class="footbox last">
      <h2>网上购物</h2>
      <ul>
       <?php if(is_array($ds_buy_consults)): foreach($ds_buy_consults as $key=>$ds_consult): ?><li><a href="__APP__/Show/show_ds_consult?Id=<?php echo ($ds_consult["Id"]); ?>"><?php echo ($ds_consult["name"]); ?></a> <span style="margin-left:18px;"></span></li><?php endforeach; endif; ?>
      </ul> 
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="socialise">
    <ul>
      <li><a href="#"><img src="__IMG__/qd.jpg" alt="" width="113" height="114" /><span>齐齐哈尔大学</span></a></li>
      <li><a href="#"><img src="__IMG__/rss.gif" alt="" /><span>FeedBurner</span></a></li>
      <li class="last"><a href="#"><img src="__IMG__/twitter.gif" alt="" /><span>Twitter</span></a></li>
    </ul>
    <div id="newsletter">
      <h2>NewsLetter Sign Up !</h2>
      <p>Please enter your Email and Name to join.</p>
      <form action="#" method="post">
        <fieldset>
          <legend>Digital Newsletter</legend>
          <div class="fl_left">
            <input type="text" value="Enter name here&hellip;"  onfocus="this.value=(this.value=='Enter name here&hellip;')? '' : this.value ;" />
            <input type="text" value="Enter email address&hellip;"  onfocus="this.value=(this.value=='Enter email address&hellip;')? '' : this.value ;" />
          </div>
          <div class="fl_right">
            <input type="submit" name="newsletter_go" id="newsletter_go" value="&raquo;" />
          </div>
        </fieldset>
      </form>
      <p>To unsubsribe please <a href="#">click here &raquo;</a>.</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 -齐大电子商务社团 - <a href="#">Domain Name</a></p>
    <p class="fl_right"> <a href="http://www.ljyx.biz/" title="模板之家" target="_blank">乐俊游戏</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>