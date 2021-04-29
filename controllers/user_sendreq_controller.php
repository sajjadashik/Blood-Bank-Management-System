<!DOCTYPE html>


<?php
require_once "../../Models/db_connect.php";

session_start();
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
$phone = "";
$err_phone = "";
$blood = "";
$err_blood = "";
$quantity = "";
$err_quantity = "";
$hname = "";
$err_hname = "";
$hlocation = "";
$err_hlocation = "";
$result = "";
$success = "";
$hasError = false;



if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$err_name = "<br>&nbsp;&nbsp;*Name is Required";
		$hasError = true;
	} else {
		$name = htmlspecialchars($_POST["name"]);
	}


	if (empty($_POST["phone"])) {
		$err_phone = "<br>&nbsp;&nbsp;Phone Number is Required";
		$hasError = true;
	} else if (strlen($_POST["phone"]) == 10) {
		$err_phone = "<br>&nbsp;&nbsp;*Phone Number should be 11 characters";
		$hasError = true;
	} else {
		$phone = $_POST["phone"];
	}
	

	if (empty($_POST["blood"])) {
		$err_blood = "<br>&nbsp;&nbsp;Blood Group is Required";
		$hasError = true;
	} else {
		$blood = $_POST["blood"];
	}
	if (!isset($_POST["quantity"])) {
		$err_quantity = "<br>&nbsp;&nbsp;*Quantity is Required";
		$hasError = true;
	}
	else
	{
		$quantity=$_POST["quantity"];
	}
	if (empty($_POST["hname"])) {
		$err_hname = "<br>&nbsp;&nbsp;*Hospital Name is Required";
		$hasError = true;
	} else {
		$hname = htmlspecialchars($_POST["hname"]);
	}
	if (empty($_POST["hlocation"])) {
		$err_hlocation = "<br>&nbsp;&nbsp;*Hospital Location is Required";
		$hasError = true;
	} else {
		$hlocation = htmlspecialchars($_POST["hlocation"]);
	}
	// if (!$hasError) {
	// 	header("Location: user_home.php");
	// }

	if ($hasError == false) {
		sendRequest(
			$name,
			$phone,
			$blood,
			$quantity,
			$hname,
			$hlocation
		);

		$success = "Request sent";
	}
}

function sendRequest(
	$name,
	$phone,
	$blood,
	$quantity,
	$hname,
	$hlocation
) {
	$query = "insert into request (name, phone, bloodGroup, quantity, hospitalName, hospitalLocation) 
			VALUES ('$name','$phone','$blood','$quantity', '$hname', '$hlocation')";
	execute($query);
}

?>