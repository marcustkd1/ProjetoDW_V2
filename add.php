<?php
if(isset($_GET["submit"])){
// print_r(var_dump($_GET));
include 'conexao.php';
$sql = "INSERT INTO user (name, password) VALUES ('{$_GET['name']}', '{$_GET['password']}')";
$pdo->exec($sql);
header("Location:2-lista-servers.html");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>LINUX WEB CONFIG</title>
</head>
<center>
	<body>
		<div align="center"><img src="/projetov1/imagem/config.jpg" width="200px"></div>
		<br><br>
		<br>
		<br>	
		<form action="">
		<label for="name">Name</label>
		<br><br>
		<input type="text" id="name" name="name"><br>
		<br>
		<label for="password">Password</label>
		<br><br>
		<input type="password" id="password" name="password"><br>
		<br>
		<input type="submit" name="submit" value="cadastrar">
		</form>
		<br>
	</center>
				
</body>
</html>