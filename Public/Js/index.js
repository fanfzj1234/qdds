// JavaScript Document

$(document).ready(function() {
  
	/*登陆框的设置*/
	$("#close_login_win").bind("click",function(){
		   /*当取消登录时 将登陆框上的用户名和密码清楚*/
		   $('#username').val("");
		   $('#pwd').val("");
		   $('#code').val("");
		   $("#login_warning").text("");
		   $("#username-warning").text("");
		   $("#pwd-warning").text("");
		   $("#code-warning").text("");
		});
	
			
     $("#username").bind("blur",function(){//离开用户框的事件
		  var username=$("#username").val();
		  var len=username.length;
		   if(len<=0){
			   $("#username-warning").text("请输入用户名");
			   }else{
				$("#username-warning").text("");   
			}
		 });	
		 
	 $("#pwd").bind("blur",function(){//离开密码框的事件
		  var pwd=$("#pwd").val();
		  var len=pwd.length;
		   if(len<=0){
			   $("#pwd-warning").text("请输入密码");
			   }else{
				$("#pwd-warning").text("");   
			}
		 });
		 
		 
     $("#code").bind("blur",function(){//离开验证码框的事件
		  var code=$("#code").val();
		  var len=code.length;
		   if(len<=0){
			   $("#code_warning").text("请输入验证码");
			   }else{
				$("#code_warning").text("");   
			}
		 });		 	
	
	 
	 /*登陆是的各种操作*/
	$("#login-sub-btn").bind("click",function(){//提交登陆
		      var username=$("#username").val();
			  var pwd=$("#pwd").val();
			  var code=$("#code").val();
			  
			  var name_len=username.length;
			  var pwd_len=pwd.length;
			  var code_len=code.length;
			  if(name_len<=0){
				  $("#login_warning").text("用户名不能为空！");
				  return  false;
				  }
			  if(pwd_len<=0){
				  $("#login_warning").text("密码不能为空！");
				  return  false;
				  }
		     if(code_len<=0){
				  $("#login_warning").text("验证码不能为空！");
				  return  false;
				  }		  
				 
			$.post(APP+"/Login/do_login",{username:username,pwd:pwd,code:code},    function(data){		 
					 var s=data.substr(0,1);
				   if(s=='0'){
						$("#login_warning").text("验证码输入错，请重新输入");
						}
				    else if(s=='1'){
						$("#login_warning").text("用户名或密码错误，请重新输入");
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