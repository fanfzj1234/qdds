
$(document).ready(function() {
	//alert("asdasdas");
	$.extend({
		initeditor:function(){
			 CKEDITOR.replace( 'user_info_fbzhuce_content',{
		           //uiColor: '#14B8C4',
				   //  uiColor: 'blue',
				  // uiColor : '#9AB8F3',
				   uiColor:'#2F4F4F',
		          } );
		},
	getContent:function(){
			 return CKEDITOR.instances.user_info_fbzhuce_content.getData();    //获取textarea的值  
		}	
	});	
	$.initeditor();
		 /*提交是的各种操作*/
	$("#zhuce_sub_btn").bind("click",function(){//提交信息
		var zhuce_content=$.getContent();//获取内容
		$.post(APP+"/Member/zhuce_xy_cl",{zhuce_content:zhuce_content},    function(data){	
			          	 
					 var s=data.substr(1,2);
					 var a=s.substring(0,1);
					 //alert("a长度："+a.length);
					if(a=='1'){
						alert("发表成功");
				        $("#main").load(APP+"/Member/zhuce_xy");
						}
				    else{
						alert("未知错误");
						$("#main").load(APP+"/Member/zhuce_xy");
						//window.location.href=APP+'/Index/index';
						}		
			});
	});	
	 /*点击重置时清除文本域*/
	 $("#zhuce_reset_btn").click(function(){
		 $('#user_info_fbzhuce_content').text("");
		 });		
	
});
