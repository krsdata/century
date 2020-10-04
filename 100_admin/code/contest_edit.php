<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $contests_id = trim($_POST["contests_id"]);
        $amount = trim($_POST["amount"]);
        $no_of_teams = trim($_POST["no_of_teams"]);
		$fee = trim($_POST["fee"]);
        $repeat1 = trim($_POST["repeat1"]);
        $multi = trim($_POST["multi"]);
        $type = trim($_POST["type"]);
        $fill1 = trim($_POST["fill1"]);

    
		$qry = "UPDATE `contests1` set  amount='$amount',no_of_teams='$no_of_teams',fee='$fee',repeat1='$repeat1',multi='$multi',type='$type',fill1='$fill1'  where contests_id='$contests_id'";
		mysqli_query($conn,$qry);
		$_SESSION['TYPE'] = "1";
    	mysqli_close($conn);
    	header("location: ../views/contest");
    	exit();
}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/contest");
		exit;
	}
?>