<?php


			

class network{
	private $ip;
	private $mask;
	private $gateway;
	private $dns;
	private $domin;
	private $radio;


	public function __construct(){
	}

	public function loadData($ip, $mask, $gateway, $dns, $domin, $radio){

		$this->ip = $ip;
		$this->mask = $mask;
		$this->gateway = $gateway;
		$this->dns = $dns;
		$this->domin = $domin;
		$this->radio = $radio;
	
	
	}


	public function request(){

		if( $this->radio == "estatico"){


		$network = "\n auto lo \n iface lo inet loopback \n\n auto eth0 \n iface eth0 inet static \n address {$this->ip} \n netmask {$this->mask} \n gateway {$this->gateway}";
		$resolv = "search {$this->dns}\nnameserver {$this->domin}";

		$command = "echo \"{$network}\" > /etc/network/interfaces";
		$command1 = "echo \"{$resolv}\" > /etc/resolv.conf";
	
		$connection = ssh2_connect('localhost', 22);
		ssh2_auth_password($connection, 'root', 'root');
		$stream = ssh2_exec($connection, $command);
		$stream = ssh2_exec($connection, $command1);
		
		}		
		
		if( $this->radio == "dinamico"){

		$network = "\n auto lo \n iface lo inet loopback \n\n auto eth0 \n iface eth0 inet dhcp";
		

		$connection = ssh2_connect('localhost', 22);
		ssh2_auth_password($connection, 'root', 'root');

		$stream = ssh2_exec($connection, $command);
		$stream = ssh2_exec($connection, $command1);
		$stream = ssh2_exec($connection, $command2);
		$stream = ssh2_exec($connection, $command3);
		$stream = ssh2_exec($connection, $command4);
		$stream = ssh2_exec($connection, $command5);
		$stream = ssh2_exec($connection, $command6);
		$stream = ssh2_exec($connection, $command7);

		}

		return json_encode(array("status"=>"sucess"));
		// shell_exec($command)
	}

}

// $u = new UserAdd();
// $u->loadData("sicrano", "123");
// echo $u->request();
