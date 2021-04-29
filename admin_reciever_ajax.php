<?php
	require_once 'controllers/admin_reciever_controllers.php';
	$username=$_GET["uname"];
	$res = checkuname($username);
	echo $res;
?>