<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<script type="text/javascript" src="../mvc/js/admin_donor.js"></script>
<title>Donor Information</title>

<?php
include 'admin_menu.php';
include 'controllers/admin_donor_controllers.php';
$result=getalldonorinfo();
?>
</head>
<body style="background-color:rgb(219, 235, 241);">
<div class="otherpage" align="center">
<h2>Donor Information</h2>
<form>
<span>Search By User Name:</span>
<input type="text" id="search" onkeyup="searchbyuname(this)">
</form>

<table id="output" border="1">
<thead>
<th>Name</th>
<th>UserName</th>
<th>Email</th>
<th>Number</th>
<th>Date Of Birth</th>
<th>Gender</th>
<th>Blood Group</th>
<th>Street</th>
<th>City</th>
<th>State</th>
<th>Zip</th>
<th>     </th>
<th>     </th>
</thead>
<?php
foreach ($result as $row) {
echo "<tbody>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["username"]."</td>";
echo "<td>".$row["Email"]."</td>";
echo "<td>".$row["Phone_Number"]."</td>";
echo "<td>".$row["date"]."/".$row["month"]."/".$row["year"]."</td>";
echo "<td>".$row["Gender"]."</td>";
echo "<td>".$row["Blood_group"]."</td>";
echo "<td>".$row["Street"]."</td>";
echo "<td>".$row["City"]."</td>";
echo "<td>".$row["State"]."</td>";
echo "<td>".$row["Zip"]."</td>";
echo '<td><a style="color:blue" href="admin_updatedonor.php?id='.$row['id'].'">Update Account</a></td>';
echo '<td><a style="color:blue" href="admin_deletedonor.php?id='.$row['id'].'">Delete Account</a></td>';
echo "</tbody>";
}
?>
</table></div>
</body>
</html>