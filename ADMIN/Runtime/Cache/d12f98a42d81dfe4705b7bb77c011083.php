<?php if (!defined('THINK_PATH')) exit();?><head>
<link href="__CSS__/admin_member.css" rel="stylesheet" type="text/css" />
<script  type="text/javascript" src="__JS__/zhuce_xy.js"></script>
</head>

<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
 <div class="pagetit">
 <div class="ptit">注册协议</div>
  <div class="clear"></div>
</div> 
 <div class="clear"></div>
<br>
 <div id="add_gl">
<form class="form-horizontal" method="post" action="__APP__/Member/zhuce_xy_cl">
<div class="control-group">
      <label for="user_info_fbzhuce_content" class="control-label"></label>
     <div class="controls">
      <textarea rows="30" cols="50" id="user_info_fbzhuce_content" name="user_info_fbzhuce_content" value="<?php echo $zhuce_arr['content'];?>" placeholder="请在这里"><?php echo $zhuce_arr['content'];?></textarea>
      </div>
  </div>
  <div id="user_info_add_gl_warning" class="control-group"></div>
  <div class="form-actions" id="sub_reset_gl_div">
    <button class="btn btn-primary" type="button" id="zhuce_sub_btn">提交</button>
    <button class="btn btn-primary" type="reset" id="zhuce_reset_btn">重置</button>
  </div>
  </form>   
</div>
</div>