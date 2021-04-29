<!DOCTYPE html>
<?php


session_start();
if (!isset($_COOKIE['username'])) {
	header("Location:login.php");
} elseif (isset($_SESSION['usertype'])) {
	if ($_SESSION['usertype'] == "doner") {
		header("Location: ../Doner/doner_home.php");
	} elseif ($_SESSION['usertype'] == "admin") {
		header("Location: ../Admin/admin_home.php");
	} elseif ($_SESSION['usertype'] == "receiver") {
	}
} else {
	header("Location:login.php");
}
$uname = $_COOKIE['username'];
?>

<html>

<head>

	<link rel="stylesheet" type="text/css" href="commonStyle.css">

</head>

<body style="background-color:rgb(219, 235, 241)">

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
				<td> <b>Welcome, <?php echo $uname ?></b>
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

</body>

</html>