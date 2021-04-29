<script>
function get(id){
return document.getElementById(id);}
function validate(){
	var err_msg="";
	if(get("name").value==""){err_msg="Name Required\n";}
	if(get("uname").value==""){err_msg+="Username Required\n";}
	if(get("pass").value==""){err_msg+="Password Required\n";}
	if(get("cpass").value==""){err_msg+="Confirm Password Required\n";}
	if(get("email").value==""){err_msg+="Email Required\n";}
	if(get("phonenumber").value==""){err_msg+="Phone Number Required\n";}
	if(get("day").value==""){err_msg+="Day Required\n";}
	if(get("month").value==""){err_msg+="Month Required\n";}
	if(get("year").value==""){err_msg+="Year Required\n";}
	if(get("street").value==""){err_msg+="Street Required\n";}
	if(get("city").value==""){err_msg+="City Required\n";}
	if(get("state").value==""){err_msg+="State Required\n";}
	if(get("zip").value==""){err_msg+="Zip Required\n";}
	if(get("male").checked ==false && get("fem").checked ==false){err_msg+="Gender Required\n";}
	
	if(get("blood").value==""){err_msg+="Blood Group Required\n";}
	alert(err_msg);
	return true;
}
</script>