<!DOCTYPE html>



<?php
include 'user_main.php';
require_once "../../controllers/receiver_controller/user_sendreq_controller.php";



$uname = $_COOKIE['username'];
$name = $email = $phone="";



$querry = "SELECT * from user WHERE username='$uname'";
$result = get($querry);

if (count($result) < 1) {
	$message = "User does not exist!";
} else {

	$name = $result[0]['name'];
	$phone = $result[0]['phone'];
}
?>


<script src="../../javascript/send_req.js">
	
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

<form action="" method="post">
	<div class="otherpage">
		<h1>Send Request</h1>
		<table>
			<tr>
				<td><Span>Name</Span></td>
				<td>: <input class="ph" id="name" type="text" placeholder="Name" onkeyup="nameValidation()" value="<?php echo $name; ?>" name="name"> <span style="color: red;" id="name-error"><?php echo $err_name; ?> </span><br>
				</td>
			</tr>
			<tr>
				<td><Span>Phone Number</Span></td>
				<td>: <input class="ph" id="phone" type="text" placeholder="Phone Number" onkeyup="phoneValidation()" value="<?php echo $phone; ?>" name="phone">
					<span style="color: red;" id="phone-error"><?php echo $err_phone; ?></span>
				</td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td>:
					<select id="bgroup" name="blood" onclick="bgroupValidation()" value="">
						<option value="9" disabled selected>Choose</option>
						<option value="A+">A+</option>
						<option value="A-">A-</option>
						<option value="B+">B+</option>
						<option value="B-">B-</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
						<option value="AB+">AB+</option>
						<option value="AB-">AB-</option>
					</select><span style="color: red;" id="bgroup-error"><?php echo $err_blood; ?></span><br>
				</td>
			</tr>
			<tr>
				<td><span>Quantity</span></td>
				<td>:
					<select id="quantity" name="quantity" onclick="quantityValidation()" value="">
						<option value="4" disabled selected>Choose quantity</option>
						<option value="1"> 1 bag</option>
						<option value="2"> 2 bag</option>
						<option value="3"> 3 bag </option>

					</select><span style="color: red;" id="quantity-error"><?php echo $err_quantity; ?></span><br>
				</td>
			</tr>

			</tr>
			<tr>
				<td><br><Span>Hospital Name</Span></td>
				<td>: <input class="ph" id="hname" onkeyup="hnameValidation()" type="text" placeholder="Hospital Name" value="<?php echo $hname; ?>" name="hname"> <span style="color: red;" id="hname-error"><?php echo $err_hname; ?> </span> <br>
			</tr>
			<td><Span>Hospital Location</Span></td>
			<td>: <input class="ph" id="hlocation" onkeyup="hlocationValidation()" type="text" placeholder="Hospital Location" value="<?php echo $hlocation; ?>" name="hlocation"> <span style="color: red;" id="hlocation-error"><?php echo $err_hlocation; ?> </span> <br>
				</tr>
				<tr>
					<td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue"name="button-edit" type="submit" id="button-edit"  value="Send"></td>
				</tr>
				<tr>

				<td colspan="2" align="center">
					<h3 style="color: green;"><?php echo $success; ?></h3>
				</td>
			</tr>

		</table>
	</div>
</form>
