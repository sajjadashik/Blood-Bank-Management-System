<?php
require_once '../../Models/db_connect.php';
$user_type = "";
$err_user_type = "";
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
$phonenumber = "";
$err_phonenumber = "";
$dob = "";
$err_dob = "";
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$gender = "";
$err_gender = "";
$blood = "";
$err_blood = " ";
$bday = "";
$byear = "";
$bmonth = "";
$err_bday = "";
$err_byear = "";
$err_bmonth = "";
$hasError = false;
$result="";


	if(isset($_POST["registration"])){

		
            if (empty($_POST["name"])) {
                $err_name = "<br>&nbsp;&nbsp;*Name is Required";
                $hasError = true;
            } else {
                $name = htmlspecialchars($_POST["name"]);
            }
            if (empty($_POST["uname"])) {
                $err_uname = "<br>&nbsp;&nbsp;*User Name Required";
                $hasError = true;
            } else if (strlen($_POST["uname"]) < 4) {
                $err_uname = "<br>&nbsp;&nbsp;*Username should be at least 4 characters";
                $hasError = true;
            } else {
                $uname = htmlspecialchars($_POST["uname"]);
            }
        
            if (empty($_POST["pass"])) {
                $err_pass = "<br>&nbsp;&nbsp;*Password is Required";
                $hasError = true;
            } else if (strlen($_POST["pass"]) < 1) {
                $err_pass = "<br>&nbsp;&nbsp;*Password should be at least 8 characters";
                $hasError = true;
            } else {
                $pass = $_POST["pass"];
            }
        
            if (empty($_POST["cpass"])) {
                $err_cpass = "<br>&nbsp;&nbsp;*Confirm Password is Required";
                $cpass = $_POST["cpass"];
                $hasError = true;
            } else {
                if ($_POST["pass"] == $_POST["cpass"]) {
                    $cpass = $_POST["cpass"];
                } else {
                    $err_cpass = "<br>&nbsp;&nbsp;*Password & Confirm Password Is Not Same";
                    $hasError = true;
                }
            }
        
        
            if (empty($_POST["email"])) {
                $err_email = "<br>&nbsp;&nbsp;*Please enter email";
            } else {
                $s = strpos($_POST["email"], "@");
                if ($s != false) {
                    $t = strpos($_POST["email"], ".", $s + 1);
                    if ($t != false) {
                        $email = $_POST["email"];
                    } else {
                        $err_email = "<br>&nbsp;&nbsp;*Invalid email";
                    }
                } else {
                    $err_email = "<br>&nbsp;&nbsp;*Invalid email";
                }
            }
        
        
            if (empty($_POST["phonenumber"])) {
                $err_phonenumber = "<br>&nbsp;&nbsp;Phone Number is Required";
                $hasError = true;
            } else if (strlen($_POST["phonenumber"]) == 10) {
                $err_phonenumber = "<br>&nbsp;&nbsp;*Phone Number should be 11 characters";
                $hasError = true;
            } else {
                $phonenumber = $_POST["phonenumber"];
            }
        
        
            if ( empty($_POST["bday"]) ||($_POST["bday"]) == "Day") {
                $err_bday = "<br>&nbsp;&nbsp;*Day, month and year is required";
                $hasError = true;
            } else {
                $bday = $_POST["bday"];
            }
        
            if (empty($_POST["bmonth"]) || ($_POST["bmonth"]) == "Month" ) {
                $err_bmonth = "*Please select Month";
                $hasError = true;
            } else {
                $bmonth = $_POST["bmonth"];
            }
        
            if (empty($_POST["byear"]) || ($_POST["byear"]) == "Year") {
                $err_byear = "*Please select Year";
                $hasError = true;
            } else {
                $byear = $_POST["byear"];
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
                $err_zip = "<br>&nbsp;&nbsp;Zip is Required";
                $hasError = true;
            } else {
                $zip = $_POST["zip"];
            }
        
            if (empty($_POST["blood"])) {
                $err_blood = "<br>&nbsp;&nbsp;Blood Group is Required";
                $hasError = true;
            } else {
                $blood = $_POST["blood"];
            }
        
        
            if (empty($_POST["user_type"])) {
                $err_user_type = "<br>&nbsp;&nbsp;User type is Required";
                $hasError = true;
            } else {
                $user_type = $_POST["user_type"];
            }
        
        
            if (empty($_POST["gender"])) {
                $err_gender = "<br>&nbsp;&nbsp;Gender is Required";
                $hasError = true;
            } else {
                $gender = $_POST["gender"];
            }

            if($hasError == false){
                insertUser($user_type,$name,$uname,$pass,$email,$phonenumber,
                $gender,$blood,$street,$state,$zip,$city,$bday,$bmonth,$byear);

                $result="Successfully regesterd";
            }
        
        }

        function insertUser($user_type,$name,$uname,$pass,
        $email,$phonenumber,$gender,$blood,$street,$state,$zip,$city,$bday,$bmonth,$byear){
            $query = "insert into user (usertype, name, username, password, email, phone, gender, blood, street, state, zip, city, day, month, year) 
                VALUES ('$user_type','$name','$uname','$pass', '$email', '$phonenumber', '$gender', '$blood', '$street', '$state', '$zip', '$city', '$bday', '$bmonth', '$byear')";
            execute($query);
        

           
        }

	
    ?>