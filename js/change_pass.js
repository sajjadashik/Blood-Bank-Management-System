var hasError = true;

function checkEditButton() {
    if (hasError == true) {
        document.getElementById("button").setAttribute("disabled", "disabled");

    } else {

        document.getElementById("button").removeAttribute("disabled");
    }
}


function npassValidation() {
    var npassElement = document.getElementById("npass").value;

    if (npassElement == '' || npassElement == null || npassElement == undefined) {
        document.getElementById("npass-error").innerHTML = "<br>&nbsp;*New password is required!";
        document.getElementById("npass-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else if (npassElement != '') {
        if (npassElement.length < 8) {
            document.getElementById("npass-error").innerHTML = "<br>&nbsp;*New password at least 8 digit";
            document.getElementById("npass-error").style.color = "red";
            hasError = true;
            checkEditButton();
        } else {
            document.getElementById("npass-error").innerHTML = "";

            hasError = false;
            checkEditButton();
        }
    } else {
        document.getElementById("npass-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}


function cpassValidation() {
    var cpassElement = document.getElementById("cpass").value;

    if (cpassElement == '' || cpassElement == null || cpassElement == undefined) {
        document.getElementById("cpass-error").innerHTML = "<br>&nbsp;*Confirm password is required!";
        document.getElementById("cpass-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else if (cpassElement != '') {
        if (cpassElement.length >= 8) {
            if (cpassElement == document.getElementById("npass").value) {
                document.getElementById("cpass-error").innerHTML = "";
                hasError = false;
                checkEditButton();
            } else {
                document.getElementById("cpass-error").innerHTML = "<br>&nbsp;*new password does not match";
                document.getElementById("cpass-error").style.color = "red";

                hasError = true;
                checkEditButton();
            }

        } else {
            document.getElementById("cpass-error").innerHTML = "<br>&nbsp;*Confirm password at least 8 digit";
            document.getElementById("cpass-error").style.color = "red";

            hasError = true;
            checkEditButton();
        }
    }

}

var opassMatched = false;

function opassValidation() {
    var opasselement = document.getElementById('opass').value;


    if (opasselement != "" && opasselement != null && opasselement != undefined) {

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var user_list = JSON.parse(this.responseText);



                if (user_list.length > 0) {
                    document.getElementById('opass-error').innerHTML = 'Password matched';
                    document.getElementById("opass-error").style.color = "green";

                    hasError = false;
                    checkEditButton();
                    opassMatched = true;
                } else {
                    document.getElementById('opass-error').innerHTML = '<br>&nbsp;*Old Password not matched!';
                    document.getElementById("opass-error").style.color = "red";

                    hasError = true;
                    checkEditButton();
                    opassMatched = false;
                }
            }
        };
        xhttp.open("POST", "../../controllers/receiver_controller/change_pass_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("type=oldPasswordCheck&pass=" + opasselement);



    } else {
        document.getElementById('opass-error').innerHTML = "<br>&nbsp;*Insert your old password";
        document.getElementById("opass-error").style.color = "red";
        hasError = true;
        checkEditButton();
    }
}

function updatePassword() {
    var npasselement = document.getElementById('npass').value;
    var opasselement = document.getElementById('opass').value;


    if (hasError == false && opasselement != "" && opasselement != null && opasselement != undefined) {
        if (document.getElementById('npass').value == document.getElementById('cpass').value) {

            opassValidation();
            if (opassMatched) {
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById('cpass-error').innerHTML = '<br>Password updated';
                        document.getElementById("cpass-error").style.color = "green";
                        hasError = false;

                        checkEditButton();
                    }
                };
                xhttp.open("POST", "../../controllers/receiver_controller/change_pass_ajax.php", true);
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("type=changepassword&npass=" + npasselement + "&opass=" + opasselement);

            } else {
                document.getElementById('cpass-error').innerHTML = "<br>&nbsp;*Fll up all required field!";
                document.getElementById('opass-error').innerHTML = "<br>&nbsp;*Old Password not matched!";
                document.getElementById("cpass-error").style.color = "red";
                hasError = true;
                checkEditButton();
            }

        } else {
            npassValidation();
            cpassValidation();

        }
    } else {
        console.log(opasselement);
    }
}