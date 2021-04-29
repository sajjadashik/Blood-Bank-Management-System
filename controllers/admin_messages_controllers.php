<?php
require_once "models/dbconfig.php";
$rmessage="";
$err_rmessage="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
		if(empty($_POST["rmessage"]))
		{
			$err_rmessage="Message is Required";
			$hasError=true;
		}
		else
		{
			$rmessage=$_POST["rmessage"];
		}
		
   }
function getallmessages()
{
$query = "select * from messages";
$result = get($query);
return $result;
}
if(!isset($_COOKIE["uname"]))
 { 
	 header ("Location:login.php");
 }
?>