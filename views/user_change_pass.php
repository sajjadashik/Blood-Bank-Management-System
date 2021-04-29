<!DOCTYPE html>
<?php
require_once "../../controllers/receiver_controller/change_pass_controller.php";
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="commonStyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../../javascript//change_pass.js"></script>

    <script>
        
    </script>

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

    <div class="header">
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
                <td> <b>Welcome,<?php echo $uname ?></b>
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
                <td class="menucell"><b><a href="user_change_pass.php">Change password</a></b></td>
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
    <form action="logout.php" method="post">
        <div class="otherpage">
            <h1>Change your Password</h1>
            <table>
                <tr>
                    <td><span>Old Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Password" id="opass" onkeyup="opassValidation()" value="" name="pass"><span style="color: red;" id="opass-error"><?php echo $err_oldpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>New Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="New Password" id="npass" onkeyup="npassValidation()" value="" name="cpass"><span style="color: red;" id="npass-error"><?php echo $err_newpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Confirm Password" id="cpass" onkeyup="cpassValidation()" value="" name="cpass"><span style="color: red;" id="cpass-error"><?php echo $err_con_newpass; ?> </span>
                    </td>
                </tr>
                <tr>

                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" id="button" name="confirm" type="button" value="Confirm" onclick="updatePassword()"></td>
                </tr>
                <tr>

            </table>
    </form>
    </div>

</body>

</html>