var hasError = false;

function checkEditButton() {
    if (hasError == true) {
        document.getElementById("button-edit").setAttribute("disabled", "disabled");

    } else {

        document.getElementById("button-edit").removeAttribute("disabled");
    }
}


function nameValidation() {
    var nameElement = document.getElementById("name").value;
    if (nameElement == '' || nameElement == null || nameElement == undefined) {
        document.getElementById("name-error").innerHTML = "<br>*Name is required!";
        document.getElementById("name-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("name-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}





function phoneValidation() {
    var phoneElement = document.getElementById("phone").value;

    if (phoneElement == '' || phoneElement == null || phoneElement == undefined) {
        document.getElementById("phone-error").innerHTML = "<br>*Phone Number is required!";
        document.getElementById("phone-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        if (!/\D/.test(phoneElement) && !/^\d{11}$/.test(phoneElement)) {
            document.getElementById("phone-error").innerHTML = "<br>*please Enter 11 digit";
            document.getElementById("phone-error").style.color = "red";
            hasError = true;
            checkEditButton();
        } else {
            document.getElementById("phone-error").innerHTML = "";

            hasError = false;
            checkEditButton();
        }
    }
}


function emailValidation() {
    var emailElement = document.getElementById("email").value;

    if (emailElement == '' || emailElement == null || emailElement == undefined) {
        document.getElementById("email-error").innerHTML = "<br>*Email is required!";
        hasError = true;
        document.getElementById("email-error").style.color = "red";

        checkEditButton();

    } else {
        if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test(emailElement)) {
            document.getElementById("email-error").innerHTML = "";
            hasError = false;
            checkEditButton();
        } else {
            document.getElementById("email-error").innerHTML = "<br>*incorrect Email!";
            document.getElementById("email-error").style.color = "red";

            hasError = true;
            document.getElementById("email-error").style.color = "red";

            checkEditButton();
        }

    }
}


function messageValidation() {
    var messageElement = document.getElementById("message").value;

    if (messageElement == '' || messageElement == null || messageElement == undefined) {
        document.getElementById("message-error").innerHTML = "<br>*write your message!";
        document.getElementById("message-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("message-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}