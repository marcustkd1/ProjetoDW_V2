<?php
class UserAdd{
	private $user;
	private $password;
	public function __construct(){
	}
	public function loadData($user, $password){
		$this->user = $user;
		$this->password = $password;
	}
	public function request(){
		$command = "/usr/sbin/useradd {$this->user} -p {$this->password}";
		$connection = ssh2_connect('localhost', 22);
		ssh2_auth_password($connection, 'root', 'root');
		$stream = ssh2_exec($connection, $command);
// shell_exec($command);
		return json_encode(array("status"=>"sucess"));
	}
}
// $u = new UserAdd();
// $u->loadData("sicrano", "123");
// echo $u->request();