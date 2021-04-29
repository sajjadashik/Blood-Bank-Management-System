<!DOCTYPE html>
<?php
include("../../Models/db_connect.php");
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
$uname = $_COOKIE['username'];

$name = $email = $phone = $result = "";


$querry = "SELECT * from user WHERE username='$uname'";
$result = get($querry);

if (count($result) < 1) {
    $message = "User does not exist!";
} else {
    $uname = $result[0]['username'];
    $name = $result[0]['name'];
    $email = $result[0]['email'];
    $phone = $result[0]['phone'];
}
?>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="commonStyle.css">
    
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: rgba(27, 31, 34, 0.85);
            ;
            overflow: hidden;
        }

        .box {
            width: 380px;
            height: 540px;
            background: #000;
            color: #fff;
            top: 50%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 70px 30px;
        }

        h1 {
            margin: 0;
            padding: 0 0 20px;
            text-align: center;
            font-size: 30px;

        }

        input[type="text"],
        input[type="password"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            box-sizing: border-box;
            /*padding: 12px 5px;*/
            background: rgba(46, 45, 45, 0.1);
            outline: none;
            border: none;
            border-bottom: 1px dotted #fff;
            color: #fff;
            border-radius: 5px;
            margin: 2px;
            font-weight: bold;
            font-size: 22px;
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
    <div class="box">
        <form action="user_profile.php">
            <h1>Profile Info <i class="fas fa-users"></i></h1>
            <p>User Name</p><br>
            <input type="text" name="uname" disabled value="<?php echo $uname; ?>"><br>
            <p>Full Name</p><br>
            <input type="text" name="name" disabled value="<?php echo $name; ?>"><br>
            <p>Email Address <i class="far fa-envelope"></i></p><br>
            <input type="email" name="email" disabled value="<?php echo $email; ?>"><br>
            <p>Phone</p><br>
            <input type="number" name="nid" disabled value="<?php echo $phone; ?>"><br>



        </form>
    </div>
</body>

</html>