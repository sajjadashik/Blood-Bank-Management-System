<?php
session_start();
include "../../Models/db_connect.php";



if(isset($_POST['type'])!= "" && $_POST['type']=="search") {

if ($_POST['bgroup'] == 1) {
    $blood = "A+";
}
if ($_POST['bgroup'] == 2) {
    $blood = "A-";
}
if ($_POST['bgroup'] == 3) {
    $blood = "B+"; 
}
if ($_POST['bgroup'] == 4) {
    $blood = "B-";
}
if ($_POST['bgroup'] == 5) {
    $blood = "O+";
}
if ($_POST['bgroup'] == 6) {
    $blood = "O-";
}
if ($_POST['bgroup'] == 7) {
    $blood = "AB+";
}
if ($_POST['bgroup'] == 8) {
    $blood = "AB-";
}

$location = $_POST['location'];

    $query = ("SELECT * from user where blood='$blood' AND city LIKE '%$location%' AND usertype='doner' ");
    $donner_list = get($query);
    echo json_encode($donner_list);
}
