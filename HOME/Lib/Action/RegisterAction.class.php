<?php
class RegisterAction extends CommonAction{
	//注册功能
	//header('Content-Type:text/html; charset=utf-8');
	public function register(){
	      $this->display();
	}
	public function do_register(){
		$data['username']=$_POST['username'];
		$pwd=$_POST['pwd'];
		$data['password']=md5($pwd.'涐噯齊');
            $member=M("member");
		$data['login_ip']=$ip;
		$data['login_time']=date('Y-m-d H:i:s',time());
		if($member->data($data)->add())
	      echo '2';
		else  echo '1';
			
	}
}
?>
