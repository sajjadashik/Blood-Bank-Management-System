var hasError = true;

function checkEditButton() {
    if (hasError == true) {
        document.getElementById("button-edit").setAttribute("disabled", "disabled");

    } else {

        document.getElementById("button-edit").removeAttribute("disabled");
    }
}

checkEditButton();

function checkAllField() {
    nameValidation();
    phoneValidation();
    hnameValidation();
    hlocationValidation();
    bgroupValidation();
    quantityValidation();
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




function hnameValidation() {
    var hnameElement = document.getElementById("hname").value;
    if (hnameElement == '' || hnameElement == null || hnameElement == undefined) {
        document.getElementById("hname-error").innerHTML = "<br>*Hospital Name is required!";
        document.getElementById("hname-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("hname-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}



function hlocationValidation() {
    var locationElement = document.getElementById("hlocation").value;
    if (locationElement == '' || locationElement == null || locationElement == undefined) {
        document.getElementById("hlocation-error").innerHTML = "<br>*Hospital Location is required!";
        document.getElementById("hlocation-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("hlocation-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}


function bgroupValidation() {
    var bgroupElement = document.getElementById("bgroup").value;
    if (bgroupElement == '' || bgroupElement == null || bgroupElement == undefined) {
        document.getElementById("bgroup-error").innerHTML = "<br>*bload group Name is required!";
        document.getElementById("bgroup-error").style.color = "red";

        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("bgroup-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}

function quantityValidation() {
    var quantityElement = document.getElementById("quantity").value;
    if (quantityElement == '' || quantityElement == null || quantityElement == undefined) {
        document.getElementById("quantity-error").innerHTML = "<br>*bload group Name is required!";
        document.getElementById("quantity-error").style.color = "red";
        hasError = true;
        checkEditButton();
    } else {
        document.getElementById("quantity-error").innerHTML = "";

        hasError = false;
        checkEditButton();
    }
}