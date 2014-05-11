<?php
   class MemberAction extends CommonAction{
	   public function member(){
		   if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',2,'页面跳转中...');
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];

		    $member = new Model("Member");                        //用户成员
            $col=25;#每页显示记录条数
            
            $page=0;
            // 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $member->order('register_time')->limit($page*$col,$col)->select();
            $this->assign('list',$list);// 赋值数据集
            $count=$member->count();
	        // 赋值分页输出
			$this->assign("count",$count); 
		    $this->display();  
		   }
		   
	   //翻页
		public function next_page(){
		    $page_id=$_POST["page_id"];
		   
		    $member = new Model("Member");     
            $col=25;#每页显示记录条数
            $page=$page_id;
			$ms=$member->order('register_time')->limit($page*$col,$col)->select();
			
			$result=$ms;
			
			$this->ajaxReturn($result,"查询成功！",1);
			}
			
		   
	   public function zhuce_xy(){
		   if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',2,'页面跳转中...');
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];
            $this->display();
			$Zxcy = new Model("Zxcy");
			$zhuce_arr=$Zxcy->where('Id=1')->select();
			$this->assign('zhuce_arr',$zhuce_arr['content']); 
	    }
		
		public function zhuce_xy_cl(){
		    $zhuce_xy=$_POST['zhuce_content'];
			//echo $zhuce_xy;
			$date['content']=$zhuce_xy;
			$Zcxy = new Model("Zxcy");
			$Zcxy->where('id=1')->setField($data);
			echo '1';
		}
		
		public function hylx()
		{
			 $this->display();
			
		}
	   }	   
?>