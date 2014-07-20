<?php
    class ShowAction extends CommonAction{
		
	/*	///显示具体的创业资讯
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
			
	 */		
	     ///显示齐大资讯的列表
		///2014-4-9 17:21 yyp 
               public function show_qd_news_list(){
	          $qd_news=new Model("qd_news");
	          $qd_news_arr=$qd_news->order('Id desc')->select();
	          $this->assign('qd_news',$qd_news_arr);
                  $this->display();
	       } 

		///显示具体的齐大资讯
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
			 $ds_practice=new Model("ds_practice");
	   
	         $ds_practice_arr=$ds_practice->where($data)->select();
	         $this->assign('ds_practice',$ds_practice_arr[0]);
			
			 $this->display();
			}
		///电子商务实践列表
		///2014-4-9 17:07 nele 
	  public function show_ds_practice_list(){
			 $ds_practice=new Model("ds_practice");
	         $ds_practice_arr=$ds_practice->order('id desc')->select();
	         $this->assign('ds_practices',$ds_practice_arr);
             $this->display();
				}
	
	
	         ///电商资讯
		///2014-4-9 16:52 nele 
              public function show_ds_consult(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $ds_consult=new Model("ds_consult");
	   
	                 $ds_consult_arr=$ds_consult->where($data)->select();
	                 $this->assign('ds_consults',$ds_consult_arr[0]);
			 
			 $this->display();
			}
	    
		///电商资讯列表
		///2014-4-10 9：18 nele 
	     public function show_ds_consult_list(){
	         $ds_consult=new Model("ds_consult");
	         $ds_consult_arr=$ds_consult->order('id desc')->select();
	         $this->assign('ds_consults',$ds_consult_arr);
                 $this->display();
		        }	
				
				
				
		///社团活动列表
		///2014-4-10 9：37 nele 
	       public function show_activity_list(){
			 $club_activity=new Model("Club_activity");
	                 $club_activity_arr=$club_activity->order('id desc')->select();
	                 $this->assign('club_activities',$club_activity_arr);
                         $this->display();
		 }
		 
					
		///社团活动信息
		///2014-4-10 9：37 nele 
	       public function show_activity(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $club_activity=new Model("Club_activity");
	   
	                 $club_activity_arr=$club_activity->where($data)->select();
	                 $this->assign('club_activity',$club_activity_arr[0]);
			 
			 $this->display();
	       }

	       ///活动召集
	       ///2014-5-18 18：58 yyp
	       public function show_activity_call_list(){
			 $activity_call=new Model("activity_call");
	                 $activity_call_arr=$activity_call->order('id desc')->select();
	                 $this->assign('activity_call',$activity_call_arr);
                         $this->display();
		 }
		 
					
		///活动召集信息
		///2014-5-18 19：00 yyp
	       public function show_activity_call(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $activity_call=new Model("activity_call");
	   
	                 $activity_call_arr=$activity_call->where($data)->select();
	                 $this->assign('activity_call',$activity_call_arr[0]);
			 
			 $this->display();
	       }


	        ///大学生活动展示列表
	       ///2014-5-18 18：58 yyp
	       public function show_activity_show_list(){
			 $activity_show=new Model("activity_show");
	                 $activity_show_arr=$activity_show->order('id desc')->select();
	                 $this->assign('activity_show',$activity_show_arr);
                         $this->display();
		 }
		 
					
		///大学生活动展示
		///2014-5-18 19：00 yyp
	       public function show_activity_show(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $activity_show=new Model("activity_show");
	   
	                 $activity_show_arr=$activity_show->where($data)->select();
	                 $this->assign('activity_show',$activity_show_arr[0]);
			 
			 $this->display();
	       }

	        ///电商活动展示列表
	       ///2014-5-18 18：58 yyp
	       public function show_electric_activity_list(){
			 $electric_activity=new Model("electric_activity");
	                 $electric_activity_arr=$electric_activity->order('id desc')->select();
	                 $this->assign('electric_activity',$electric_activity_arr);
                         $this->display();
		 }
		 
					
		//电商活动展示
		///2014-5-18 19：00 yyp
	       public function show_electric_activity(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $activity_show=new Model("electric_activity");
	   
	                 $electric_activity_arr=$activity_show->where($data)->select();
	                 $this->assign('electric_activity',$electric_activity_arr[0]);
			 
			 $this->display();
	       }

	        ///电子商务课程列表
	       ///2014-5-18 18：58 yyp
	       public function show_ds_class_list(){
			 $ds_class=new Model("ds_class");
	                 $ds_class_arr=$ds_class->order('id desc')->select();
	                 $this->assign('ds_class',$ds_class_arr);
                         $this->display();
		 }
		 
					
		//电子商务课程
		///2014-5-18 19：00 yyp
	       public function show_ds_class(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $ds_class=new Model("ds_class");
	   
	                 $ds_class_arr=$ds_class->where($data)->select();
	                 $this->assign('ds_class',$ds_class_arr[0]);
			 
			 $this->display();
	       }

	        ///电子商务作业列表
	       ///2014-5-18 18：58 yyp
	       public function show_ds_homework_list(){
			 $ds_homework=new Model("ds_homework");
	                 $ds_homework_arr=$ds_homework->order('id desc')->select();
	                 $this->assign('ds_homework',$ds_homework_arr);
                         $this->display();
		 }
		 
					
		//电子商务作业
		///2014-5-18 19：00 yyp
	       public function show_ds_homework(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $ds_homework=new Model("ds_homework");
	   
	                 $ds_homework_arr=$ds_homework->where($data)->select();
	                 $this->assign('ds_homework',$ds_homework_arr[0]);
			 
			 $this->display();
	       }



	        ///职业技能实训列表
	       ///2014-5-18 18：58 yyp
	       public function show_skills_training_list(){
			 $skills_training=new Model("skills_training");
	                 $skills_training_arr=$skills_training->order('id desc')->select();
	                 $this->assign('skills_training',$skills_training_arr);
                         $this->display();
		 }
		 
					
		//职业技能实训
		///2014-5-18 19：00 yyp
	       public function show_skills_training(){
			 $id=$_GET["Id"];
			 $data['Id']=$id;
			 $skills_training=new Model("skills_training");
	   
	                 $skills_training_arr=$skills_training->where($data)->select();
	                 $this->assign('skills_training',$skills_training_arr[0]);
			 
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
		 
		 
		///网上项目具体信息展示列表
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
		 
		 
		 	 
		///网上项目具体信息展示列表
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


		 //网站制作内容列表
	 public function show_web_make_list(){
	          $web_make=new Model("web_make");
	          $web_make_arr=$web_make->order('id desc')->select();
	          $this->assign('web_make',$web_make_arr);
                  $this->display();
	 } 

		 //网站制作详细内容
	 public function show_web_make(){
		 $id=$_GET["Id"];
		 $data['Id']=$id;
		 $web_make=new Model("web_make");
	         $web_make_arr=$web_make->where($data)->select();
	         $this->assign('web_make',$web_make_arr[0]);	 
			 $this->display();
		 }

		 //关于我们
		 public function like_ours(){
		     $this->display();
		 }
		 		
	}
?>
