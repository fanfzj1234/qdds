<?php
   class MemberAction extends CommonAction{
	   public function index(){
		     $this->show();   
	   }
	   public function member(){
		   if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',2,'页面跳转中...');
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];

		    $member = new Model("Member");                        //用户成员
			import('ORG.Util.Page');// 导入分页类
            $count=$member->count();// 查询满足要求的总记录数
            $Page=new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
            $show=$Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $member->order('register_time')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
		    $this->display("index");
		   }
		   
		   
		   
	    public function member_cz(){
		$member = new Model("Member");                        //用户成员
		$ss=$_POST['ss'];
		$xz=$_POST['xz'];
		//$map[$xz] =$ss;
			import('ORG.Util.Page');// 导入分页类
            $count=$member->where($xz.'='.$ss)->count();// 查询满足要求的总记录数
            $Page=new Page($count,25);// 实例化分页类 传入总记录数和每页显示的记录数
            $show=$Page->show();// 分页显示输出
// 进行分页数据查询 注意limit方法的参数要使用Page类的属性
            $list = $member->order('register_time')->limit($Page->firstRow.','.$Page->listRows)->select();
            $this->assign('list',$list);// 赋值数据集
			$this->assign('page',$show);// 赋值分页输出
		    $this->display("index");
		
		}
		   
	   public function zhuce_xy(){
		   if(!$_SESSION['admin']&&(!(isset($_COOKIE['username']))))
             redirect('../Index/login',2,'页面跳转中...');
             if(!$_SESSION['admin'])
             $_SESSION['admin']=$_COOKIE['username'];
            $this->display();
	    }
		
		public function zhuce_xy_cl(){
		    $zcxy=$_POST['zcxy_text'];
			echo $zcxy;
		}
		
		public function hylx()
		{
			 $this->display();
			
		}
	   }	   
?>