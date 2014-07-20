<?php if (!defined('THINK_PATH')) exit();?>
<link href="__CSS__/admin_main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__JS__/jquery.js"></script>
<link rel='stylesheet' href='__CSS__/jquery-ui.css'>


<script src="__JS__/modernizr.js"></script>
<script>
function getrow(obj){  
   
   curRow=event.srcElement.parentElement;  
   curRow.style.background="#00CCFF";  
   }
}  
function backrow(obj){  
     
    curRow=event.srcElement.parentElement;  
    curRow.style.background="#f2f2f2";  
    
}  
       var APP = "__APP__";
	   var IMG = "__IMG__";
$(document).ready(function()
{
	$("#zcxy_set").click(function(){
		$(".larg").load(APP+"/Member/zhuce_xy");
	});	
	$(".ck").click(function(){
		var ck_id=$(".ck_id").val();
		alert(ck_id);
		$(".larg").load(APP+"/Member/member_ck?id="+ck_id);
	});	
	$(".delete").click(function(){
		var type_id=$(".type_id").text();
		
	});
	$.post(APP+"/Member/type_delete",{type_id:type_id},function(data){	
			          	 
					 var s=data.substr(1,2);
					 var a=s.substring(0,1);
					
				    if(a=='1'){
						$().message("删除成功!");
						}
					else if(a=='2'){
						$().message("删除失败!");
						}
				    else{
						
						$().message("未知错误!");
						
						}		
			});
});
</script>
<div class='title'>
    <h2>会员管理</h2>
    <span id="date" ></span>
    	&nbsp;&nbsp;
    <a href='#' title='Profil'>
      Hello <strong style="color:#F00"><?php echo $_SESSION['admin'];?></strong>
    </a>
  </div>
<article class='larg'>
<div id="member_manage">
      <h3>
               个人用户管理
        <span class='entypo-down-open'></span>
      </h3>
      
        <p style="font-size: 15px;background-color:#50D4FD;">
           <strong style="color:#000;padding-left:10px ;padding-right:25px ;">UID&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">用户名&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">邮箱&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">手机&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">注册时间&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">最后登录时间&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;">上次登录ip&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:10px ;">操作&nbsp;</strong>
        </p>
        <?php $i=0;?>
         <?php if(is_array($list)): foreach($list as $key=>$list): ++$i;?>
        <p style="font-size: 15px;" onmouseover="getrow(this)" onmouseout="backrow(this)" style="background-color: #f2f2f2;">
           <strong style="color:#000;padding-left:10px ;padding-right:25px ;" class="ck_id"><?php echo ($list["id"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["username"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["email"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["phone"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["register_time"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["login_time"]); ?>&nbsp;</strong>
           <strong style="color:#000;padding-left:25px ;padding-right:25px ;"><?php echo ($list["login_ip"]); ?>&nbsp;</strong>
           <strong style="color:#006;padding-left:25px ;padding-right:10px ;" class="ck">查看&nbsp;</strong>
        </p><?php endforeach; endif; ?> 
       <p style="font-size: 15px;" align="center">
       	<?php if(empty($i)) echo "记录为空~"; ?>
       	&nbsp;</p>
       <p>
        	<strong id="page_page" style="padding-left:40px ;padding-right:40px ;"><?php echo ($count); echo ($page["header"]); ?></strong>
        	<strong id="prev_page"  style="padding-left:40px ;padding-right:40px ;"><?php echo ($page["prev"]); ?></strong>
        	<strong id="next_page"  style="padding-left:40px ;padding-right:40px ;"><?php echo ($page["next"]); ?></strong>
        	<strong id="first_page"  style="padding-left:40px ;padding-right:40px ;"><?php echo ($page["first"]); ?></strong>
        	<strong id="last_page"  style="padding-left:40px ;padding-right:40px ;"><?php echo ($page["last"]); ?></strong>
       </p>
 </div>
<div id="zcxy">
      <h3>
         注册协议
        <span class='entypo-down-open'></span>
      </h3>
      
      <p align="center"><?php echo ($zhuce_arr); ?></p>
      <p id="zcxy_set" style="cursor:pointer">修改</p>
</div>
<div id="hyzc">
      <h3>
        会员类型
        <span class='entypo-down-open'></span>
      </h3>
      <p style="font-size: 15px;" align="center">
          <strong style="color:#630;padding-left:40px ;padding-right:40px ;">今日注册人数：| <?php echo ($user_today_number); ?> |</strong>
          <strong style="color:#333;padding-left:40px ;padding-right:40px ;">三天注册人数：| <?php echo ($user_three_number); ?> |</strong>
          <strong style="color:#F0F;padding-left:40px ;padding-right:40px ;">一周注册人数：| <?php echo ($user_week_number); ?> |</strong>
          <strong style="color:#090;padding-left:40px ;padding-right:40px ;">一月内注册人数：| <?php echo ($user_month_number); ?> |</strong> 
      </p>
       <p style="font-size: 15px;background-color:#50D4FD;">
           <strong style="color:#000;padding-left:10px ;padding-right:40px ;">ID&nbsp;</strong>
           <strong style="color:#000;padding-left:40px ;padding-right:40px ;">类型&nbsp;</strong>
           <strong style="color:#000;padding-left:80px ;padding-right:80px ;">权限介绍&nbsp;</strong>
           <strong style="color:#000;padding-left:40px ;padding-right:40px ;">操作&nbsp;&nbsp;&nbsp;</strong>
           
        </p>
    <?php if(is_array($list)): foreach($list as $key=>$list): ?><p style="font-size: 15px;">
          <strong style="color:#000;padding-left:10px ;padding-right:40px ;" class="type_id"><?php echo ($list["type_id"]); ?></strong>
          <strong style="color:#000;padding-left:40px ;padding-right:40px ;"><?php echo ($list["type_name"]); ?></strong>
          <strong style="color:#000;padding-left:80px ;padding-right:80px ;"><?php echo ($list["type_string"]); ?></strong>
          <strong style="color:#000;padding-left:40px ;padding-right:40px ;"><a class="delete">删除</strong></a></strong>
        </p><?php endforeach; endif; ?>
</div>
</article>