<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
	<title>Settings</title>
<?php
include 'donor_menu.php';
include 'controllers/donorsettings_controllers.php';
$d=retrive($username);
?>
</head>

<body style="background-color:rgb(219, 235, 241)">
	<form action="" method="post" onsubmit="return validate()">
		<div class="otherpage" align="justified">
		<table>
			<h1>Update Profile</h1>
				<tr><td><Span>Change Name</Span> <input type="text" placeholder="Name" value="<?php echo $d["Name"]; ?>" name="name" id="name"><br><span style="color: red;"><?php echo $err_name; ?> </span><br>
				</td>
			</tr>
<tr><td>
Change Pasword</td></tr><tr>
<td> <input type="Password" placeholder="Current Password" name="pass" id="pass"><br> <span style="color: red;"><?php echo $err_pass;?> </span><br></td>
<td><input type="Password" placeholder="New Password" name="npass" id="npass"><br><span style="color: red;" ><?php echo $err_npass;?> </span><br></td>
<td><input type="Password" placeholder="Confirm Password" name="cpass" id="cpass"><br><span style="color: red;"><?php echo $err_cpass;?></span><br></td>
</tr>

<tr>
<td><Span>Change Number</Span> <input type="text" placeholder="Number" value="<?php echo $d["Phone_Number"]; ?>" name="phonenumber" id="phonenumber"><br> <span style="color: red;"><?php echo $err_phonenumber; ?> </span><br>
</td>

<td><span>Change Email Adress</span> <input type="email" placeholder="Email" value="<?php echo $d["Email"]; ?>" name="email" id="email"><br><span style="color: red;"><?php echo $err_email; ?> </span><br>
                    </td>
            </tr>
<tr><td>Change Address</td></tr>
					<tr><td><span><input type="text" placeholder="Street Address" value="<?php echo $d["Street"]; ?>" name="street" id="street"></span><br><span style="color: red;"><?php echo $err_street; ?></span><br>
                    <td><input type="text" placeholder="City" value="<?php echo $d["City"]; ?>" name="city" id="city"></span><br><span style="color: red;"><?php echo $err_city; ?></span><br>
                    </td>
                </tr>
				<tr>
                    <td><span> <input type="text" placeholder="State" value="<?php echo $d["State"]; ?>" name="state" id="state"></span><br><span style="color: red;"><?php echo $err_state; ?></span><br>
                    </td>
              
                    <td><span> <input type="text" placeholder="Postal/zip code" value="<?php echo $d["Zip"]; ?>" name="zip" id="zip"><span><br><span style="color: red;"><?php echo $err_zip; ?></span><br>
                    </td>
                </tr>
				<tr>
					<td colspan="2" align="justified"><input style="background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" name="Update" value="Update"></td>
				</tr>
				</table>
		</div>
	</form>
</body>
</html>