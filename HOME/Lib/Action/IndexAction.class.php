<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    
	
	
	public function index(){
		
		//得到最新八条创业资讯
	   $bc_info=new Model("Bc_information");
	   $bc_info_arr=$bc_info->switchModel("Adv")->order('Id desc')->top8();
	   $this->assign('bc_infos',$bc_info_arr);
	   
	   
	   
	   	//得到最新八条培训信息
	   $train_info=new Model("Train_information");
	   $train_info_arr=$train_info->switchModel("Adv")->order('Id desc')->top8();
	   $this->assign('train_infos',$train_info_arr);
	   
	   
	   	//得到最新八条电商资讯
	   $preferential_policy=new Model("Preferential_policy");
	   $preferential_policy_arr=$preferential_policy->switchModel("Adv")->order('Id desc')->top8();
	   $this->assign('preferential_policys',$preferential_policy_arr);
	   
	   
	   	//得到最新八条电商实践信息
	   $ds_practice=new Model("Ds_practice");
	   $ds_practice_arr=$ds_practice->switchModel("Adv")->order('Id desc')->top8();
	   $this->assign('ds_practices',$ds_practice_arr);
	   
	   
	   //得到最新八条网络上B2B资讯
	   $ds_consult=new Model("Ds_consult");
	   $condition['sort']=3;
	   $ds_consult_arr=$ds_consult->switchModel("Adv")->where($condition)->order('Id desc')->top6();
	   $this->assign('ds_b2b_consults',$ds_consult_arr);


        //得到最新八条网络上互联网金融
	   //$ds_consult=new Model("Ds_consult");
	   $condition['sort']=1;
	   $ds_consult_arr=$ds_consult->switchModel("Adv")->where($condition)->order('Id desc')->top6();
	   $this->assign('ds_www_consults',$ds_consult_arr);

         
	   //得到最新八条网络上网上购物
	   //$ds_consult=new Model("Ds_consult");
	   $condition['sort']=2;
	   $ds_consult_arr=$ds_consult->switchModel("Adv")->where($condition)->order('Id desc')->top6();
	   $this->assign('ds_buy_consults',$ds_consult_arr);
	   
	   
	   //得到最新三条社团活动召集
	   //$ds_consult=new Model("Ds_consult");
	   $club_activity=new Model("Club_activity");
	   $data['finished']=0;
	   $club_activity_arr=$club_activity->switchModel("Adv")->where($condition)->order('Id desc')->top3();
	   $this->assign('club_activity_arr',$club_activity_arr); 


       //得到优秀的创业例子
	   $outstanding_bc=new Model("Outstanding_bc");
	   $outstanding_bc_arr=$outstanding_bc->switchModel("Adv")->where($condition)->order('Id desc')->top3();
	   $this->assign('outstanding_bc_arr',$outstanding_bc_arr); 


       $this->display();
    }
}
