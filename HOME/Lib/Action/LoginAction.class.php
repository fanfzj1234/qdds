<?php
    class LoginAction extends CommonAction{
		
	    /*实现用户登陆*/
		public function do_login(){
		/*	if($_SESSION['verify'] != md5($_POST['code'])) {
                 echo '0';
		}else{  */  
			 $username=$_POST['username'];
                         $pwd=$_POST['pwd'];
			 $member=new Model("Member");
            
			$condition['username']=$username;
			$condition['password']=md5($pwd.'涐噯齊');
			$remember_arr=$member->where($condition)->select();
			$count = count($remember_arr);
			if($count>0){
				$ip= get_client_ip();
				$data['login_ip']=$ip;
				$data['login_time']=date('Y-m-d H:i:s',time());
				$member->where($condition)->save($data);
				$_SESSION['member']=$remember_arr[0];
				echo '2';     
			}
			else{
				echo '1';
			}
                       			
		}
		
		/*注销用户操作*/
		public function  do_logout(){
			unset($_SESSION['member']);
		        //$this->success("注销成功");
			$this->display("Index:index");
			}	
	}
?>
