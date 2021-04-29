<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="../mvc/js/admin_updatedonor.js"></script>
<?php
include 'admin_menu.php';
include 'controllers/admin_donor_controllers.php';
$id=$_GET["id"];
$result=retrive($id);
?>
<title>Update User Information</title>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
</head>
<body style="background-color:rgb(219, 235, 241);"> 
<div class="otherpage" align="center">
<form action="" method="post" onsubmit="return validation()">
<table>
		<h1>Update Donor Information</h1>
		
				<tr>
                    <td><Span><b>For Changing Name:<b></Span></td>
                </tr>
                <tr>
				
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" id="name" placeholder="Name" value="<?php echo $result["Name"]; ?>" name="name"><img src=" "  width="16" height="15" id="pic1"><br><span id="err_name" style="color: red;"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><Span><b>For Changing Email:<b></Span></td>
                </tr>
                    <td><span>Email</span></td>
                    <td>: <input type="text" id="email" placeholder="Email" value="<?php echo $result["Email"]; ?>" name="email"><img src=" "  width="16" height="15" id="pic2"><br><span id="err_email" style="color: red;"><?php echo $err_email; ?> </span>
                    </td>
                </tr>
				<tr>
                    <td><Span><b>For Changing Phone Number:<b></Span></td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input  type="text" id="phonenumber" placeholder="Phone Number" value="<?php echo $result["Phone_Number"] ?>" name="phonenumber"><img src=" "  width="16" height="15" id="pic3"><br><span id="err_phonenumber" style="color: red;"><?php echo $err_phonenumber; ?></span>
                    </td>
                </tr>
				<tr>
                    <td><Span><b>For Changing Date of Birth:<b></Span></td>
                </tr>
                <tr>
                    <td>Date Of Birth:</td>
                    <td>
                        <input  type="text" id="day" placeholder="Day" value="<?php echo $result["date"] ?>" name="day"><span style="color: red;"><img src=" "  width="16" height="15" id="pic4"><br><span id="err_day" style="color: red;"><?php echo $err_day; ?></span>
						<input  type="text" id="month" placeholder="Month" value="<?php echo $result["month"] ?>" name="month"><span style="color: red;"><img src=" "  width="16" height="15" id="pic5"><br><span id="err_month" style="color: red;"><?php echo $err_month; ?></span>
						<input  type="text" id="year" placeholder="Year" value="<?php echo $result["year"] ?>" name="year"><span style="color: red;"><img src=" "  width="16" height="15" id="pic6"><br><span id="err_year" style="color: red;"><?php echo $err_month; ?></span>
                    </td>
                </tr>
				<tr>
                    <td><Span><b>For Changing Gender:<b></Span></td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="text" id="gender" placeholder="Gender" value="<?php echo $result["Gender"] ?>" name="gender"><img src=" "  width="16" height="15" id="pic7">
                    <br><span id="err_gender" style="color: red;"><?php echo $err_gender; ?></span>
                    </td>
                </tr>
				<tr>
                    <td><Span><b>For Changing Address:<b></Span></td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" id="street" placeholder="Street Address" value="<?php echo $result["Street"] ?>" name="street"><img src=" "  width="16" height="15" id="pic8"><br><span id="err_street" style="color: red;"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="city" placeholder="City" value="<?php echo $result["City"] ?>" name="city"><img src=" "  width="16" height="15" id="pic9"><br><span id="err_city" style="color: red;"><?php echo $err_city; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="state" placeholder="State" value="<?php echo $result["State"] ?>" name="state"><img src=" "  width="16" height="15" id="pic10"><br><span id="err_state" style="color: red;"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" id="zip" placeholder="Postal/zip code" value="<?php echo $result["Zip"] ?>" name="zip"><img src=" "  width="16" height="15" id="pic11"><br><span id="err_zip" style="color: red;"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
				<tr>
					<td> <input  type="hidden" value="<?php echo $result["id"] ?>" name="id"></td>
				</tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" name="update" value="Submit"></td>
                </tr>
                <tr>

</table>
</form>
</div>
</body>
</html>