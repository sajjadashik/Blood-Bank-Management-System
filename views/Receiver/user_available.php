<!DOCTYPE html>
<?php
include "user_main.php";
include "../../Models/db_connect.php";

$query = " SELECT * FROM blood_group";
$reult = get($query);
//session_start();
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
?>


<div class="otherpage">
	<h1>Available Stock</h1>
	<table border="1">
		<tr>
			<th>Blood Group</th>
			<th>Quantity (Bag)</th>
		</tr>
		<?php
		foreach ($reult as $row) {
			echo "<tr>";
			echo "<td>" . $row["Blood_group"] . "</td>";
			echo "<td>" . $row["Quantity"] . "</td>";
			echo "</tr>";
		}
		?>


	</table>
	<br>
	<h3>Request for Blood,</h3>

	<a href="user_sendreq.php" style="color: white;">
		<button style="width:20%; background-color:darkblue; color:white; border: 4px solid darkblue" name="button-edit" id="button-edit">
			Send Request
		</button>
	</a>

</div>