<!DOCTYPE html>
<html>

<head>

	<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">

</head>
<?php 
include 'donor_menu.php';

if (!isset($_COOKIE["uname"])){
	header("Location:login.php");
	
}
?>
<body style="background-color:rgb(219, 235, 241)">
	<table class="tab">
		<tr>
			<td align="center" colspan="12"> <b> "Every blood donor is a life saver"</b></td>
		</tr>
		<tr class="cell">
			<td align="center"><b>A+</b><br>Give to: A+, AB+<br>Receive from: A+/-, O+/-</b></td>
			<td align="center"><b>A-</b><br>Give to: A+/-, AB+/-<br>Receive from: A-, O-</b></td>
			<td align="center"><b>B+</b><br>Give to: B+, AB+<br>Receive from: B+/-, O+/-</b></td>
			<td align="center"><b>B-</b><br>Give to: B+/-, AB+/-<br>Receive from: B-, O-</b></td>
		</tr>
		<tr class="cell">
			<td align="center"><b>AB+</b><br>Give to: AB+<br>Receive from: Everyone</b></td>
			<td align="center"><b>AB-</b><br>Give to: AB+/-<br>Receive from: All negative group carrier</b></td>
			<td align="center"><b>O+</b><br>Give to: All positive group carrier<br>Receive from: O+/-</b></td>
			<td align="center"><b>O-</b><br>Give to: Everyone<br>Receive from: O-</b></td>
		</tr>


	</table>

</body>

</html>