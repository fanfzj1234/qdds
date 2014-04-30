<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_member.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/Editor.js"></script>
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
});
</script> 

</head>

<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
 <div class="pagetit">
 <div class="ptit">注册协议</div>
  <div class="clear"></div>
</div> 
 <div class="clear"></div>
<br>
<div class="control-group">
<form name="zcxy" method="post" action="__APP__/Member/zhuce_xy_cl">
<textarea id='sendcontent' style='display:none' placeholder="请输入内容" name="zcxy">1111</textarea>
<iframe name='editor' src='__Edit__/edit.html?V=sendcontent&T=2&A=1' frameBorder='0' marginHeight='0' marginWidth='0' scrolling='no' style='height:250px;width:640px'></iframe>
<br>
<input type="button" value="提交" onclick="Sendnow()">
</form>
</div>
</div>