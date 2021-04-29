<?php
	require_once 'controllers/admin_donor_controllers.php';
	$username=$_GET["uname"];
	$result = checkuname($username);
	echo $result;
?>