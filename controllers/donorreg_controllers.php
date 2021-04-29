<?php
require_once "models/dbconfig.php";
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
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$gender="";
$err_gender = "";
$blood = "";
$err_blood = "";
$day = "";
$err_day = "";
$month = "";
$err_month = "";
$year = "";
$err_year = "";
$haserror=false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err_name = "<br>&nbsp;&nbsp;*Name Required";
        $hasError = true;
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["uname"])) {
        $err_uname = "<br>&nbsp;&nbsp;*User Name Required";
        $hasError = true;
    } else if (strlen($_POST["uname"]) < 6) {
        $err_uname = "<br>&nbsp;&nbsp;*Username should be at least 6 characters";
        $hasError = true;
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }

    if (empty($_POST["pass"])) {
        $err_pass = "<br>&nbsp;&nbsp;*Password Required";
        $hasError = true;
    } else if (strlen($_POST["pass"]) < 8) {
        $err_pass = "<br>&nbsp;&nbsp;*Password should be at least 8 characters";
        $hasError = true;
    } else {
        $pass = $_POST["pass"];
    }
    
    if (empty($_POST["cpass"])) {
        $err_cpass = "<br>&nbsp;&nbsp;*Confirm Password Required";
        $cpass = $_POST["cpass"];
        $hasError = true;
    }else{
        if ($_POST["pass"] == $_POST["cpass"]) {
            $cpass = $_POST["cpass"];
        } else {
            $err_cpass = "<br>&nbsp;&nbsp;*Password & Confirm Password Is Not Same";
            $hasError = true;
        }
    }
    
     if (empty($_POST["email"])) {
        $err_email = "*Email Required";
		$haserror=true;
     
    }
	else if(!strpos($_POST["email"],"@"))
        {
           $err_email="Invalid Email, @ Required";
        }
		else {
			$a  = strpos($_POST["email"],"@");
            if(!strpos($_POST["email"],".",$a))
            {
                $err_email="Invalid Email, .(dot) required";
            }
            else
            {
                $email=htmlspecialchars($_POST["email"]);
            }
		}
		
    if (empty($_POST["phonenumber"])) {
        $err_phonenumber = "*Phone Number Required";
		$haserror=true;
	}
	else if(!is_numeric($_POST["phonenumber"]))
         {
            $err_phonenumber="*Invalid Phone Number";
         }
    else if (strlen($_POST["phonenumber"]) == 10) {
        $err_phonenumber = "*Phone Number should be 11 characters";
		$haserror=true;
        
    } else {
        $phonenumber = $_POST["phonenumber"];
    }
   if (empty($_POST["day"])) {
        $err_day = "*Day Required";
		$haserror=true;
    }
	else{
        $day = $_POST["day"];
    }
	if (empty($_POST["month"])) {
        $err_month = "*Month Required";
		$haserror=true;
       
    }else{
        $month = $_POST["month"];
    }
	if (empty($_POST["year"])) {
        $err_year = "*Year Required";
		$haserror=true;
       
    }else{
        $year = $_POST["year"];
    }
    if (empty($_POST["street"])) {
        $err_street = "*Street Required";
		$haserror=true;
        
    } else {
        $street = $_POST["street"];
    }
    if (empty($_POST["city"])) {
        $err_city = "*City Required";
		$haserror=true;
        
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $err_state = "*State Required";
		$haserror=true;
        
    } else {
        $state = $_POST["state"];
    }
    if (empty($_POST["zip"])) {
        $err_zip = "*Zip Required";
		$haserror=true;
	}
    else if(!is_numeric($_POST["zip"]))
         {
            $err_zip="*Zip Must be in Number";
			$haserror=true;
         }	
     else {
        $zip = $_POST["zip"];
    }
   if (!isset($_POST["gender"])) {
        $err_gender = "*Gender Required";
		$haserror=true;
    }
	else
	{
		$gender = $_POST["gender"];
	}

    if (empty($_POST["blood"])) {
        $err_blood = "*Blood Group Required";
		$haserror=true;
       
    }else{
        $blood = $_POST["blood"];
    }
  if($haserror==false)
	{
		$query = "insert into donor_info values (NULL,'$name','$uname','$pass','$cpass','$email','$phonenumber','$day','$month','$year','$gender','$blood','$street','$city','$state','$zip')";
        $result = execute($query);
		header("Location: login.php");
	}
	else
	{
		echo "Value not Inserted";
	}
}
?>