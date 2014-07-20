<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>

<script>

     var APP = APP+"";
	 var IMG = "__IMG__";
$(document).ready(function()
{
	$("#bc_information").click(function(){
		$("#main").load(APP+"/News/cyszx");
	});
	$("#club_activity").click(function(){
		$("#main").load(APP+"/Activity/sthd");
	});		
	$("#develop_experience").click(function(){
		$("#main").load(APP+"/Bc/wzzz");
	});
	$("#ds_consult").click(function(){
		$("#main").load(APP+"/News/dszx");
	});
	$("#friendly_link").click(function(){
		$("#main").load(APP+"/Qt/yqlj");
	});
	$("#preferential_policy").click(function(){
		$("#main").load(APP+"/Qt/yhzc");
	});
	$("#cy_project").click(function(){
		$("#main").load(APP+"/Bc/cyxm");
	});
	$("#train_information").click(function(){
		$("#main").load(APP+"/Ds/zyjn");
	});
	$("#ds_practice").click(function(){
		$("#main").load(APP+"/Ds/dssj");
	});
	$("#preferential_policy").click(function(){
		$("#main").load(APP+"/News/ycwx");
	});
	$("#qd_alliance").click(function(){
		$("#main").load(APP+"/News/dxlm");
	});
	$("#qd_news").click(function(){
		$("#main").load(APP+"/News/qdzx");
	});
	$("#taobao_marketing").click(function(){
		$("#main").load(APP+"/Bc/tbyx");
	});
	$("#outstanding_bc").click(function(){
		$("#main").load(APP+"/Bc/tbyx");
	});
	
	$("#member").click(function(){
		$("#main").load(APP+"/Member/index");
	});
});
</script>

<div class='title'>
    <h2>首页</h2>
    <a href='#' title='Profil'>
      Hello <strong style="color:#F00"><?php echo $_SESSION['admin'];?></strong>
    </a>
  </div>
<article class='larg'>
   

<div id="wzxx">
      <h3>
               网站信息
        <span class='entypo-down-open'></span>
      </h3>
      
        <p style="font-size: 15px;" align="center">
           <strong id="bc_information" style="color:#630;padding-left:20px ;padding-right:20px ;">创业信息：&nbsp;【 <?php echo ($bc_information_number); ?> 】</strong>
           <strong id="club_activity" style="color:#630;padding-left:20px ;padding-right:20px ;">社团活动：&nbsp;【 <?php echo ($club_activity_number); ?> 】</strong>
           <strong id="develop_experience" style="color:#630;padding-left:20px ;padding-right:20px ;">开发信息：&nbsp;【 <?php echo ($develop_experience_number); ?> 】</strong>
           <strong id="ds_consult" style="color:#630;padding-left:20px ;padding-right:20px ;">电商资讯：&nbsp;【 <?php echo ($ds_consult_number); ?> 】</strong>
           <strong id="friendly_link" style="color:#630;padding-left:20px ;padding-right:20px ;">友情链接：&nbsp;【 <?php echo ($friendly_link_number); ?> 】</strong>
        </p>
        <p style="font-size: 15px;" align="center">
           <strong id="preferential_policy" style="color:#333;padding-left:20px ;padding-right:20px ;">优惠政策：&nbsp;【 <?php echo ($preferential_policy_number); ?> 】</strong>
           <strong id="cy_project" style="color:#333;padding-left:20px ;padding-right:20px ;">开发项目：&nbsp;【 <?php echo ($cy_project_number); ?> 】</strong>
           <strong id="train_information" style="color:#333;padding-left:20px ;padding-right:20px ;">培训信息：&nbsp;【 <?php echo ($train_information_number); ?> 】</strong>
           <strong id="ds_practice" style="color:#333;padding-left:20px ;padding-right:20px ;">电商实践：&nbsp;【 <?php echo ($ds_practice_number); ?> 】</strong>
           <strong id="preferential_policy" style="color:#333;padding-left:20px ;padding-right:20px ;">原创文学：&nbsp;【 <?php echo ($preferential_policy_number); ?> 】</strong>
        </p>
        <p style="font-size: 15px;" align="center">
           <strong id="qd_alliance" style="color:#F0F;padding-left:20px ;padding-right:20px ;">齐大联盟：&nbsp;【 <?php echo ($qd_alliance_number); ?> 】</strong>
           <strong id="qd_news" style="color:#F0F;padding-left:20px ;padding-right:20px ;">齐大新闻：&nbsp;【 <?php echo ($qd_news_number); ?> 】</strong>
           <strong id="outstanding_bc" style="color:#F0F;padding-left:20px ;padding-right:20px ;">创业案例：&nbsp;【 <?php echo ($outstanding_bc_number); ?> 】</strong>
           <strong id="taobao_marketing" style="color:#F0F;padding-left:20px ;padding-right:20px ;">淘宝营销：&nbsp;【 <?php echo ($taobao_marketing_number); ?> 】</strong> 
           <strong id="member" style="color:#F0F;padding-left:20px ;padding-right:20px ;">会员数量：&nbsp;【 <?php echo ($user_number); ?> 】</strong>
        </p>
 </div>
