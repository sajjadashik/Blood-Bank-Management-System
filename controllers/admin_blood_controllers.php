<?php
require_once "models/dbconfig.php";
$grp ="";
$err_grp = "";
$quantity = "";
$err_quantity = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["grp"])) {
        $err_grp = "*Blood Group is Required";
       
    } else {
        $grp = htmlspecialchars($_POST["grp"]);
    }
    if (empty($_POST["quantity"])) {
        $err_quantity = "*Quantity Required";
    }
	else if(!is_numeric($_POST["quantity"]))
         {
            $err_quantity="*quantity Must be Number";
         }
		 else 
		 {
        $quantity = htmlspecialchars($_POST["quantity"]);
		}
	
}
function retrive($id){
		$query = "select * from blood where id=$id";
		$result = get($query);
		if(count($result) > 0){
			return $result[0];
		}
		return false;
	}
function getallbloodinfo()
{
$query = "select * from blood";
$result = get($query);
return $result;
}
if(isset($_POST["update"]))
{
	update($_POST["id"],$_POST["quantity"]);
}
function update($id,$quantity)
{	
	$query="update blood set Quantity='$quantity' where id ='$id'";
	execute($query);
	header("Location: admin_bloodInfo.php");
}
if(!isset($_COOKIE["uname"]))
	{ 
	 header ("Location:login.php");
	}
?>