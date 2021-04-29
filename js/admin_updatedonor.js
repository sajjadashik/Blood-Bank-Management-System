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
			if(get("email").value ==""){
				get("err_email").innerHTML="*Email Required";
				get("pic2").src="cross.jpg";
				haserror=true;
			}
			else if (!(get("email").value).match("@")){
				get("err_email").innerHTML="*Invalid Email (@) required";
				get("pic2").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic2").src="tick.jpg";
			}
			if(get("phonenumber").value ==""){
				get("err_phonenumber").innerHTML="*Phone number Required";
				get("pic3").src="cross.jpg";
				haserror=true;
			}
			else if((get("phonenumber").value).length ==10)
			{
				get("err_phonenumber").innerHTML="*Number should/ be 11 digit";
				get("pic3").src="cross.jpg";
				haserror=true;
			}
			else if(isNaN(get("phonenumber").value))
			{
				get("err_phonenumber").innerHTML="*Invalid Number";
				get("pic3").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic3").src="tick.jpg";
			}
			if(get("day").value ==""){
				
				get("err_day").innerHTML="*Day Required";
				get("pic4").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic4").src="tick.jpg";
			}
			if(get("month").value ==""){
				get("err_month").innerHTML="*Month Required";
				get("pic5").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic5").src="tick.jpg";
			}
			if(get("year").value ==""){
				get("err_year").innerHTML="*Year Required";
				get("pic6").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic6").src="tick.jpg";
			}
			if(get("gender").value==""){
				
				get("err_gender").innerHTML="*Gender Required";
				get("pic7").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic7").src="tick.jpg";
			}
			if(get("street").value ==""){
				get("err_street").innerHTML="*Street Required";
				get("pic8").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic8").src="tick.jpg";
			}
			if(get("city").value ==""){
				get("err_city").innerHTML="*City Required";
				get("pic9").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic9").src="tick.jpg";
			}
			if(get("state").value ==""){
				get("err_state").innerHTML="*State Required";
				get("pic10").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic10").src="tick.jpg";
			}
			if(get("zip").value ==""){
				get("err_zip").innerHTML="*Zip Required";
				get("pic11").src="cross.jpg";
				haserror=true;
			}
			else if(isNaN(get("zip").value))
			{
				get("err_zip").innerHTML="*Zip Should be a number";
				get("pic11").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic11").src="tick.jpg";
			}
			if(!haserror){
				return true;
			}
			return false;
}
function cleanUp(){
			get("err_name").innerHTML = "";
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