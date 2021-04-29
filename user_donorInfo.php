<!DOCTYPE html>
<?php
include "user_main.php";
?>
<?php
$location = "";
include "../../Models/db_connect.php";
include "../../controllers/receiver_controller/doner_search_controller.php";

?>
<!-- <style>
	.ph {
		height: 100%;
		width: 200px;
		border: 2px solid rgb(182, 182, 182);
		padding: 5px;
		margin: 0px;
		border-radius: 10px;
	}
</style> -->
<script src="../../javascript/Search_doner.js"></script>


<div class="otherpage">
	<form action="" method="post">
		<table>
			<tr>
				<td>
					<h2>Search Donor:</h2>

			<tr>

				<td>
					<select id="bgroup" name="blood" onclick="bgroupValidation()">
						<option disabled selected value="">Blood Group</option>
						<option value="1">A+</option>
						<option value="2">A-</option>
						<option value="3">B+</option>
						<option value="4">B-</option>
						<option value="5">O+</option>
						<option value="6">O-</option>
						<option value="7">AB+</option>
						<option value="8">AB-</option>
					</select><span style="color: red;" id="blood-error"><?php echo $err_blood; ?></span>
				</td>


				</td>
				<td> <input class="ph" type="text" id="location" placeholder="Location" name="location"><span style="color: green;" id="location-error"><?php echo $err_location; ?> </span>
				</td>
				<td colspan="2" align="center"><input <input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" name="search" type="button" id="button" value="Search" onclick="search_donner()"></td>
			</tr>
		</table>
	</form>

	<table border="1">
		<thead>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
				<th>Gender</th>
				<th>Blood Group</th>
				<th>Street</th>
				<th>State</th>
				<th>Zip</th>
				<th>City</th>
			</tr>
		</thead>


		<tbody id="dataTable">
			<?php
			foreach ($result as $row) {
				echo "<tr>";
				echo "<td>" . $row["name"] . "</td>";
				echo "<td>" . $row["email"] . "</td>";
				echo "<td>" . $row["phone"] . "</td>";
				echo "<td>" . $row["gender"] . "</td>";
				echo "<td>" . $row["blood"] . "</td>";
				echo "<td>" . $row["street"] . "</td>";
				echo "<td>" . $row["state"] . "</td>";
				echo "<td>" . $row["zip"] . "</td>";
				echo "<td>" . $row["city"] . "</td>";
				echo "</tr>";
			}
			?>
		</tbody>



	</table>
</div>