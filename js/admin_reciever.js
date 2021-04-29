function get(id){
			return document.getElementById(id);
}
function validation(){
			var haserror=false;
			cleanUp();
			if(get("name").value ==""){
				get("err_name").innerHTML="*Name Required";
				get("pic1").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic1").src="tick.jpg";
			}
			if(get("uname").value ==""){
				get("err_uname").innerHTML="*Username Required";
				get("pic2").src="cross.jpg";
				haserror=true;
			}
			else if((get("uname").value).length <6)
			{
				get("err_uname").innerHTML="*Username should/ be at least 6 characters";
				get("pic2").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic2").src="tick.jpg";
			}
			if(get("pass").value ==""){
				get("err_pass").innerHTML="*Password Required";
				get("pic3").src="cross.jpg";
				haserror=true;
			}
			else if((get("pass").value).length <8)
			{
				get("err_pass").innerHTML="*Password should/ be at least 8 characters";
				get("pic3").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic3").src="tick.jpg";
			}
			if(get("cpass").value ==""){
				
				get("err_cpass").innerHTML="*Confirm Password Required";
				get("pic4").src="cross.jpg";
				haserror=true;
			}
			else if (get("pass").value !=get("cpass").value)
			{
				get("err_cpass").innerHTML="*Password & Confirm Password should be same";
				get("pic4").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic4").src="tick.jpg";
			}
			if(get("email").value ==""){
				get("err_email").innerHTML="*Email Required";
				get("pic5").src="cross.jpg";
				haserror=true;
			}
			else if (!(get("email").value).match("@")){
				get("err_email").innerHTML="*Invalid Email (@) required";
				get("pic5").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic5").src="tick.jpg";
			}
			if(get("phonenumber").value ==""){
				get("err_phonenumber").innerHTML="*Phone number Required";
				get("pic6").src="cross.jpg";
				haserror=true;
			}
			else if((get("phonenumber").value).length ==10)
			{
				get("err_phonenumber").innerHTML="*Number should/ be 11 digit";
				get("pic6").src="cross.jpg";
				haserror=true;
			}
			else if(isNaN(get("phonenumber").value))
			{
				get("err_phonenumber").innerHTML="*Invalid Number";
				get("pic6").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic6").src="tick.jpg";
			}
			if(get("day").value =="Day"){
				
				get("err_day").innerHTML="*Day Required";
				get("pic7").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic7").src="tick.jpg";
			}
			if(get("month").value =="Month"){
				get("err_month").innerHTML="*Month Required";
				get("pic8").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic8").src="tick.jpg";
			}
			if(get("year").value =="Year"){
				get("err_year").innerHTML="*Year Required";
				get("pic9").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic9").src="tick.jpg";
			}
			if(get("male").checked ==false && get("female").checked ==false){
				
				get("err_gender").innerHTML="*Gender Required";
				get("pic10").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic10").src="tick.jpg";
			}
			if(get("blood").value == "Choose"){
				get("err_blood").innerHTML="*Blood Group Required";
				get("pic11").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic11").src="tick.jpg";
			}
			if(get("street").value ==""){
				get("err_street").innerHTML="*Street Required";
				get("pic12").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic12").src="tick.jpg";
			}
			if(get("city").value ==""){
				get("err_city").innerHTML="*City Required";
				get("pic13").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic13").src="tick.jpg";
			}
			if(get("state").value ==""){
				get("err_state").innerHTML="*State Required";
				get("pic14").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic14").src="tick.jpg";
			}
			if(get("zip").value ==""){
				get("err_zip").innerHTML="*Zip Required";
				get("pic15").src="cross.jpg";
				haserror=true;
			}
			else if(isNaN(get("zip").value))
			{
				get("err_zip").innerHTML="*Zip Should be a number";
				get("pic15").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic15").src="tick.jpg";
			}
			if(!haserror){
				return true;
			}
			return false;
}
function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_uname").innerHTML= "";
			get("err_pass").innerHTML = "";
			get("err_cpass").innerHTML= "";
			get("err_email").innerHTML = "";
			get("err_phonenumber").innerHTML= "";
			get("err_gender").innerHTML= "";
			get("err_day").innerHTML= "";
			get("err_month").innerHTML = "";
			get("err_year").innerHTML= "";
			get("err_street").innerHTML = "";
			get("err_city").innerHTML= "";
			get("err_state").innerHTML = "";
			get("err_zip").innerHTML= "";
		}
function checkUsername(uname){
		var username = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				var rsp = this.responseText;
				if(rsp == "true"){
					get("err_username").innerHTML = "Username Is Available";
					get("err_username").style.color="green";
				}else{
					get("err_username").innerHTML = "Username is Not Available";
					get("err_username").style.color="red";
				}
			}
		};
		xhttp.open("GET","admin_reciever_ajax.php?uname="+username,true);
		xhttp.send();
	}
function searchbyuname(uname){
		var username = uname.value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				 get("output").innerHTML =this.responseText;
			}
		};
		xhttp.open("GET","admin_search_reciever.php?username="+username,true);
		xhttp.send();
	}