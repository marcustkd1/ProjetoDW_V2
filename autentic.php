<?php
include 'conexao.php';

if ($_GET['name'] == "" || $_GET['password'] == ""){
header("Location:login.html");
}
if ($_GET['name'] != "" && $_GET['password'] != ""){
$resultSet = $pdo->query("SELECT name FROM user WHERE name = '{$_GET['name']}'");
$resultSet1 = $pdo->query("SELECT password  FROM user WHERE password = '{$_GET['password']}'");
$id = $pdo->query("SELECT password  FROM user WHERE password = '{$_GET['password']}'");
}

foreach($resultSet->fetchAll(PDO::FETCH_ASSOC) as $user){
foreach ($user as $field) { 
$nome = $field;
} 
} 
foreach($resultSet1->fetchAll(PDO::FETCH_ASSOC) as $user){
foreach ($user as $field) { 
 $senha = $field;
} 

}
if ($nome == $_GET['name'] && $senha == $_GET['password']){
	header("Location:2-lista-servers.html");
}
if ($nome != $_GET['name'] || $senha != $_GET['password']){
	header("Location:login.html");
}
?>

