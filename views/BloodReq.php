<!DOCTYPE html>
<html>

<head>
<script type="text/javascript" src="../donor1/js/sendreq.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
	<?php
	include 'donor_menu.php';
	?>

</head>

<body style="background-color:rgb(219, 235, 241)">

	
	<div class="otherpage" align="justified">
<h1>Search Blood Requests</h1>

<table>
<select name="Blood Group" onchange="showblood(this)">
<option value="">Search by Blood Type</option>
<option value="A">A+</option>
<option value="A-">A-</option>
<option value="B">B+</option>
<option value="B-">B-</option>
<option value="AB">AB+</option>
<option value="AB-">AB-</option>
<option value="O">O+</option>
<option value="O-">O-</option>
</select>
</table>
<table id="show" border="1">
<thead>
<th>Name</th>
<th>Address</th>
<th>Number</th>
<th>Blood Group</th>
<th>Quantity</th>
</thead>
</table>
</div>
</body>
</html>