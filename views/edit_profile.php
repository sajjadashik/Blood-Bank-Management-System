<!DOCTYPE html>
<?php
require_once "../../controllers/receiver_controller/edit_profile_controller.php";

$uname = $_COOKIE['username'];

$name = $street = $city = $phone = $zip = $state = $email = $result = "";



$querry = "SELECT * from user WHERE username='$uname'";
$result = get($querry);

if (count($result) < 1) {
    $message = "User does not exist!";
} else {
    $uname = $result[0]['username'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $phone = $result[0]['phone'];
    $state = $result[0]['state'];
    $zip = $result[0]['zip'];
    $city = $result[0]['city'];
    $street = $result[0]['street'];
}
?>

<html>

<head>
    <link rel="stylesheet" type="text/css" href="commonStyle.css">
    <link rel="stylesheet" type="text/css" href="regStyle.css">
    <script src="../../javascript/edit_profile.js"></script>
    <style>
        .ph {
            height: 100%;
            width: 200px;
            border: 2px solid rgb(182, 182, 182);
            padding: 5px;
            margin: 0px;
            border-radius: 10px;
        }
    </style>

</head>

<body style="background-color:rgb(219, 235, 241);">

    <div class="header" style="background-color: mediumaquamarine;">
        <table>
            <tr>
                <td><img id="element1" src="Blood_Old.png" height="50px" width="50px"></td>
                <td><b>Sheccha<br>Blood<br>Bank</b></td>
            </tr>
        </table>
    </div>
    <div align="right" class="rightinfo">
        <table>
            <tr>
                <td> <b style="color: black;">Welcome, <?php echo $uname ?></b>
                    <a href="logout.php"> <img id="element3" src="logout.png" height="25px" width="25px"></a>
                </td>
            </tr>
        </table>
    </div>

    <div class="menu">
        <table>
            <tr align="center">
                <td class="menucell"><b><a href="user_profile.php">Profile</a></b></td>
            </tr>
            <tr align="center">
                <td class="menucell"><b><a href="edit_profile.php">Edit Profile</a></b></td>
            </tr>
            <tr align="center">
                <td class="menucell"><b><a href="user_change_pass.php">Change Password</a></b></td>
            </tr>

            <tr align="center">
                <td class="menucell"><b><a href="user_sendreq.php">Send Request</a></b></td>
            </tr>
            <tr align="center">
                <td class="menucell"><b><a href="user_donorInfo.php">Donor List</a></b></td>
            </tr>
            <tr align="center">
                <td class="menucell"><b><a href="user_available.php">Available Stock</a></b></td>
            <tr align="center">
                <td class="menucell"><b><a href="sendmessage.php">Contact Us</a></b></td>
            </tr>
        </table>
    </div>
    <div align="center" class="editbox">
        <form action="edit_profile.php" method="post">


            <h1 style="color: darkblue;">Edit Profile</h1>
            <table>

                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input class="ph" type="text" id="name" placeholder="Name" onkeyup="nameValidation()" value="<?php echo $name; ?>" name="name"><span style="color: green;" id="name-error"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input class="ph" type="text" id="uname" placeholder="Username" disabled value="<?php echo $uname; ?>" name="uname"><span style="color: green;"><?php echo $err_uname; ?> </span>
                    </td>
                </tr>

                <td><span>Email</span></td>
                <td>: <input class="ph" type="text" id="email" placeholder="Email" onkeyup="emailValidation()" value="<?php echo $email; ?>" name="email"><span style="color: green;" id="email-error"><?php echo $err_email; ?> </span>
                </td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input class="ph" type="text" id="phone" placeholder="Phone Number" onkeyup="phoneValidation()" value="<?php echo $phone; ?>" name="phone"><span style="color: green;" id="phone-error"><?php echo $err_phone; ?></span>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input class="ph" type="text" id="street" placeholder="Street Address" onkeyup="streetValidation()" value="<?php echo $street; ?>" name="street"><span style="color: green;" id="street-error"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" id="city" placeholder="City" onkeyup="cityValidation()" value="<?php echo $city; ?>" name="city"><span style="color: green;" id="city-error"><?php echo $err_city; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" id="state" placeholder="State" onkeyup="stateValidation()" value="<?php echo $state; ?>" name="state"><span style="color: green;" id="state-error"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" id="zip" placeholder="zip" onkeyup="zipValidation()" value="<?php echo $zip; ?>" name="zip"> <span style="color: green;" id="zip-error"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
                
                <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" name="edit" type="submit" id="button-edit" value="Edit Confirm"></td>
                </tr>
                <tr>

                    <td colspan="2" align="center"> <h3 style="color: green;"><?php echo $success;?></h3></td>
                </tr>
            </table>

        </form>
    </div>
</body>

</html>