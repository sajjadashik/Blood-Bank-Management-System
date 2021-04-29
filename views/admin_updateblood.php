<!DOCTYPE html>
<html>
<head>
<script src="../mvc/js/admin_updateblood.js"></script>
<?php
include 'admin_menu.php';
include 'controllers/admin_blood_controllers.php';
$id=$_GET["id"];
$result=retrive($id);
?>
<title>Update Blood Information</title>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
</head>
<body style="background-color:rgb(219, 235, 241);"> 
<div class="otherpage" align="center">
<form action="" method="post" onsubmit="return validation()">
<table>
		<h1>Update Blood Information</h1>
                <tr>
                    <td><Span>Blood Group</Span></td>
                    <td>: <input type="text" placeholder="Blood Group" name="grp" readonly value="<?php echo $result["Blood_group"];?> "><br><span style="color: red;"><?php echo $err_grp; ?> </span>
                    </td>
                </tr>
                <tr>
					<td><Span>Quantity</Span></td>
                    <td>: <input  type="text" id="quantity" placeholder="Quantity" name="quantity" value="<?php echo $result["Quantity"];?>"><img src=" "  width="16" height="15" id="pic1"><br><span id="err_quantity" style="color: red;"><?php echo $err_quantity; ?></span>
                    </td>
                </tr>
				<tr>
					<td> <input  type="hidden" value="<?php echo $result["id"] ?>" name="id"></td>
				</tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" name="update" value="Submit"></td>
                </tr>
                <tr>

</table>
</form>
</div>
</body>
<script>
</html>