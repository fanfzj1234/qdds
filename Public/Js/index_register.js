$(document).ready(function() {
//注册设置
        var APP="__APP__";
		$("#tijiao").bind("click",function(){
		      //login-sub-btnalert(1);
		      var username=$("#register_username").val();
			  var pwd=$("#register_pwd").val();
			  var repwd=$("#repassword").val();
			  alert(username);
			  var name_len=username.length;
			  var pwd_len=pwd.length;
			  var repwd_len=code.length;
			  if(name_len<=0){
				  $("#login_warning").text("用户名不能为空！");
				  return  false;
				  }
			  if(pwd_len<=0){
				  $("#login_warning").text("密码不能为空！");
				  return  false;
				  }
			  if(pwd_len<=6){
				  $("#login_warning").text("密码太短！");
				  return  false;
				  }
			  if(repwd_len<=0){
				  $("#login_warning").text("重复密码不能为空！");
				  return  false;
                  }
			  if(repwd!=pwd){
			      $("#login_warning").text("重复密码和密码不一致！");
				  return  false;
			      }
			
			  $.post(APP+"/Register/do_register",{username:username,pwd:pwd},    function(data){		 
					 var s=data.substr(0,1);
				    if(s=='1'){
						$("#login_warning").text("用户名已存在，请重新输入");
						}
					else if(s=='2'){
				       // window.location.reload();//刷新页面
						window.location.href=APP+'/Index/index';
						}
				    else{
						$("#login_warning").text("未知错误！");
						}		
			});		 	
			
		
});
});			