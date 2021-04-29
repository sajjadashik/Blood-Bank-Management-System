<?php

require_once "../../Models/db_connect.php";
session_start();
if (!isset($_COOKIE['username'])) {
	header("Location: ../../views/Receiver/login.php");
} else {
	if (isset($_SESSION['usertype'])) {
		if ($_SESSION['usertype'] == "doner") {
			header("Location: doner_home.php");
		} elseif ($_SESSION['usertype'] == "admin") {
			header("Location: admin_home.php");
		} elseif ($_SESSION['usertype'] == "receiver") {
		} else {
			header("Location: ../../views/Receiver/login.php");
		}
	} else {
		header("Location: ../../views/Receiver/login.php");
	}
}



$hasError = false;
$blood = "";
$err_blood = "";
$location="";
$err_location="";

$uname = $_COOKIE['username'];
$result = array();
$query = " SELECT name,email,phone,gender,blood,street,state,zip,city FROM user where usertype='doner'";
$result = get($query);

// if (isset($_POST["search"])) {
// 	if (empty($_POST["blood"])) {
// 		$err_blood = "<br>*Blood group reqquired";
// 		$hasError = true;
// 	} else {
// 		$blood = $_POST["blood"];
// 	}

//     if (empty($_POST["location"])) {
// 		$location="";
// 	} else {
// 		$location = $_POST["location"];
// 	}


// 	if ($hasError == false && $blood != "") {

// 		$result =  searchBlood($blood, $location);
// 	}
// }

// function searchBlood($blood, $location)
// {
// 	$query = "SELECT * from user where blood='$blood' AND city LIKE '%$location%' AND usertype='doner' ";
// 	echo $query;
// 	return get($query);
// }


// if(isset($_POST['type'])!= "" && $_POST['type']=="search") {

// //  $uname = $_SESSION["username"];
//    $blood = $_POST['bgroup'];
//    $location ="";

//     $query = ("SELECT * from user where blood='$blood' AND city LIKE '%$location%' AND usertype='doner' ");
//     $donner_list = get($query);
//     echo json_encode($donner_list);
// }


?>