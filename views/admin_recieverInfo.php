<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<script type="text/javascript" src="../mvc/js/admin_reciever.js"></script>
<title>Reciever Information</title>
<?php
include 'admin_menu.php';
include 'controllers/admin_reciever_controllers.php';
$result=getallrecieverinfo();
?>
</head>
<body style="background-color:rgb(219, 235, 241);">
<div class="otherpage" align="center">
<h2>Reciever Information</h2>
<form>
<span>Search By User Name:</span>
<input type="text" id="search" onkeyup="searchbyuname(this)">
<span id="err"></span>
<table id="output" border="1">
<tr>
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
</tr>

<?php
foreach ($result as $row) {
echo "<tr>";
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
echo '<td><a style="color:blue" href="admin_updatereciever.php?id='.$row['id'].'">Update Account</a></td>';
echo '<td><a style="color:blue" href="admin_deletereciever.php?id='.$row['id'].'">Delete Account</a></td>';
echo "</tr>";
}
?>

</table></div>
</body>
</html>