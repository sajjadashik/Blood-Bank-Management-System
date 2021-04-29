function bgroupValidation() {
    var bgroupElement = document.getElementById("bgroup").value;
    if (bgroupElement == '' || bgroupElement == null || bgroupElement == undefined) {
        document.getElementById("blood-error").innerHTML = "<br>*Select blood group";
        document.getElementById("blood-error").style.color = "red";

    } else {
        document.getElementById("blood-error").innerHTML = "";

    }
}


var search_result = false;

function search_donner() {
    var bgroupelement = document.getElementById('bgroup').value;
    var locationelement = document.getElementById('location').value;


    if (bgroupelement != "" && bgroupelement != null && bgroupelement != undefined) {

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                var donner_list = JSON.parse(this.responseText);

                if (donner_list.length > 0) {

                    search_result = true;


                    var result_string = "";

                    for (i = 0; i <= donner_list.length - 1; i++) {
                        result_string += "<tr><td>" + donner_list[i].name + "</td>" +
                            "<td>" + donner_list[i].email + "</td>" +
                            "<td>" + donner_list[i].phone + "</td>" +
                            "<td>" + donner_list[i].gender + "</td>" +
                            "<td>" + donner_list[i].blood + "</td>" +
                            "<td>" + donner_list[i].street + "</td>" +
                            "<td>" + donner_list[i].state + "</td>" +
                            "<td>" + donner_list[i].city + "</td>" +
                            "<td>" + donner_list[i].zip + "</td></tr>";
                    }

                    document.getElementById('dataTable').innerHTML = result_string;

                } else {
                    document.getElementById('blood-error').innerHTML = 'no result';

                    search_result = false;
                }
            }
        };
        xhttp.open("POST", "../../controllers/receiver_controller/doner_search_ajax.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("type=search&bgroup=" + bgroupelement + "&location=" + locationelement);



    } else {
        document.getElementById('blood-error').innerHTML = "<br>*Select blood group";
        document.getElementById("blood-error").style.color = "red";
        search_result = false;
    }


}