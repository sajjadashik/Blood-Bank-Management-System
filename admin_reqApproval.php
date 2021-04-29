<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<title>Request Info</title>
<?php
include 'admin_menu.php';
if(!isset($_COOKIE["uname"]))
	{ 
	 header ("Location:login.php");
	}
?>
</head>
<body style="background-color:rgb(219, 235, 241);">
<div class="otherpage" align="Center">
<h2>Requests</h2>
<table border="1">
<tr>
<th>Name</th>
<th>Address</th>
<th>Number</th>
<th>Blood Group</th>
<th>Quantity</th>
<th>Request Status</th>
</tr>
<tr>
<td>Saiful Ahmed</td>
<td>Mirpur-2,Dhaka</td>
<td>01719999999</td>
<td>A+</td>
<td>1 bag</td>
<td><a style="color:blue" href="admin_reqApproval.php">Approve</a></td>
</tr>
<tr>
<td>Tamimur Rahman</td>
<td>Board Bazar,Gazipur</td>
<td>01719999009</td>
<td>O+</td>
<td>3 bag</td>
<td><a style="color:blue" href="admin_reqApproval.php">Approve</a></td>
</tr>
<tr>
<td>Taslima Begum</td>
<td>Mohakhali wireless Gate,Dhaka</td>
<td>01919900009</td>
<td>AB+</td>
<td>1 bag</td>
<td><a style="color:blue" href="admin_reqApproval.php">Approve</a></td>
</tr>

</table></div>
</body>
</html>