<div id="dszx">
      <h3>
        电商资讯
        <span class='entypo-down-open'></span>
      </h3>
      <p style="font-size: 14px;" align="center">
           <strong id="" style="color:#F0F;padding-left:60px ;padding-right:60px ;">互联网金融：|  <?php echo ($hlwjr_number); ?> |</strong>
           <strong id="" style="color:#F0F;padding-left:60px ;padding-right:60px ;">网上购物：| <?php echo ($wsgw_number); ?> |</strong>
           <strong id="" style="color:#F0F;padding-left:60px ;padding-right:60px ;">B2B商务：| <?php echo ($b2bsw_number); ?> |</strong>
      </p>
</div>
<div id="hyzc">
      <h3>
        会员注册信息
        <span class='entypo-down-open'></span>
      </h3>
      <p style="font-size: 15px;" align="center">
          <strong style="color:#630;padding-left:40px ;padding-right:40px ;">今日注册人数：| <?php echo ($user_today_number); ?> |</strong>
          <strong style="color:#333;padding-left:40px ;padding-right:40px ;">三天注册人数：| <?php echo ($user_three_number); ?> |</strong>
          <strong style="color:#F0F;padding-left:40px ;padding-right:40px ;">一周注册人数：| <?php echo ($user_week_number); ?> |</strong>
          <strong style="color:#090;padding-left:40px ;padding-right:40px ;">一月内注册人数：| <?php echo ($user_month_number); ?> |</strong> 
   </p>
   <p>
   <img src="__IMG__/zx.php" style="margin-left:40px;"/>
    </p>
   <!--<p class="date"  style="margin-left:5px;width:93%;font-size:10px;">
<?php
for($i=0;$i<=31;++$i) { $time=time()-$i*24*3600; $date1=date('m',$time); $date2=date('d',$time); echo $date1."/".$date2; echo "&nbsp"; } ?>
</p>-->

</div>
<div id="xtxx">
      <h3>
              齐大电商后台管理CMS系统信息
        <span class='entypo-down-open'></span>
      </h3>

     <p style="font-size: 15px;">
   
     <strong style="color:#006;padding-left:40px ;padding-right:40px ;">程序路径:<?php echo getcwd();?></strong>
     <strong style="color:#F0F;padding-left:40px ;">当前时间： <span id="date">系统故障，请联系管理员</span></strong>
     </p>
     <p style="font-size: 15px;">
     <strong style="color:#030;padding-left:40px ;padding-right:40px ;">PHP版本：<?php echo PHP_VERSION; ?></strong>
     <strong style="color:#00F;padding-left:90px ;">MySQL版本：
         <?php  $Model =M(); $version = $Model->query("select version() as ver"); echo $version[0]['ver']; ?>
           </strong>
     </p>
   </div>
</article>