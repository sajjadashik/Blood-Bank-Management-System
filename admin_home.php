<!DOCTYPE html>
<html> 
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<?php
include 'admin_menu.php';
include 'controllers/admin_blood_controllers.php';
$result=retrive('1');
$result2=retrive('2');
$result3=retrive('3');
$result4=retrive('4');
$result5=retrive('5');
$result6=retrive('6');
$result7=retrive('7');
$result8=retrive('8');

if(!isset($_COOKIE["uname"]))
	{ 
	 header ("Location:login.php");
	}
 ?>
 
 </head>
<body style="background-color:rgb(219, 235, 241);"> 
<table class="tab">
<tr ><td align="center" colspan="8"> <b> Available Blood </b></td></tr>
<tr class="cell"><td  align="center"> A+<br><?php echo $result["Quantity"]; ?>bag</td>
<td  align="center"> A-<br><?php echo $result2["Quantity"]; ?> bag</td>
<td  align="center"> B+<br><?php echo $result3["Quantity"]; ?> bag</td>
<td  align="center"> B-<br><?php echo $result4["Quantity"]; ?>bag</td> </tr>
<tr class="cell"><td  align="center"> AB+<br><?php echo $result5["Quantity"]; ?> bag</td>
<td  align="center"> AB-<br><?php echo $result6["Quantity"]; ?> bag</td>
<td  align="center"> O+<br><?php echo $result7["Quantity"]; ?> bag</td>
<td  align="center"> O-<br><?php echo $result8["Quantity"]; ?> bag</td> </tr>


</table>

 </body>
 </html>