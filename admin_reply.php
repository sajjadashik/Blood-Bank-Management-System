<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles/commonStyle.css">
<title>Reply Messeges</title>
<?php
include 'admin_menu.php';
include 'controllers/admin_messages_controllers.php';
?>
</head>
<body style="background-color:rgb(219, 235, 241);"> 
<div class="otherpage" align="center">
<form action="" method="post">
<h1>Reply Messeges</h1>
<tr>
<td><Span><b>From: Seccha Blood Bank<b><br></Span></td>
</tr>
<tr>
<td><Span><b>Name: Saiful Islam<b></Span><br></td>
</tr>
<tr>
<td><Span><b>UserName:saiful<b></Span><br></td>
</tr>
<td><span><b>Message:Thank You for saving my mothers life.</b></span><br></td>
</tr>
<tr>
<td><span>Reply Message</span></td>
<td>:<textarea placeholder="Reply" name="rmessage"></textarea><br><span style="color: red;"><?php echo $err_rmessage;?></span></td>
</tr>
<tr>
<td colspan="2" align="center"><input style=" background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Send"></td>
</tr>
</table>
</form>
</div>
</body>
</html>