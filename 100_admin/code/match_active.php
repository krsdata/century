<?php
require_once "../db/config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $mat_id = trim($_POST["mat_id"]);
		$status = trim($_POST["status"]);
        $link = trim($_POST["link"]);
    
		$qry = "UPDATE `API_matches` SET `mat_isVisible` = '$status' WHERE `mat_id` = '$mat_id' ";
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