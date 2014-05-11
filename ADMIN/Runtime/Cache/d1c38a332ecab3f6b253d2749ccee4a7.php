<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_main_main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>

<script>
$(document).ready(function()
{
	$("#bc_information").click(function(){
		$("#main").load("__APP__/News/cyszx");
	});
	$("#club_activity").click(function(){
		$("#main").load("__APP__/Activity/sthd");
	});		
	$("#develop_experience").click(function(){
		$("#main").load("__APP__/Bc/wzzz");
	});
	$("#ds_consult").click(function(){
		$("#main").load("__APP__/News/dszx");
	});
	$("#friendly_link").click(function(){
		$("#main").load("__APP__/Qt/yqlj");
	});
	$("#preferential_policy").click(function(){
		$("#main").load("__APP__/Qt/yhzc");
	});
	$("#cy_project").click(function(){
		$("#main").load("__APP__/Bc/cyxm");
	});
	$("#train_information").click(function(){
		$("#main").load("__APP__/Ds/zyjn");
	});
	$("#ds_practice").click(function(){
		$("#main").load("__APP__/Ds/dssj");
	});
	$("#preferential_policy").click(function(){
		$("#main").load("__APP__/News/ycwx");
	});
	$("#qd_alliance").click(function(){
		$("#main").load("__APP__/News/dxlm");
	});
	$("#qd_news").click(function(){
		$("#main").load("__APP__/News/qdzx");
	});
	$("#taobao_marketing").click(function(){
		$("#main").load("__APP__/Bc/tbyx");
	});
	$("#outstanding_bc").click(function(){
		$("#main").load("__APP__/Bc/tbyx");
	});
	
	$("#member").click(function(){
		$("#main").load("__APP__/Member/member");
	});
});
</script>
</head>
<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
<div class="pagetit">
	<div class="ptit"><span style="color:#003;">欢迎&nbsp;<strong style="color:#F00"><?php echo $_SESSION['admin'];?></strong>&nbsp;~登录乐俊CMS管理中心！</span></div>
<div class="clear"></div>
</div>
<span id="version"></span>
<div class="toptit"><table width="95%" s>
<tr><td align="left"><strong style="color:#000">网站信息</strong></td>
 <!-- <td align="right"><?php $rs=mysql_fetch_array(mysql_query("select * from lj_admin where username='".$_SESSION['admin']."'")); if($rs['authority_id']==4) { ?>
        <input type="button" onClick="window.location.href='bak/bak.php'" value="备份"/>
         <input type="button" onClick="window.location.href='bak/restore.php'" value="恢复"/> 
         <input type="button" onClick="window.location.href='../360doskill.php'" value="DDOS攻击脚本专杀检测" /
          <?php } ?></td>>-->
</tr></table></div>
<table width="95%" border="0" cellpadding="0" cellspacing="0" class="link_lan" style="padding-left:15px; line-height:220%; margin-bottom:10px; color:#666666;font-size:12px;">
      <tr>
        <td align="center">创业信息：&nbsp;<a id="bc_information"><u>【 <?php echo ($bc_information_number); ?> 】</u></a></td>
        <td align="center">社团活动：&nbsp;<a id="club_activity"><u>【 <?php echo ($club_activity_number); ?> 】</u></a></td>
         <td align="center">开发信息：&nbsp;<a id="develop_experience"><u>【 <?php echo ($develop_experience_number); ?> 】</u></a></td>
         <td align="center">电商资讯：&nbsp;<a id="ds_consult"><u>【 <?php echo ($ds_consult_number); ?> 】</u></a></td>
         <td align="center" >友情链接：&nbsp;<a id="friendly_link"><u>【 <?php echo ($friendly_link_number); ?> 】</u></a></td>
      </tr>
      <tr>
        
        <td align="center" >优惠政策：&nbsp;<a id="preferential_policy"><u>【 <?php echo ($preferential_policy_number); ?> 】</u></a></td> 
        <td align="center" >开发项目：&nbsp; <a id="cy_project"><u>【 <?php echo ($cy_project_number); ?> 】</u></a> </td>
         <td align="center">培训信息：&nbsp; <a id="train_information"><u>【 <?php echo ($train_information_number); ?> 】</u></a> </td>
           <td align="center" >电商实践：&nbsp;<a id="ds_practice"><u>【 <?php echo ($ds_practice_number); ?> 】</u></a></td>
        <td align="center" >原创文学：&nbsp;<a id="preferential_policy"><u>【 <?php echo ($preferential_policy_number); ?> 】</u></a></td> 
      </tr>
      <tr>
        <td align="center" >齐大联盟：&nbsp; <a id="qd_alliance"><u>【 <?php echo ($qd_alliance_number); ?> 】</u></a> </td>
         <td align="center">齐大新闻：&nbsp; <a id="qd_news"><u>【 <?php echo ($qd_news_number); ?> 】</u></a> </td>
          <td align="center" >创业案例：&nbsp;<a id="outstanding_bc"><u>【 <?php echo ($outstanding_bc_number); ?> 】</u></a></td>
        <td align="center" >淘宝营销：&nbsp;<a id="taobao_marketing"><u>【 <?php echo ($taobao_marketing_number); ?> 】</u></a></td> 
        <td align="center" >会员数量：&nbsp;<a id="member"><u>【 <?php echo ($user_number); ?> 】</u></a></td>
      </tr>
      <tr>
       
         <td align="center"></td>
      </tr>
  </table>
