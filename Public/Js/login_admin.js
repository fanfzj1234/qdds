// JavaScript Document
	
	/*登陆框的设置*/
$(document).ready(function()
{		
		
     $("#username").bind("blur",function(){//离开用户框的事件
		  var username=$("#username").val();
		  var len=username.length;
		   if(len<=0){
			   $("#login-warning").text("请输入用户名");
			   }else{
				$("#login-warning").text("");   
			}
		 });	
		 
	$("#password").bind("blur",function(){//离开密码框的事件
		  var pwd=$("#password").val();
		  var len=pwd.length;
		   if(len<=0){
			   $("#login-warning").text("请输入密码");
			   }else{
				$("#login-warning").text("");   
			}
		 });
    $("#superpwd").bind("blur",function(){//离开超级密码框的事件
		  var pwd=$("#superpwd").val();
		  var len=pwd.length;
		   if(len<=0){
			   $("#login-warning").text("请输入超级密码");
			   }else{
				$("#login-warning").text("");   
			}
		 }); 
		 
	
	 
	 /*登陆是的各种操作*/
	$("#login-sub-btn").bind("click",function(){//提交登陆
		      var username=$("#username").val();
			  var pwd=$("#password").val();
			  var superpwd=$("#superpwd").val();
			  
			  var name_len=username.length;
			  var pwd_len=pwd.length;
			  var superpwd_len=superpwd.length;
			  if(name_len<=0){
				  $("#login-warning").text("用户名不能为空！");
				  return  false;
				  }
			  if(pwd_len<=0){
				  $("#login-warning").text("密码不能为空！");
				  return  false;
				  }
		      if(superpwd_len<=0){
				  $("#login-warning").text("超级密码不能为空！");
				  return  false;
				  }		  
			   	  
             
				 
			$.post(APP+"/Login/do_login",{username:username,pwd:pwd,superpwd:superpwd},    function(data){	
			          	 
					 var s=data.substr(1,2);
					 var a=s.substring(0,1);
					 //alert("a长度："+a.length);
				    if(a=='1'){
						$("#login-warning").text("用户名或密码错误");
						}
					else if(a=='2'){
						window.location.href=APP+'/Index/admin_index';
						}
				    else{
						//alert(a);
						$("#login-warning").text("未知错误！");
						//window.location.href=APP+'/Index/index';
						}		
			});
					 
				 
		});	
		
});