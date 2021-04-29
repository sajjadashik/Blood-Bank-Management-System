<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<title>Messages</title>
<?php
include 'admin_menu.php';
include 'controllers/admin_messages_controllers.php';
$result=getallmessages();
?>
</head>
<body style="background-color:rgb(219, 235, 241);">
<div class="otherpage" align="center">
<h2>Messages</h2>
<table border="1">
<tr>
<th>Name</th>
<th>Email</th>
<th>Number</th>
<th>Message</th>
<th>    </th>
</tr>
<?php
foreach ($result as $row) {
echo "<tr>";
echo "<td>".$row["Name"]."</td>";
echo "<td>".$row["Email"]."</td>";
echo "<td>".$row["Phone_number"]."</td>";
echo "<td>".$row["Message"]."</td>";
echo "<td>"."<a style='color:blue' href='admin_reply.php'>"."Reply"."</a>"."</td>";
echo "</tr>";
}
?>
</table></div>
</body>
</html>