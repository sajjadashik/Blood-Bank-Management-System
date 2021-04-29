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
$hasError = false;
$name = "";
$err_name = "";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$cpass = "";
$err_cpass = "";
$email = "";
$err_email = "";
$phone = "";
$err_phone = "";
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$result = "";
$success="";

$uname = $_COOKIE['username'];

if (isset($_POST["edit"])) {
    if (empty($_POST["name"])) {
        $err_name = "<br>&nbsp;&nbsp;*Name is Required";
        $hasError = true;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }





    if (empty($_POST["email"])) {
        $err_email = "<br>&nbsp;&nbsp;*Please enter email";
        //$hasError = true;
    } else {
        $s = strpos($_POST["email"], "@");
        if ($s != false) {
            $t = strpos($_POST["email"], ".", $s + 1);
            if ($t != false) {
                $email = $_POST["email"];
                //$hasError = true;
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

    if (empty($_POST["street"])) {
        $err_street = "<br>&nbsp;&nbsp;*Street is Required";
        $hasError = true;
    } else {
        $street = $_POST["street"];
    }
    if (empty($_POST["city"])) {
        $err_city = "<br>&nbsp;&nbsp;City is Required";
        $hasError = true;
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $err_state = "<br>&nbsp;&nbsp;State is Required";
        $hasError = true;
    } else {
        $state = $_POST["state"];
    }

    if (empty($_POST["zip"])) {
        $err_zip = "*enter zip";
        $hasError = true;
    } else if (is_numeric($_POST["zip"]) == false) {
        $err_zip = "*Zip number must be digit";
        $hasError = true;
    } else {
        $zip = $_POST["zip"];
    }

    if ($hasError == false) {


        updateUser($name, $uname, $email, $phone, $street, $city, $state, $zip);
        $success="Profile Updated";
      //  header("Location: ../../views/Receiver/user_profile.php");
    }
}


function updateUser($name, $uname, $email, $phone, $street, $city, $state, $zip)
{

    $query = "update user set name='$name',phone='$phone',  street='$street', email='$email',state='$state', zip='$zip', city='$city' 
            ,street='$street'  where username='$uname'";

    execute($query);
}
?>