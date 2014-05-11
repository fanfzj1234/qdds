<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_member.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/admin_member.js"></script>
<script>
$(document).ready(function()
{
	$("#member_look").click(function(){
		$("#main").load("__APP__/Member/member_ck");
	});
	$("#club_activity").click(function(){
		$("#main").load("__APP__/Activity/sthd");
	});		
});
</script>
</head>
<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
 <div class="pagetit">
 <div class="ptit">个人用户管理</div>
  <div class="clear"></div>
</div> 
<div class="table">
  <table width="100%" border="0" cellpadding="0" cellspacing="0"  id="list" class="link_lan" style="font-size:14px">
    <tr>
     <td  align="center" width="5%" height="10px" class="admin_list_tit">UID</td>
     <td  align="center" width="10%" class="admin_list_tit">用户名</td>
     <td  align="center" width="15%" class="admin_list_tit">email</td>
     <td  align="center" width="15%" class="admin_list_tit">手机</td>
     <td  align="center" class="admin_list_tit">注册时间</td>
     <td  align="center" class="admin_list_tit">最后登录时间</td>
     <td  align="center" class="admin_list_tit">上次登录ip</td>
     <td  align="center" width="5%" class="admin_list_tit" >操作</td>
    </tr>
  
	<div id="content_left" class="span6">
     <?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
          <td align="center" ><?php echo ($list["id"]); ?></td>
          <td align="center" ><?php echo ($list["username"]); ?></td>
          <td align="center" ><?php echo ($list["email"]); ?></td>
          <td align="center" ><?php echo ($list["phone"]); ?></td>
          <td align="center" ><?php echo ($list["register_time"]); ?></td>
          <td align="center" ><?php echo ($list["login_time"]); ?></td>
          <td align="center" ><?php echo ($list["login_ip"]); ?></td>
          <td align="center" ><a id="member_look"><strong style="color:#006">查看</strong></a></td>
      </tr><?php endforeach; endif; ?> 
    </div>
     </table>
    </div>  
      <div class="clear"></div>
      <div class="clear"></div>
	<table width="100%" border="0" cellspacing="10" cellpadding="0" class="admin_list_btm">
      <tr>
        <td>
    
        <div class="page link_bk" style="margin-right:30px;" align="center">
         <div id="last_page">
         <a id="prev">&larr; Last</a>
         </div>
         <div id="next_page">
          <a  id="next">Next &rarr;</a>
         </div>
          <div id="page_page">
        <a><span id="page_id">1</span></a>
        <input type="hidden" id="page_count" value="<?php echo ($count/16); ?>">
        </div>
    </div>
		</td>
      </tr></table>
  <div class="clear"></div>
   </div>