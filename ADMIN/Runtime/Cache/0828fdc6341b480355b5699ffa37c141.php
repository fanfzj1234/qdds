<?php if (!defined('THINK_PATH')) exit();?><link href="__CSS__/admin_member.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/zhuce_xy.js"></script>
<script type="text/javascript" src="__JS__/jquery.js"></script>
</head>

<body style="background-color:#E0F0FE">

<div class="admin_main_nr_dbox">
 <div class="pagetit">
 <div class="ptit">会员详细</div>
  <div class="clear"></div>
</div> 
 <div class="clear"></div>
 <table>
<?php if(is_array($list)): foreach($list as $key=>$list): ?><tr>
          <td align="center"  width="10%"  class="user_id"><?php echo ($list["id"]); ?></td>
          <td align="center"  width="10%"  class="user_id"><?php echo ($list["remember_id"]); ?></td>
          <td align="center"  width="10%"  class="user_username"><?php echo ($list["username"]); ?></td>
          <td align="center"  width="10%"  class="user_email"><?php echo ($list["email"]); ?></td>
          <td align="center"  width="10%"  class="user_phone"><?php echo ($list["phone"]); ?></td>
          <td align="center"  width="10%"  class="user_reguster_time"><?php echo ($list["register_time"]); ?></td>
          <td align="center"  width="10%"  class="user_login_time"><?php echo ($list["login_time"]); ?></td>
          <td align="center"  width="10%"  class="user_login_ip"><?php echo ($list["login_ip"]); ?></td>
          <td align="center"  width="10%"  class="user_login_time"><?php echo ($list["qq"]); ?></td>
          <td align="center"  width="10%"  class="user_login_time"><?php echo ($list["type"]); ?></td>
      </tr><?php endforeach; endif; ?> 
</table>
</div>