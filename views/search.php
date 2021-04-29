<?php
require_once "dbconfig.php";
$blood=$_GET["blood"];
$query = "SELECT * FROM request WHERE Blood_group like'$blood%'";
$result = get($query);
echo"<tr>
<th>Name</th>
<th>Address</th>
<th>Number</th>
<th>Blood group</th>
<th>Quantity</th>
</tr>";

foreach ($result as $row) {
echo "<tr>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["Address"]."</td>";
echo "<td>".$row["Number"]."</td>";
echo "<td>".$row["Blood_group"]."</td>";
echo "<td>".$row["Quantity"]."</td>";
echo "</tr>";
}
?>