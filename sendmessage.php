<!DOCTYPE html>

<?php
include "user_main.php";
require_once "../../controllers/receiver_controller/sendmessage_controller.php";

$uname = $_COOKIE['username'];
$name = $email = $phone= "";



$querry = "SELECT * from user WHERE username='$uname'";
$result = get($querry);

if (count($result) < 1) {
	$message = "User does not exist!";
} else {

	$name = $result[0]['name'];
	$email = $result[0]['email'];
	$phone = $result[0]['phone'];
}
?>


<script src="../../javascript//send_message.js"></script>

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
<div class="otherpage">
	<form action="sendmessage.php" method="post">
		<h3>Got a question?</h3>
		<table>
			<tr>
				<td><Span>Name</Span></td>
				<td>: <input class="ph" type="text" id="name" placeholder="Name" onkeyup="nameValidation()" value="<?php echo $name; ?>" name="name"> <span style="color: red;" id="name-error"><?php echo $err_name; ?> </span></td>
			</tr>
			<tr>
				<td><span>Email</span></td>
				<td>: <input class="ph" type="text" id="email" placeholder="Email" onkeyup="emailValidation()" value="<?php echo $email; ?>" name="email"><span style="color: red;" id="email-error"><?php echo $err_email; ?> </span>
				</td>
			</tr>
			<tr>
				<td><span>Phone Number</span></td>
				<td>: <input class="ph" type="text" id="phone" placeholder="Phone Number" onkeyup="phoneValidation()" value="<?php echo $phone; ?>" name="phone"><span style="color: red;" id="phone-error"> <?php echo $err_phone; ?></span>
				</td>
			</tr>
			<tr>
				<td><span>Message</span></td>
				<td>:<textarea class="ph" placeholder="Message" id="message" onkeyup="messageValidation()" value="<?php echo $messsage; ?>" name="message"></textarea><span style="color: red;" id="message-error"><?php echo $err_message; ?></span></td>
			</tr>
			<tr>
				<td align="center" colspan="2"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" name="button-edit" id="button-edit" value="Send Us"></td>
			</tr>
			<tr>

				<td colspan="2" align="center">
					<h3 style="color: green;"><?php echo $success; ?></h3>
				</td>
			</tr>
		</table>
	</form>
</div>