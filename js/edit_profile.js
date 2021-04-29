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



function stateValidation() {
    var stateElement = document.getElementById("state").value;
    if (stateElement == '' || stateElement == null || stateElement == undefined) {
        document.getElementById("state-error").innerHTML = "<br>*state is required!";
        document.getElementById("state-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("state-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}


function streetValidation() {
    var streetElement = document.getElementById("street").value;
    if (streetElement == '' || streetElement == null || streetElement == undefined) {
        document.getElementById("street-error").innerHTML = "<br>*street is required!";
        document.getElementById("street-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("street-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}


function cityValidation() {
    var cityElement = document.getElementById("city").value;
    if (cityElement == '' || cityElement == null || cityElement == undefined) {
        document.getElementById("city-error").innerHTML = "<br>*city is required!";
        document.getElementById("city-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("city-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}


function zipValidation() {
    var zipElement = document.getElementById("zip").value;

    if (zipElement == '' || zipElement == null || zipElement == undefined) {
        document.getElementById("zip-error").innerHTML = "<br>*zip is required!";
        document.getElementById("zip-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("zip-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}