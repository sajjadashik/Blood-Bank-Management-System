<?php
session_start();
include "../../Models/db_connect.php";


if(isset($_POST['type'])!= "" && $_POST['type']=="oldPasswordCheck") {

    $uname = $_SESSION["username"];
    $pass = $_POST['pass'];

    $query = ("SELECT * from user where username='$uname' and password='$pass'" );
    $user_list = get($query);
    echo json_encode($user_list);
}


if(isset($_POST['type'])!= "" && $_POST['type']=="changepassword") {

    $uname = $_SESSION["username"];
    $npass = $_POST['npass'];
    $opass = $_POST['opass'];

    $query = ("UPDATE user set password='$npass'  where username='$uname' and password='$opass'");
    $user_list = get($query);
    echo json_encode($user_list);
}
