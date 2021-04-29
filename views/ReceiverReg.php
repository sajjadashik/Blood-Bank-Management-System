<!DOCTYPE html>
<html>

<head>
<script type="text/javascript" src="../donor1/js/recieverreg.js"></script>
<?php
include 'controllers/recieverreg_controllers.php';
?>

    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="styles/regStyle.css">
</head>

<body style="background-color:rgb(208, 235, 226)">
    <div class="header">
        <img id="element1" src="Blood_Old.png" height="60" width="60">
        <h1 id="element2"> Sheccha Blood Bank</h1>
    </div>
    <div class="Regbox" align="center">
        <form action="" method="post" onsubmit="return validate()">
            <h1 style="color: darkblue;">Receiver Registration</h1>
                <table>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input class="ph" type="text" placeholder="Name" value="<?php echo $name; ?>" name="name" id="name"><span style="color: red;"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input class="ph" type="text" placeholder="Username" value="<?php echo $uname; ?>" name="uname" id="uname"><span style="color: red;"><?php echo $err_uname; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Password" value="<?php echo $pass; ?>" name="pass" id="pass"><span style="color: red;"><?php echo $err_pass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input class="ph" type="password" placeholder="Confirm Password" value="<?php echo $cpass; ?>" name="cpass" id="cpass"><span style="color: red;"><?php echo $err_cpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td>: <input class="ph" type="email" placeholder="Email" value="<?php echo $email; ?>" name="email" id="email"><br><span style="color: red;"><?php echo $err_email; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input class="ph" type="text" placeholder="Phone Number" value="<?php echo $phonenumber; ?>" name="phonenumber" id="phonenumber"><br><span style="color: red;"><?php echo $err_phonenumber; ?></span>
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
							</select><span id="err_day" style="color: red;"><?php echo $err_day; ?></span><br>
							<select id="month" name="month">
								<option disabled selected>Month</option>
								<?php
								      $month = array("01","02","03","04","05","06","07","08","09","10","11","12");
									foreach($month as $m)
									{
										echo "<option>$m</option>";	
									}
								?>
							</select><span id="err_month" style="color: red;"><?php echo $err_month; ?></span><br>
							<select id="year" name="year">
								<option disabled selected>Year</option>
								<?php
									for($i=2021;$i>=1960;$i--)
									{
										echo "<option>$i</option>";
									}
								?>
							</select><span id="err_year" style="color: red;"><?php echo $err_year; ?></span>
						</td>
					</tr>
                <tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="radio" value="Male" name="gender" id="male">Male<input type="radio" value="Female" name="gender" id="fem">Female<br>
                    <span style="color: red;"><?php echo $err_gender; ?></span>
                    </td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>:
                        <select name="blood" id="blood" value="">
                            <option disabled selected>Choose</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select><br><span style="color: red;"><?php echo $err_blood; ?></span>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input class="ph" type="text" placeholder="Street Address" value="<?php echo $street; ?>" name="street" id="street"><br><span style="color: red;"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  class="ph" type="text" placeholder="City" value="<?php echo $city; ?>" name="city" id="city"><br><span style="color: red;"><?php echo $err_city; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" placeholder="State" value="<?php echo $state; ?>" name="state" id="state"><br><span style="color: red;"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input class="ph" type="text" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip" id="zip"><br><span style="color: red;"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Registration"></td>
                </tr>
                <tr>
                    <td align="center">
                        <label style="color:darkblue">Already have an account?</label><a style="color:green" href="login.php"> Login</a></td></tr>
						<tr><td colspan="2">
						<label style="color:darkblue">Want to register as a receiver?</label><a style="color:green" href="ReceiverReg.php"> Sign up</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>