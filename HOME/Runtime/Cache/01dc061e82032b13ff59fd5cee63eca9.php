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
<body id="top"  onload="$.createCode()">
<div class="wrapper col0">
  <div id="topline">
    <p> <?php echo date('Y-m-d H:i:s',time()); ?> |  Tel: 13888888888 | Mail: info@163.com  | QQ : 578621645</p>
    <ul>
      <?php
 session_start(); if(!isset($_SESSION['member']) || $_SESSION['member']==''){ ?>
          <li><a href="#login-win" data-toggle="modal">登陆</a></li>
          <li class="last"><a href="#myModal" role="button" data-toggle="modal">注册</a></li>
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

<!-- Button to trigger modal -->
<!-- 注册模态窗口  -->
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">齐大电商注册条款</h3>
  </div>
  <div class="modal-body">
<P>
    <h4>一、总则</h4>
    1.1  齐大电子商务官方网的所有权和运营权归齐齐哈尔大学电子商务社团所有。 <br/>
1.2  用户在注册之前，应当仔细阅读本协议，并同意遵守本协议后方可成为注册用户。一旦注册成功，则用户与齐大电子商务官方网之间自动形成协议关系，用户应当受本协议的约束。用户在使用特殊的服务或产品时，应当同意接受相关协议后方能使用。  <br/>
1.3 本协议则可由齐大电子商务官方网随时更新，用户应当及时关注并同意本站不承担通知义务。本站的通知、公告、声明或其它类似内容是本协议的一部分。  
   </P>
   <p>
   <h4>二、服务内容</h4>
   2.1 齐大电子商务官方网的具体内容由本站根据实际情况提供。 <br/>
2.2 本站仅提供相关的网络服务，除此之外与相关网络服务有关的设备(如个人电脑、手机、及其他与接入互联网或移动网有关的装置)及所需的费用(如为接入互联网而支付的电话费及上网费、为使用移动网而支付的手机费)均应由用户自行负担。
   </p>
   <P>
    <h4>三、用户帐号</h4>
    3.1 经本站注册系统完成注册程序并通过身份认证的用户即成为正式会员，可以获得本站规定会员所应享有的一切权限；未经认证仅享有本站规定的部分会员权限。齐大电子商务官方网有权对会员的权限设计进行变更。 <br/>
3.2 用户只能按照注册要求使用真实姓名，及身份证号注册。用户有义务保证密码和帐号的安全，用户利用该密码和帐号所进行的一切活动引起的任何损失或损害，由用户自行承担全部责任，本站不承担任何责任。如用户发现帐号遭到未授权的使用或发生其他任何安全问题，应立即修改帐号密码并妥善保管，如有必要，请通知本站。因黑客行为或用户的保管疏忽导致帐号非法使用，本站不承担任何责任。 
   </P>
   <P>
    <h4>四、使用规则</h4>
    4.1 遵守中华人民共和国相关法律法规，包括但不限于《中华人民共和国计算机信息系统安全保护条例》、《计算机软件保护条例》、《最高人民法院关于审理涉及计算机网络著作权纠纷案件适用法律若干问题的解释(法释[2004]1号)》、《全国人大常委会关于维护互联网安全的决定》、《互联网电子公告服务管理规定》、《互联网新闻信息服务管理规定》、《互联网著作权行政保护办法》和《信息网络传播权保护条例》等有关计算机互联网规定和知识产权的法律和法规、实施办法。 <br/> 
4.2  用户对其自行发表、上传或传送的内容负全部责任，所有用户不得在本站任何页面发布、转载、传送含有下列内容之一的信息，否则本站有权自行处理并不通知用户：<br/> 
<span>(1)违反宪法确定的基本原则的； <br/> 
(2)危害国家安全，泄漏国家机密，颠覆国家政权，破坏国家统一的； <br/> 
(3)损害国家荣誉和利益的； <br/> 
(4)煽动民族仇恨、民族歧视，破坏民族团结的； <br/> 
(5)破坏国家宗教政策，宣扬邪教和封建迷信的； <br/> 
(6)散布谣言，扰乱社会秩序，破坏社会稳定的；<br/>  
(7)散布淫秽、色情、赌博、暴力、恐怖或者教唆犯罪的； <br/> 
(8)侮辱或者诽谤他人，侵害他人合法权益的； <br/> 
(9)煽动非法集会、结社、游行、示威、聚众扰乱社会秩序的； <br/> 
(10)以非法民间组织名义活动的；<br/>
(11)含有法律、行政法规禁止的其他内容的。
</span>
4.3 用户承诺对其发表或者上传于本站的所有信息(即属于《中华人民共和国著作权法》规定的作品，包括但不限于文字、图片、音乐、电影、表演和录音录像制品和电脑程序等)均享有完整的知识产权，或者已经得到相关权利人的合法授权；如用户违反本条规定造成本站被第三人索赔的，用户应全额补偿本站一切费用(包括但不限于各种赔偿费、诉讼代理费及为此支出的其它合理费用)；  <br/>
4.4 当第三方认为用户发表或者上传于本站的信息侵犯其权利，并根据《信息网络传播权保护条例》或者相关法律规定向本站发送权利通知书时，用户同意本站可以自行判断决定删除涉嫌侵权信息，除非用户提交书面证据材料排除侵权的可能性，本站将不会自动恢复上述删除的信息； 
<span>
 (1)不得为任何非法目的而使用网络服务系统； <br/>
(2)遵守所有与网络服务有关的网络协议、规定和程序； 
(3)不得利用本站进行任何可能对互联网的正常运转造成不利影响的行为； <br/>
(4)不得利用本站进行任何不利于本站的行为。
</span>
4.5 如用户在使用网络服务时违反上述任何规定，本站有权要求用户改正或直接采取一切必要的措施(包括但不限于删除用户张贴的内容、暂停或终止用户使用网络服务的权利)以减轻用户不当行为而造成的影响。
   </P><p>
   <h4>五、隐私保护</h4>
   5.1 本站不对外公开或向第三方提供单个用户的注册资料及用户在使用网络服务时存储在本站的非公开内容，但下列情况除外：
   <span>
    (1)事先获得用户的明确授权； <br/>
(2)根据有关的法律法规要求；<br/> 
(3)按照相关政府主管部门的要求；<br/> 
(4)为维护社会公众的利益。
   </span>
   5.2  本站可能会与第三方合作向用户提供相关的网络服务，在此情况下，如该第三方同意承担与本站同等的保护用户隐私的责任，则本站有权将用户的注册资料等提供给该第三方。<br/> 
5.3 在不透露单个用户隐私资料的前提下，本站有权对整个用户数据库进行分析并对用户数据库进行商业上的利用。</P>
<p>
<h4>六、版权声明</h4>
6.1 本站的文字、图片、音频、视频等版权均归永兴元科技有限公司享有或与作者共同享有，未经本站许可，不得任意转载。 <br/> 
6.2 本站特有的标识、版面设计、编排方式等版权均属永兴元科技有限公司享有，未经本站许可，不得任意复制或转载。  <br/> 
6.3 使用本站的任何内容均应注明“来源于齐大电子商务官方网”及署上作者姓名，按法律规定需要支付稿酬的，应当通知本站及作者及支付稿酬，并独立承担一切法律责任。<br/>   
6.4 本站享有所有作品用于其它用途的优先权，包括但不限于网站、电子杂志、平面出版等，但在使用前会通知作者，并按同行业的标准支付稿酬。<br/>   
6.5 本站所有内容仅代表作者自己的立场和观点，与本站无关，由作者本人承担一切法律责任。 <br/> 
6.6 恶意转载本站内容的，本站保留将其诉诸法律的权利。
</p>
<p>
<h4>七、责任声明</h4>
7.1 用户明确同意其使用本站网络服务所存在的风险及一切后果将完全由用户本人承担，齐大电子商务官方网对此不承担任何责任。 <br/> 
7.2 本站无法保证网络服务一定能满足用户的要求，也不保证网络服务的及时性、安全性、准确性。 <br/>  
7.3 本站不保证为方便用户而设置的外部链接的准确性和完整性，同时，对于该等外部链接指向的不由本站实际控制的任何网页上的内容，本站不承担任何责任。<br/>   
7.4 对于因不可抗力或本站不能控制的原因造成的网络服务中断或其它缺陷，本站不承担任何责任，但将尽力减少因此而给用户造成的损失和影响。<br/>   
7.5 对于站向用户提供的下列产品或者服务的质量缺陷本身及其引发的任何损失，本站无需承担任何责任：
<span>
 (1)本站向用户免费提供的各项网络服务； <br/>   
(2)本站向用户赠送的任何产品或者服务。 
</span>
7.6 本站有权于任何时间暂时或永久修改或终止本服务(或其任何部分)，而无论其通知与否，本站对用户和任何第三人均无需承担任何责任。</p>
<p>
<h4>八、附则</h4>
8.1  本协议的订立、执行和解释及争议的解决均应适用中华人民共和国法律。  <br/>  
8.2  如本协议中的任何条款无论因何种原因完全或部分无效或不具有执行力，本协议的其余条款仍应有效并且有约束力。<br/>    
8.3  本协议解释权及修订权归齐齐哈尔大学电子商务社团所有。

</p>
	  
  </div>
  <div class="modal-footer">
	  <a href="__APP__/Register/register" class="btn btn-primary" id="to-register-win-close-btn">我同意</a>
  </div>
</div>

<!--log win--><!--JQUERY 1.10以上-->
<!-- 登陆模态窗口  -->
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
				<label for="checkCode" class="control-label">验证码</label>
			  <div class="controls">
				  <input type="text" id="check" />
				   <input type="button" id="checkCode" class="code" style="width:60spx" onClick="$.createCode()" name="checkCode"/> 
				   <a href="#" onClick="createCode()">看不清楚</a>
		          </div>
		       </div> 		   
		   <!--
                          <label for="code" class="control-label">验证码</label>
                         <div class="controls">
                          <input style="width:100px;" type="text" name="code" id="code" placeholder="验证码" /><img src="__APP__/Public/verify/" alt="" onclick='this.src=this.src+"?"+Math.random()'><span>(点击验证码刷新)</span>
                         <p class="help-inline" id="code_warning" style="color:#F00;"></p>
                         </div>
                   -->
                        
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
    </div>
    <div class="fl_right"><a href="#"><img src="__IMG__/demo/index.png" alt="" /></a></div>
    <br class="clear" />
  </div>
</div>



<!-- nav -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="__APP__">首页</a></li>
           <li><a href="#">资 讯</a>
           <ul>
            <li><a href="__APP__/Show/show_qd_news_list">齐大资讯</a></li>
	    <!--<li><a href="__APP__/Show/show_qd_news_list">齐大新闻</a></li>-->
            <li><a href="__APP__/Show/show_qd_alliance_list">大学联盟</a></li>
            <li><a href="__APP__/Show/show_ds_consult_list">电商资讯</a></li>
	    <!--<li><a href="__APP__/Show/show_origliterature_list">原创文学</a></li>-->
           </ul>
	</li>
        <li><a href="#">社团活动</a>
           <ul>
            <li><a href="__APP__/Show/show_activity_list">社团活动</a></li>
            <li><a href="__APP__/Show/show_activity_call_list">活动召集</a></li>
            <li><a href="__APP__/Show/show_activity_show_list">大学生社团活动展示</a></li>
	    <li><a href="__APP__/Show/show_electric_activity_list">电商活动展示</a></li>
           </ul>
        </li>
        <li><a href="#">电子商务专业</a>
          <ul>
            <li><a href="__APP__/Show/show_ds_practice_list">电子商务实践</a></li>
            <li><a href="__APP__/Show/show_ds_class_list">电子商务课程</a></li>
            <li><a href="__APP__/Show/show_ds_homework_list">电子商务作业</a></li>
            <li><a href="__APP__/Show/show_Skills_Training_list">职业技能实训</a></li>   
          </ul>
        </li>
        <li><a href="#">网上创业技能</a>
          <ul>
		  <!--<li><a href="__APP__/Show/show_cy_project_list">创业项目</a></li>-->
	        <li><a href="__APP__/Show/show_taobao_marketing_list">淘宝网营销</a></li>
	        <li><a href="__APP__/Show/show_web_make_list">网站制作</a></li>
                <!--<li><a href="#">网络推广</a></li>
		<li><a href="#">PS图片处理</a></li>-->
          </ul>
        </li>
        
         <li><a href="__ROOT__/qdds/Forum/upload/forum.php" target="_blank">电子商务论坛</a>
	 <!--<li><a href="#">课程｜毕业设计</a>-->
         <li class="last"><a href="__APP__/Show/like_ours">关于我们</a>
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
<a href="__APP__">首页</a>>>职业技能实训
<div id="info_list_main">
<?php
 $count=count($skills_training); if($count){ ?>
    <ul>
      <?php if(is_array($skills_training)): foreach($skills_training as $key=>$skills_training): ?><li><a href="__APP__/Show/show_skills_training?Id=<?php echo ($skills_training["Id"]); ?>"><?php echo ($skills_training["theme"]); ?></a>  
      <span><?php echo ($skills_training["datetime"]); ?></span>
      </li>
     <HR style="FILTER: alpha(opacity=100,finishopacity=0,style=1)" color=#987cb9 SIZE=3><?php endforeach; endif; ?>
    </ul>
 <?php
 }else{ echo"没有找到相关内容"; } ?>
  </div>
</div>

<div class="wrapper col8">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2014 -齐大电子商务社团 - <a href="#">Domain Name</a></p>
    <!--<p class="fl_right"> <a href="http://www.ljyx.biz/" title="模板之家" target="_blank">乐俊游戏</a></p>-->
    <br class="clear" />
  </div>
</div>
</body>
</html>