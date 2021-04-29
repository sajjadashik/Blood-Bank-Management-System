<script>
function get(id){
			return document.getElementById(id);
}
function showblood(b)
{
	var blood=b.value;
	var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				get("show").innerHTML =this.responseText;
			}
		};
		xhttp.open("GET","search.php?blood="+blood,true);
		xhttp.send();
}
</script>