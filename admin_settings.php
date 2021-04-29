<!DOCTYPE html>
<html>
<head>
<?php
include 'admin_menu.php';
include 'controllers/admin_settings_controllers.php';
?>
<title>Admin Settings</title>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
</head>
<body style="background-color:rgb(219, 235, 241);"> 	
<div class="otherpage" align="center">
<form action="" method="post">
<h1>Change Password</h1>
<table>
<tr>
<td><span>New Password</span></td>
<td>: <input type="Password" placeholder="New Password" name="npass"><br><span style="color: red;" ><?php echo $err_npass;?> </span></td>
</tr>
<tr>
<td><span>Confirm New Password</span></td>
<td>: <input type="Password" placeholder="Confirm Password" name="cpass"><br><span style="color: red;"><?php echo $err_cpass;?></span></td>
</tr>
<tr>
<td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Submit"></td>
</tr>

</table>
</form>
</div>
</body>
</html>