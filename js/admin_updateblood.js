function get(id){
			return document.getElementById(id);
}
function validation(){
			var haserror=false;
			cleanUp();
			if(get("quantity").value ==""){
				get("err_quantity").innerHTML="*Quantity Required";
				get("pic1").src="cross.jpg";
				haserror=true;
			}
			else if(isNaN(get("quantity").value))
			{
				get("err_quantity").innerHTML="*Quantity should be Number";
				get("pic1").src="cross.jpg";
				haserror=true;
			}
			else
			{
				get("pic1").src="tick.jpg";
			}
			
			if(!haserror){
				return true;
			}
			return false;
}
function cleanUp(){
			get("err_quantity").innerHTML = "";
		}
		