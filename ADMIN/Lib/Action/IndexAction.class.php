<?php
  

	class IndexAction extends CommonAction {
		// 显示主页面
		public function index(){
			$tzye=C('TZYE');
			if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('admin.php/Index/login',14,$tzye);
             if(!$_SESSION['admin']&&(isset($_COOKIE['username'])))
             $_SESSION['admin']=$_COOKIE['username'];
             $this->display();
		}
		public function admin_index(){
			$this->display();
		}
		public function main(){
			
		           
			$member = new Model("Member");                        //用户成员
			$bc_information= new Model("Bc_information");         //创业信息
			$club_activity=new Model("Club_activity");            //社团活动
			$consult_sort=new Model("Consult_sort");              //咨询分类
			$develop_experience=new Model("Develop_experience");  //开发信息
			$ds_consult=new Model("Ds_consult");                  //电商资讯
			$friendly_link=new Model("Friendly_link");            //友情链接
			$preferential_policy=new Model("Preferential_policy");//优惠政策
			$cy_project=new Model("Cy_project");                  //项目
			$train_information=new Model("Train_information");    //培训信息
			$ds_practice=new Model("Ds_practice");                //电商实践
			$origliterature=new Model("Origliterature");          //原创文学
			$qd_alliance=new Model("Qd_alliance");                //齐大联盟
			$qd_news=new Model("Qd_news");                        //齐大新闻
			$outstanding_bc=new Model("Outstanding_bc");          //优秀创业案例
			$taobao_marketing=new Model("Taobao_marketing");      //淘宝营销
			$admin=new Model("admin");                            //管理员
			
			//$user_array=$member->select();
			//$this->assign('user_array',$user_array); 	
			$conn=mysql_connect("localhost:3306","root","koala19920716");//建立与SQL Server数据库的连接
            mysql_query("set names 'utf8'"); 
            mysql_select_db("dzsw",$conn);   //选择数据库		
			$user_number=$member->count();                    //用户成员数
			$this->assign('user_number',$user_number); 
			$user_today=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 0 day)");//当天注册人数
			$user_today_number=mysql_num_rows($user_today);
			$this->assign('user_today_number',$user_today_number); 
			$user_three=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 3 day)");//三日注册人数
			$user_three_number=mysql_num_rows($user_three);
			$this->assign('user_three_number',$user_three_number); 
			$user_week=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 7 day)");//一周注册人数
			$user_week_number=mysql_num_rows($user_week);
			$this->assign('user_week_number',$user_week_number); 
			$user_month=mysql_query("select * from sw_member where register_time>=date_sub(now(),interval 30 day)");//一月注册人数
			$user_month_number=mysql_num_rows($user_month);
			$this->assign('user_month_number',$user_month_number); 
			
			         
            $bc_information_number=$bc_information->count();  //创业信息数
			$this->assign('bc_information_number',$bc_information_number); 
			
            $club_activity_number=$club_activity->count();    //社团活动数
			$this->assign('club_activity_number',$club_activity_number); 
			
            $consult_sort_number=$consult_sort->count();      //咨询分类数
			$this->assign('consult_sort_number',$consult_sort_number); 
			
            $develop_experience_number=$develop_experience->count();//开发信息数
			$this->assign('develop_experience_number',$develop_experience_number); 
			
            $ds_consult_number=$ds_consult->count();          //电商资讯数
			$this->assign('ds_consult_number',$ds_consult_number);
			$hlwjr=$ds_consult->where('sort=1')->select();    //互联网金融
			$hlwjr_number=count($hlwjr);
			$this->assign('hlwjr_number',$hlwjr_number);
			$wsgw=$ds_consult->where('sort=2')->select();      //网上购物
			$wsgw_number=count($wsgw);
			$this->assign('wsgw_number',$wsgw_number);
			$b2bsw=$ds_consult->where('sort=3')->select();     //B2B购物
			$b2bsw_number=count($b2bsw);
			$this->assign('b2bsw_number',$b2bsw_number);
			 
            $friendly_link_number=$friendly_link->count();    //友情链接数
			$this->assign('friendly_link_number',$friendly_link_number); 
			
			$preferential_policy_number=$preferential_policy->count();//优惠政策数
			$this->assign('preferential_policy_number',$preferential_policy_number); 
			
			$cy_project_number=$cy_project->count();              //项目数
			$this->assign('cy_project_number',$cy_project_number); 
			
			$train_information_number=$train_information->count();//培训信息数
			$this->assign('train_information_number',$train_information_number); 
			
			$ds_practice_number=$ds_practice->count();      //电商实践数
            $this->assign('ds_practice_number',$ds_practice_number); 

			$origliterature_number=$origliterature->count();//原创文学数
			$this->assign('origliterature_number',$origliterature_number);
			
			$qd_alliance_number=$qd_alliance->count();      //齐大联盟数
			$this->assign('qd_alliance_number',$qd_alliance_number);
		    
			$qd_news_number=$qd_news->count();                     //齐大新闻数
			$this->assign('qd_news_number',$qd_news_number);
			
			$outstanding_bc_number=$outstanding_bc->count();//优秀创业案例数
			$this->assign('outstanding_bc_number',$outstanding_bc_number);
			
			$taobao_marketing_number=$taobao_marketing->count();//淘宝营销数
		    $this->assign('taobao_marketing_number',$taobao_marketing_number);
			
			$admin_number=$admin->count();//管理员数
		    $this->assign('admin_number',$admin_number);
			
			$this->display();
		}
		
		
		public function login()
		{
			$this->display();

		}
		
	}
?>