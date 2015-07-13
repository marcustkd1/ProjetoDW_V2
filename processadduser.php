<?php
require "adduser.php";
$user = new UserAdd();
$user->loadData($_GET["user"], $_GET["password"]);
header("Content-type:application/json");
echo $user->request();
?>