<?php
session_start();
$connection = ssh2_connect('127.0.0.1', 22);
if(ssh2_auth_password($connection, $_POST['login'], $_POST['senha'])){
	$_SESSION['logado'] = true;
	header('Location:yindex.html');
}else{
	header('Location:tela-login.html');
}
?>