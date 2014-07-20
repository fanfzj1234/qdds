
$(document).ready(function() {
	//alert("asdasdas");
	//$("textarea#editor1").ckeditor();
	$.extend({
		initeditor:function(){
			 CKEDITOR.replace( 'editor01',{
				   uiColor:'#2F4F4F',
		          } );
		},
	getContent:function(){
			 return CKEDITOR.instances.editor01.getData();    //获取textarea的值  
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
						alert("发布成功");
						window.location.href=APP+'/Member/index';
						}
				    else{
						alert(data);
						$("#larg").load(APP+'/Member/zhuce_xy');
						//window.location.href=APP+'/Index/index';
						}		
        });
});
			
	 /*点击重置时清除文本域*/
	 $("#zhuce_reset_btn").click(function(){
		 $('#user_info_fbzhuce_content').text("");
		 });		
	
});
