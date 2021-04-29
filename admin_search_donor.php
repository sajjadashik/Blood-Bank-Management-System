<?php
require_once "models/dbconfig.php";
$username=$_GET["username"];
$query = "SELECT * FROM donor_info WHERE username LIKE '%$username%'";
$result = get($query);

echo "<thead>
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
</thead>";
if($result==NULL)
{
	echo "No Data Found";
}
else{
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
}
?>