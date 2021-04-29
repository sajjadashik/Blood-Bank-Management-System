<?php
require_once '../../Models/db_connect.php';

$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;
$message = "";




if (isset($_POST["login"])) {

    if (empty($_POST["uname"])) {
        $err_uname = "Username Required";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }
    if (empty($_POST["pass"])) {
        $err_pass = "Password Required";
        $hassError = true;
    } else {
        $pass = htmlspecialchars($_POST["pass"]);
    }

    if ($hasError == false) {
        if (authenticateUser($uname, $pass)) {
            header("Location: ../../views/Receiver/user_home.php");
        } else {
            $message = "Wrong Username or Password!";
        }
    }
}
function authenticateUser($uname, $pass)
{
    $query = "select * from donor_info where username='$uname' and password='$pass'";
    $result = get($query);

    if (count($result) > 0) {
        session_start();
        $_SESSION['usertype'] = $result[0]['usertype'];
        $_SESSION['username'] = $result[0]["username"];
        setcookie("username", $result[0]["username"], time() + 6000);
        return true;
    }
    return false;
}


















// function checkUsernameValidity($uname)
// {
//     $query = "select * from users where username='$uname'";
//     $result = get($query);
//     if (count($result) > 0) {
//         return "false";
//     }
//     return "true";
// }
