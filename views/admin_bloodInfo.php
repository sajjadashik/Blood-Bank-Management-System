<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<title>Blood Information</title>
<?php
include 'admin_menu.php';
include 'controllers/admin_blood_controllers.php';
$result=getallbloodinfo();
?>
</head>
<body style="background-color:rgb(219, 235, 241);">
<div class="otherpage" align="center">
<h2>Blood Information</h2>
<table border="1">
<tr>
<th>Blood Group</th>
<th>Quantity</th>
<th> </th>
</tr>
<?php
foreach ($result as $row) {
echo "<tr>";
echo "<td>".$row["Blood_group"]."</td>";
echo "<td>".$row["Quantity"]. "Bag"."</td>";
echo '<td><a style="color:blue" href="admin_updateblood.php?id='.$row['id'].'">Update</a></td>';
echo "</tr>";
}
?>
</table></div>
</body>
</html>