<div class="toptit"><table width="95%">
<tr><td align="left"  width="20%"><strong style="color:#000">电商资讯</strong></td></tr></table>
</div>
 <table width="96%" border="0" cellpadding="0" cellspacing="0" class="link_lan" style="padding-left:15px; line-height:220%; margin-bottom:10px; color:#666666;font-size:12px;">
      <tr class="line">
         <td align="center" style="font-size:12px;"  width="20%">互联网金融：<strong style="color:#F0F">|  <?php echo ($hlwjr_number); ?> |</strong></td>
        <td width="20%" style="font-size:12px;" align="center">网上购物：<strong style="color:#030">| <?php echo ($wsgw_number); ?> |</strong></td>
        <td width="20%" style="font-size:12px;" align="center">B2B商务：<strong style="color:#900">| <?php echo ($b2bsw_number); ?> |</strong></td>
      </tr> 
    </table>

<div class="toptit"><table width="95%">
<tr>
<td align="left" width="20%"><strong style="color:#000">最近30天会员注册趋势</strong></td>
<td width="20%" align="center" style="font-size:12px;"><strong  style="color:#630;">今日注册人数：|<?php echo ($user_today_number); ?>|</strong></td>
<td width="20%" align="center" style="font-size:12px;"><strong  style="color:#333;">三天注册人数：|<?php echo ($user_three_number); ?>|</strong></td>
<td width="20%" align="center"  style="font-size:12px;"><strong style="color:#F0F;">一周注册人数：|<?php echo ($user_week_number); ?>|</strong></td>
<td width="20%" align="center" style="font-size:12px;"><strong  style="color:#090;">一月内注册人数：|<?php echo ($user_month_number); ?>|</strong></td>
</tr>
</table>
</div>
<div class="zx" >
<img src="__IMG__/zx.php" style="margin-left:30px;"/>
</div>
<div class="date">
<table width="93%"   style="margin-left:35px; font-size:13px;">
<tr>
<?php
for($i=0;$i<=31;++$i) { echo "<td>"; $time=time()-$i*24*3600; $date1=date('m',$time); $date2=date('d',$time); echo $date1."<br>".$date2; echo "</td> "; } ?>
</tr>
<tr>
</tr>
</table>

</div>
<div class="toptit"><strong style="color:#000">乐俊cms后台管理系统信息</strong></div>
<table width="100%" border="0" cellpadding="4" cellspacing="0" class="link_lan" style="padding-left:15px; line-height:220%; margin-bottom:10px; color:#666666;">
  <tr class="head" style=" line-height:220%; color:#666666; padding-left:15px;font-size:12px;">
        <td width="10%" align="right">程序路径:</td>
        <td width="15%" align="left"><strong style="color:#006"><?php echo getcwd();?></strong></td>
         <td width="12%" align="right">访问时间：</td>
        <td width="13%" align="left"><strong style="color:#F0F"><?php echo date('H:i:s')?></strong></td>
        <td width="10%" align="right">PHP版本：</td>
        <td width="15%" align="left"><strong style="color:#030"><?php echo PHP_VERSION; ?></strong></td>
        <td width="10%" align="right">MySQL版本：</td>
        <td width="15%" align="left"><strong style="color:#00F">
         <?php  $Model =M(); $version = $Model->query("select version() as ver"); echo $version[0]['ver']; ?>
          </strong></td>
 </table>