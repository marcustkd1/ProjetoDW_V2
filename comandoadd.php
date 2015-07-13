<?php
session_start();
if(!isset($_SESSION['logado'])){
	header('Location:tela-login.html');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	legend {
		background-color: #FFA500; width: 105%;
	}
	</style>
</head>
<body>
	<div style="background-color:#E97F02"><br>
	<div style="background-color:#FFF"><br>

<table width="800px" align="center">
	<tr>
		<td>
			<div align="center"><img src="config.jpg" width="200px"></div>
		</td>
		<td width="500px"><p align="justify">
		<h1><b>LINUX WEB CONFIG<b></h1>
		<p><b>Automatize tarefas em servidores Linux<b></p>
		</td>
	</tr>
</table>
</div></div>

<div style="background-color:#E97F02">
<table width="1000px" align="center">
	<tr>
		<td><b>
			HOME<b>
		</td>
		<td>
			<b>CONFIGURACAO IP<b>
		</td>
		<td>
			<b>ADICIONAR USUARIO<b>
		</td>
		<td>
			<b>EXIBIR PROCESSOS<b>
		</td>
	</tr>
</table>
</div>
	<br><br>
	<center>
		<h3>Adicionar Novo Usuário</h3>
		<br><br>
		<label for="user">Novo usuário</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="password">Senha</label>
		<input type="password" name="password" id="password">
		<br><br>
		<button>Enviar</button>
		<div id="result">
			O usuário foi criado com sucesso!
		</div>
		<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
		<script>
		$("#result").hide();
		$("button").click(function(){
			console.log('foi');
			var url = "processadduser.php?user="+$("#user").val()+"&password="+$("#password").val();
			$.getJSON(url, function(result){
				if (result.status == "sucess"){
					$("#result").show();
				}
			});
		});
		</script>
	</center>
</body>
</html>