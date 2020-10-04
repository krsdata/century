<?php
require_once "../db/config.php";
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $mat_id = trim($_POST["mat_id"]);
		$datetime = trim($_POST["datetime"]);
    
		$qry = "UPDATE `API_matches` SET `mat_startdate` = '$datetime',`mat_status` = '1' WHERE `mat_id` = '$mat_id' ";
		mysqli_query($conn,$qry);
		$_SESSION['TYPE'] = "1";
		header("location: ../views/match_upcoming");
		exit;
    
    mysqli_close($conn);
}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/match_upcoming");
		exit;
	}
?>