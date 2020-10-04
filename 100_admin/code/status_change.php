<?php
require_once "../db/config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $table_name = trim($_POST["table_name"]);
        $fld_id = trim($_POST["fld_id"]);
        $mat_id = trim($_POST["mat_id"]);
		$fld_name = trim($_POST["fld_name"]);
		$mat_status = trim($_POST["mat_status"]);
        $link = trim($_POST["link"]);
    
		$qry = "UPDATE $table_name SET '$fld_name' = '$mat_status' WHERE `$fld_id` = '$mat_id' ";
		mysqli_query($conn,$qry);
		$_SESSION['TYPE'] = "1";
		header("location: ../views/".$link);
		exit;
    
    mysqli_close($conn);
}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/".$link);
		exit;
	}
?>