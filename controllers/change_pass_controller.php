<?php
require_once "../../Models/db_connect.php";

session_start();
if (!isset($_COOKIE['username'])) {
	header("Location:login.php");
 }else{
	if(isset($_SESSION['usertype'])){
		if ($_SESSION['usertype'] == "doner") {
			header("Location: doner_home.php");
		}
		elseif ($_SESSION['usertype'] == "admin") {
			header("Location: admin_home.php");
		}elseif ($_SESSION['usertype'] == "receiver") {
			
		}else{
			header("Location:login.php");
		}	
	}else{
		header("Location:login.php");
	}
}
$oldpass = "";
$err_oldpass = "";
$newpass = "";
$err_newpass = "";
$con_newpass="";
$err_con_newpass="";
$hasError="";
$uname = $_COOKIE['username'];



if (isset($_POST["confirm"])) {

    if (empty($_POST["oldpass"])) {
        $err_oldpass = "<br>&nbsp;&nbsp;*insert your old password";
        $hasError = true;
    
    } else {
        $oldpass = $_POST["oldpass"];
    }
    

    if (empty($_POST["newpass"])) {
        $err_newpass = "<br>&nbsp;&nbsp;*new Password is Required";
        $hasError = true;
    } else if (strlen($_POST["newpass"]) < 8) {
        $err_newpass = "<br>&nbsp;&nbsp;*Password should be at least 8 characters";
        $hasError = true;
    } else {
        $newpass = $_POST["newpass"];
    }

    if (empty($_POST["con_newpass"])) {
        $err_con_newpass = "<br>&nbsp;&nbsp;*Confirm Password is Required";
        $con_newpass = $_POST["cpass"];
        $hasError = true;
    } else {
        if ($_POST["pass"] == $_POST["con_newpass"]) {
            $con_newpass = $_POST["con_newpass"];
        } else {
            $err_con_newpass = "<br>&nbsp;&nbsp;*New Password Is Not Same";
            $hasError = true;
        }
    }



}


// function updatepass($uname,$pass)
// {

//     $query = "update user set password='$pass'  where username='$uname'";

//     execute($query);
// }

// function oldpass($uname)
// {
//     $query = "select * from user where username='$uname' ";
//     $result = get($query);
//     if (count($result) > 0) {
//         session_start();
//         $_SESSION['usertype'] = $result[0]['usertype'];
//         setcookie("username", $result[0]["username"], time() + 600);
//         return true;
//     }
//     return false;

    
// }
