<!DOCTYPE html>
<html>
<head>
<?php
include 'controllers/admin_reciever_controllers.php';
include 'admin_menu.php';
?>
<script src="../mvc/js/admin_reciever.js"></script>
<title>Admin Add Reciever</title>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
</head>
<body style="background-color:rgb(219, 235, 241);"> 
<div class="otherpage" align="center">
<form action="" method="post" onsubmit="return validation()">
<table>
		<h1>Add Reciever</h1>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" id="name" placeholder="Name" value="<?php echo $name; ?>" name="name"><img src=" "  width="16" height="15" id="pic1"><br><span id="err_name" style="color: red;"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input type="text" id="uname" onkeyup="checkUsername(this)" placeholder="Username" value="<?php echo $uname; ?>" name="uname"><img src=" "  width="16" height="15" id="pic2"><span id="err_username"></span><br><span id="err_uname" style="color: red;"><?php echo $err_uname; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input  type="password" id="pass" placeholder="Password" value="<?php echo $pass; ?>" name="pass"><img src=" "  width="16" height="15" id="pic3"><br><span id="err_pass" style="color: red;"><?php echo $err_pass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input type="password" id="cpass" placeholder="Confirm Password" value="<?php echo $cpass; ?>" name="cpass"><img src=" "  width="16" height="15" id="pic4"><br><span id="err_cpass" style="color: red;"><?php echo $err_cpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td>: <input type="text" id="email" placeholder="Email" value="<?php echo $email; ?>" name="email"><img src=" "  width="16" height="15" id="pic5"><br><span id="err_email" style="color: red;"><?php echo $err_email; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input  type="text" id="phonenumber" placeholder="Phone Number" value="<?php echo $phonenumber; ?>" name="phonenumber"><img src=" "  width="16" height="15" id="pic6"><br><span id="err_phonenumber" style="color: red;"><?php echo $err_phonenumber; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Date of Birth:<span></td>
						<td>
							<select id="day" name="day">
								<option disabled selected>Day</option>
								<?php
									for($i=1;$i<=31;$i++)
									{
										echo "<option>$i</option>";
									}
								?>
							</select><img src=" "  width="16" height="15" id="pic7"><br><span id="err_day" style="color: red;"><?php echo $err_day; ?></span>
							<select id="month" name="month">
								<option disabled selected>Month</option>
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December");
									foreach($month as $m)
									{
										echo "<option>$m</option>";	
									}
								?>
							</select><img src=" "  width="16" height="15" id="pic8"><br><span id="err_month" style="color: red;"><?php echo $err_month; ?></span>
							<select id="year" name="year">
								<option disabled selected>Year</option>
								<?php
									for($i=2021;$i>=1960;$i--)
									{
										echo "<option>$i</option>";
									}
								?>
							</select><img src=" "  width="16" height="15" id="pic9"><br><span id="err_year" style="color: red;"><?php echo $err_year; ?></span>
						</td>
					</tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="radio" id="male" value="Male" name="gender">Male<input type="radio" id="female" value="Female" name="gender">Female <img src=" "  width="16" height="15" id="pic10">
                    <br><span id="err_gender" style="color: red;"><?php echo $err_gender; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>:
                        <select id="blood" name="blood" value="">
                            <option disabled selected>Choose</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select><img src=" "  width="16" height="15" id="pic11"><br><span id="err_blood" style="color: red;"><?php echo $err_blood; ?></span>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" id="street" placeholder="Street Address" value="<?php echo $street; ?>" name="street"><img src=" "  width="16" height="15" id="pic12"><br><span id="err_street" style="color: red;"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="city" placeholder="City" value="<?php echo $city; ?>" name="city"><img src=" "  width="16" height="15" id="pic13"><br><span id="err_city" style="color: red;"><?php echo $err_city; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="state" placeholder="State" value="<?php echo $state; ?>" name="state"><img src=" "  width="16" height="15" id="pic14"><br><span id="err_state" style="color: red;"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="zip" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip"><img src=" "  width="16" height="15" id="pic15"><br><span id="err_zip" style="color: red;"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" name="add" value="Submit"></td>
                </tr>

</table>
</form>
</div>
</body>
</html>