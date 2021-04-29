<?php
require_once "models/dbconfig.php";
$npass="";
$cpass="";
$err_pass="";
$err_cpass="";
$err_npass="";
$hasError=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["npass"])) {
        $err_npass = "*New Password is Required";
        $hasError = true;
    } else if (strlen($_POST["npass"]) < 8) {
        $err_npass = "*New Password should be at least 8 characters";
        $hasError = true;
    } else {
        $npass = $_POST["npass"];
    }
	if (empty($_POST["cpass"])) {
        $err_cpass = "*Confirm Password is Required";
        $cpass = $_POST["cpass"];
        $hasError = true;
    }
	else{
        if ($_POST["npass"] == $_POST["cpass"]) {
            $cpass = $_POST["cpass"];
        } else {
            $err_cpass = "*New Password & Confirm Password Is Not Same";
            $hasError = true;
        }
    }
	if($hasError==false)
	{
		$query = "update admin SET password='$npass' where username='admin'";
		
		$result = execute($query);
		header("Location: admin_home.php");
	}
}
	if(!isset($_COOKIE["uname"]))
	{ 
	 header ("Location:login.php");
	}
?>