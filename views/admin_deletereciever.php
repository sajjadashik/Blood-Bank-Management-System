<?php
require_once "models/dbconfig.php";
$id=$_GET["id"];
$query = "delete from reciever_info where id=$id";
$result = execute($query);
header("Location: admin_recieverInfo.php");
?>