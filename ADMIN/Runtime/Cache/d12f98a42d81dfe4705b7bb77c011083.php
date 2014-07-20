<?php if (!defined('THINK_PATH')) exit();?><script type="text/javascript" src="__JS__/jquery.js"></script>
<script type="text/javascript" src="__JS__/modernizr.js"></script>
<script type="text/javascript" src="__JS__/zhuce_xy.js"></script>

<script type="text/javascript" src="__ckeditor__/ckeditor.js"></script>
<script type="text/javascript" src="__ckeditor__/config.js"></script>
<script type="text/javascript" src="__ckeditor__/lang/zh-cn.js"></script>
<script type="text/javascript" src="__ckeditor__/adapters/jquery.js"></script>
<!--<script src="ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->

<link rel='stylesheet' href='__CSS__/jquery-ui.css'>
<link rel="stylesheet" type="text/css" href="__ckeditor__/skins/moono/editor.css">
<div id="member_manage">
      <h3>
       注册协议
      </h3>
     
     <form class="form-horizontal" method="post" action="__APP__/Member/zhuce_xy_cl">
     <textarea rows="30" cols="50" name="editor01" id="editor01">请输入.</textarea>
        
  	 <p id="login-warning"></p>
  	<input type="button" class="button" id="zhuce_sub_btn" value="提交"/>
  	<input type="reset" class="button" id="zhuce_reset_btn" value="重置"/>
  </form>   
  
</div>