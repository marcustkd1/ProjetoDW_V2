<?php
	      
	require "editor.php";
	$network = new network();
	$network->loadData($_GET["ip"], $_GET["mask"], $_GET["gateway"], $_GET["dns"], $_GET["domin"], $_GET["teste"]);
	header("Content-type:application/json");
	echo $network->request();
?>