<?php
require_once 'models/dbconfig.php';

$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$hasError = false;
$err_message = "";
$admin = array("admin" => "1234");

function checkuser($uname, $pass)
{
    $query = "select * from donor_info where username='$uname' and password='$pass'";
    $result = get($query);

    if (count($result) > 0) {
       
        return true;
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["uname"])) {
        $err_uname = "*Username Required";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }
    if (empty($_POST["pass"])) {
        $err_pass = "*Password Required";
        $hassError = true;
    } else {
        $pass = htmlspecialchars($_POST["pass"]);
    }
    if ($hasError == false) {
        if (checkuser($uname, $pass)) {
			 setcookie("uname", $uname, time() + 300);
            header("Location: DonorHome.php");
        } else {
            $err_message = "*Invalid Username or Password";
        }
    }
}
?>