<!DOCTYPE html>
<html>

<?php
require_once "../../Models/db_connect.php";
//session_start();

if (!isset($_COOKIE['username'])) {
	header("Location:login.php");
} else {
	if (isset($_SESSION['usertype'])) {
		if ($_SESSION['usertype'] == "doner") {
			header("Location: doner_home.php");
		} elseif ($_SESSION['usertype'] == "admin") {
			header("Location: admin_home.php");
		} elseif ($_SESSION['usertype'] == "receiver") {
		} else {
			header("Location:login.php");
		}
	} else {
		header("Location:login.php");
	}
}
$uname = $_COOKIE['username'];
$name = "";
$err_name = "";
$email = "";
$err_email = "";
$phone = "";
$err_phone = "";
$messsage = "";
$err_message = "";
$hasError=false;
$success="";

if(isset($_POST["button-edit"])){

	if (empty($_POST["name"])) {
		$err_name = "<br>&nbsp;&nbsp;*Name is Required";
		$hasError = true;
	} else {
		$name = htmlspecialchars($_POST["name"]);
		
	}
	if (empty($_POST["email"])) {
		$err_email = "<br>&nbsp;&nbsp;*Email required";
		$hasError = true;
	} else {
		$s = strpos($_POST["email"], "@");
		if ($s != false) {
			$t = strpos($_POST["email"], ".", $s + 1);
			if ($t != false) {
				$email = $_POST["email"];
			} else {
				$err_email = "<br>&nbsp;&nbsp;*Invalid email";
				$hasError = true;
			}
		} else {
			$err_email = "<br>&nbsp;&nbsp;*Invalid email";
			$hasError = true;
		}
	}
	if (empty($_POST["phone"])) {
		$err_phone = "<br>&nbsp;&nbsp;*Enter phone number";
		$hasError = true;
	} else if (is_numeric($_POST["phone"]) == false) {
		$err_phone = "<br>&nbsp;&nbsp;*Please enter digit";
		$hasError = true;
	} else {
		$phone = $_POST["phone"];
	}
	if (empty($_POST["message"])) {
		$err_message = "<br>&nbsp;&nbsp;*Message is Required";
		$hasError = true;
	} else {
		$messsage = $_POST["message"];
	}

	if ($hasError == false) {
		sendMessage(
			
			$name,
			$email,
			$phone,
			$messsage
		);

		$success = "Message sent";
	}
}

function sendMessage(
	
	$name,
	$email,
	$phone,
	$messsage
) {
	$query = "insert into message (name, email, phone, message) 
		VALUES ('$name','$email', '$phone', '$messsage')";
	execute($query);
	
}
?>