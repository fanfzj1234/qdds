$(document).ready(function(e) {
  	
/*其他网站的攻略翻页*/
	$("#prev").bind("click",function(){
		var page_id=$("#page_id").text();
		if(page_id==1){
			return false;
			}
		else{
			$.ajax({
				type:"post",
				url:APP+"/Member/next_page",
				data:{page_id:page_id},
				success:function(data){
				var result=JSON.stringify(data.data); //讲json对象转化成字符串
				if(result!="" && result!="null"){
					 var ms=data.data;
					 var count = ms.length;
					 var str1="<tr>";
					 for(var i=0;i<count;i++){
						 str1=str1+"<td align='center'>"
						 +ms[i].id+"</td>"+
						 "<td align='center'>"
						 +ms[i].username+"</td>"+
                         "<td align='center' >"
						 +ms[i].email+"</td>"+
						 "<td align='center' >"
						 +ms[i].phone+"</td>"+
                         "<td align='center' >"
						 +ms[i].register_time+"</td>"+
						 "<td align='center' >"
						 +ms[i].login_time+"</td>"+
						 "<td align='center' >"
						 +ms[i].login_ip+"</td>"+
                         "<td align='center' ><a id='member_look'><strong style='color:#006'>查看</strong></a></td>";
						 }
				     str1=str1+"</tr>";	
					 
					 	 
					 $("#content").html(str1); 
					 
					 $("#page_id").html(parseInt(page_id)-1); 
			      }
					
			    }  
				});
			}	
		});
		 $("#next").bind("click",function(){
		var page_count=$("#page_count").val();
		
		var page_id=$("#page_id").text();
		var page_id_int=parseInt(page_id);
		var page_count_int=parseInt(page_count);
		if(page_id_int>page_count_int){
			return false;
			}
		else{
			$.ajax({
				type:"post",
				url:APP+"/Member/next_page",
				data:{page_id:page_id},
				success:function(data){
				var result=JSON.stringify(data.data); //讲json对象转化成字符串
				if(result!="" && result!="null"){
					 var ms=data.data;
					 var count = ms.length;
					 var str1="<tr>";
					 for(var i=0;i<count;i++){
						 str1=str1+"<td align='center'>"
						 +ms[i].id+"</td>"+
						 "<td align='center'>"
						 +ms[i].username+"</td>"+
                         "<td align='center' >"
						 +ms[i].email+"</td>"+
						 "<td align='center' >"
						 +ms[i].phone+"</td>"+
                         "<td align='center' >"
						 +ms[i].register_time+"</td>"+
						 "<td align='center' >"
						 +ms[i].login_time+"</td>"+
						 "<td align='center' >"
						 +ms[i].login_ip+"</td>"+
                         "<td align='center' ><a id='member_look'><strong style='color:#006'>查看</strong></a></td>";
						 }
				     str1=str1+"</tr>";	
					 
					 	 
					 $("#content").html(str1); 
				
					 $("#page_id").html(parseInt(page_id)+1); 
			      }
					
			    }  
				});
			}	
		}); 	
 });