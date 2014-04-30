<?php
    class LoginAction extends CommonAction{
		
	    /*实现用户登陆*/
		public function do_login(){
			 $user=$_POST['username'];
             $pwd=$_POST['pwd'];
			 $superpwd=$_POST['superpwd'];
			 $password=md5($pwd.$superpwd."電ふ啇務");
			 $condition['user']=$user;
			 $condition['password']=$password;
			 $condition['superpwd']=$superpwd;
			 $admin = new Model("Admin"); 
			$remember_arr=$admin->where($condition)->select();
			$count = count($remember_arr);
			if($count>0){
                //存储登录ip和登录时间
			    $ip= get_client_ip();
				$date['login_time']=date('Y-m-d H:i:s',time());
				$data['ip']=$ip;
				$admin->where($condition)->save($data);
				session_start();
				$_SESSION['admin']=$user; 
				echo '2';
			   }
			else{
				echo '1';
			}
           }			
		
		
		/*注销用户操作*/
		public function logout()
		{
			session('[destroy]'); // 销毁session
			cookie('username',null);//Cookie删除
			$this->display("Index:login");

		}	
	}
?>
