<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styles/loginStyle.css">
    <title>login</title>
	<?php
	include 'controllers/login_controllers.php';
	?>
</head>

<body style="background-color:rgb(208, 235, 226)">

    <div class="login-div">

        <table align="center">

            <tr>
                <td><img src="Blood_Old.png" width="75px" height="75px"></td>
                <td>
                    <h2 align="center" style="color: red">Sheccha Blood Bank</h2>
                </td>
            </tr>
            <tr>

                <td colspan="2">
                    <h2 align="center" style="color: green"> Login here</h2>
                </td>
            </tr>
        </table>
        <form action="" method="post" onsubmit="return validate()">
            <table align="center">
                <tr>
                    <td><span style="font-weight: bold;" class="my-font">Username:</span> </td>
                    <td><input class="my-font my-text-field" type="text" value="<?php echo $uname; ?>" placeholder="Username" name="uname" id="uname">
                        <br><span class="err-msg"><?php echo $err_uname; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span style="margin-top: 5px; font-weight: bold;" class="my-font">Password: </span></td>
                    <td><input style="margin-top: 5px;" class="my-font my-text-field" type="password" placeholder="Password" name="pass" id="pass">
                        <br><span class="err-msg"><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="right"><input class="btn-mine my-font" type="submit" value="Login" name="login">
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" align="center"><span class="err-msg"><?php echo $err_message; ?></span></td>
                </tr>
                <tr>
                    <td colspan="2" align="center">
                        <label style="color:darkblue">New here?</label><a style="color:green" href="DonorReg.php"> Sign Up</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
<script>
function get(id){
return document.getElementById(id);}
function validate(){
	var err_msg="";
	if(get("uname").value==""){err_msg="User Name Required\n";}
	if(get("pass").value==""){err_msg+="Password Required\n";}
	alert(err_msg);
	return true;
}
</script>

</html>