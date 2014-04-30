<?php
    class ShowAction extends CommonAction{
		
		///显示具体的创业资讯
		///2014-4-8 16:00 nele
		public function show_bc_info(){
			 $id=$_GET["Id"];
			
			 $data['Id']=$id;
			 $bc_info=new Model("Bc_information");
	   
	         $bc_info_arr=$bc_info->where($data)->select();
	         $this->assign('bc_info',$bc_info_arr[0]);
			
			 $this->display();
			}	
			
	    ///显示创业资讯的列表
		///2014-4-8 16:00 nele 
        public function show_bc_info_list(){
			  $bc_info=new Model("Bc_information");
	          $bc_info_arr=$bc_info->order('Id desc')->select();
	           $this->assign('bc_infos',$bc_info_arr);
               $this->display();
			} 
			
			
	     ///显示齐大新闻的列表
		///2014-4-9 17:21 yyp 
               public function show_qd_news_list(){
	          $qd_news=new Model("qd_news");
	          $qd_news_arr=$qd_news->order('Id desc')->select();
	          $this->assign('qd_news',$qd_news_arr);
                  $this->display();
	       } 

		///显示具体的齐大新闻
		///2014-4-9  17:21 yyp
		public function show_qd_news(){
			 $id=$_GET["Id"];	
			 $data['Id']=$id;
			 $qd_news=new Model("qd_news");
	         $qd_news_arr=$qd_news->where($data)->select();
	         $this->assign('qd_news',$qd_news_arr[0]);
			 $this->display();
		}

                 ///显示大学联盟的列表
		///2014-4-9 17:21 yyp 
               public function show_qd_alliance_list(){
	          $qd_alliance=new Model("qd_alliance");
	          $qd_alliance_arr=$qd_alliance->order('Id desc')->select();
	          $this->assign('qd_alliance',$qd_alliance_arr);
                  $this->display();
	       } 

		///显示具体的大学联盟
		///2014-4-9  17:21 yyp
		public function show_qd_alliance(){
			 $id=$_GET["Id"];	
			 $data['Id']=$id;
			 $qd_alliance=new Model("qd_alliance");
	                 $qd_alliance_arr=$qd_alliance->where($data)->select();
	                 $this->assign('qd_alliance',$qd_alliance_arr[0]);
			 $this->display();
		}




		  ///显示原创文学的列表
	      ///2014-4-10 11:31 yyp 
           public function show_origliterature_list(){
		   $origliterature=new Model("origliterature");
	       $origliterature_arr=$origliterature->order('Id desc')->select();
	       $this->assign('origliterature',$origliterature_arr);
                                  $this->display();
	       } 

	        ///显示具体的原创文学
	        ///2014-4-10  11:35 yyp
	 public function show_origliterature(){
			 $id=$_GET["Id"];	
			 $data['Id']=$id;
			 $origliterature=new Model("origliterature");
	         $origliterature_arr=$origliterature->where($data)->select();
	         $this->assign('origliterature',$origliterature_arr[0]);
			 $this->display();
			}


        ///显示具体的创业培训信息
		///2014-4-8 16:01 nele
		public function show_train_info(){
			 $id=$_GET["Id"];
			
			 $data['Id']=$id;
			 $train_info=new Model("Train_information");
	   
	         $train_info_arr=$train_info->where($data)->select();
	         $this->assign('train_info',$train_info_arr[0]);
			
			 $this->display();
			}	

       		
	    ///显示创业培训的列表
		///2014-4-8 16:14 nele 
        public function show_train_info_list(){
			  $train_info=new Model("Train_information");
	          $train_info_arr=$train_info->order('Id desc')->select();
	           $this->assign('train_infos',$train_info_arr);
               $this->display();
			} 




        ///显示优惠政策
		///2014-4-8 16:41 nele 
        public function show_preferential_policy(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $preferential_policy=new Model("Preferential_policy");
	   
	         $preferential_policy_arr=$preferential_policy->where($data)->select();
	         $this->assign('preferential_policy',$preferential_policy_arr[0]);
			
			 $this->display();
			
			}
			
	    
		///显示优惠政策列表
		///2014-4-8 16:41 nele 
	  public function show_preferential_policy_list(){
			 $preferential_policy=new Model("Preferential_policy");
	         $preferential_policy_arr=$preferential_policy->order('Id desc')->select();
	       $this->assign('preferential_policys',$preferential_policy_arr);
             $this->display();
				}
			
			
			
	    ///电子商务实践
		///2014-4-9 16:52 nele 
        public function show_ds_practice(){
			 $id=$_GET["Id"];
			 $data['id']=$id;
			 $ds_practice=new Model("Ds_practice");
	   
	         $ds_practice_arr=$ds_practice->where($data)->select();
	         $this->assign('ds_practice',$ds_practice_arr[0]);
			
			 $this->display();
			}
		///电子商务实践列表
		///2014-4-9 17:07 nele 
	  public function show_ds_practice_list(){
			 $ds_practice=new Model("Ds_practice");
	         $ds_practice_arr=$ds_practice->order('id desc')->select();
	         $this->assign('ds_practices',$ds_practice_arr);
             $this->display();
				}
	
	
	    ///电商资讯
		///2014-4-9 16:52 nele 
        public function show_ds_consult(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $ds_consult=new Model("Ds_consult");
	   
	         $ds_consult_arr=$ds_consult->where($data)->select();
	         $this->assign('ds_consults',$ds_consult_arr[0]);
			 
			 $this->display();
			}
	    
		///电商资讯列表
		///2014-4-10 9：18 nele 
	  public function show_ds_consult_list(){
			 $ds_consult=new Model("Ds_consult");
	         $ds_consult_arr=$ds_consult->order('id desc')->select();
	         $this->assign('ds_consults',$ds_consult_arr);
             $this->display();
				}	
				
				
				
		///社团活动召集列表
		///2014-4-10 9：37 nele 
	  public function show_activity_list(){
			 $club_activity=new Model("Club_activity");
	         $club_activity_arr=$club_activity->order('id desc')->select();
	         $this->assign('club_activities',$club_activity_arr);
             $this->display();
		 }
		 
					
		///社团活动召集信息
		///2014-4-10 9：37 nele 
	  public function show_activity(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $club_activity=new Model("Club_activity");
	   
	         $club_activity_arr=$club_activity->where($data)->select();
	         $this->assign('club_activity',$club_activity_arr[0]);
			 
			 $this->display();
		 }
		  
        ///优秀的创业信息
		///2014-4-10 10:57 nele 
		 public function show_outstanding_bc(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $outstanding_bc=new Model("Outstanding_bc");
	   
	         $outstanding_bc_arr=$outstanding_bc->where($data)->select();
	         $this->assign('outstanding_bc',$outstanding_bc_arr[0]);
			 
			 $this->display();
		 }
		 
		 
		 	///网上项目列表
		///2014-4-10 11:33 nele 
	  public function show_cy_project_list(){
			 $cy_project=new Model("Cy_project");
	         $cy_project_arr=$cy_project->order('id desc')->select();
	         $this->assign('cy_projects',$cy_project_arr);
             $this->display();
		 }
		 
	    ///网上项目具体信息展示
		///2014-4-10 11:34 nele 
		 public function show_cy_project(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $cy_project=new Model("Cy_project");
	   
	         $cy_project_arr=$cy_project->where($data)->select();
	         $this->assign('cy_project',$cy_project_arr[0]);
			 
			 $this->display();
		 }
		 
		 
		 	 
		///网上
		///2014-4-10 11:33 nele 
	  public function show_taobao_marketing_list(){
			 $taobao_marketing=new Model("Taobao_marketing");
	         $taobao_marketing_arr=$taobao_marketing->order('id desc')->select();
	         $this->assign('taobao_marketings',$taobao_marketing_arr);
             $this->display();
		 }
		 
		 
		   ///网上项目具体信息展示
		///2014-4-10 11:34 nele 
		 public function show_taobao_marketing(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $taobao_marketing=new Model("Taobao_marketing");
	   
	         $taobao_marketing_arr=$taobao_marketing->where($data)->select();
	         $this->assign('taobao_marketing',$taobao_marketing_arr[0]);
			 
			 $this->display();
		 }
		 		
	}
?>
