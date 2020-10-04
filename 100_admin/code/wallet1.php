<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
    $userid = $_POST["userid"];
    $damount = $_POST["damount"];
    $wamount = $_POST["wamount"];
    $bamount = $_POST["bamount"];

	$qry = "UPDATE `wallet1` SET `damount` = '$damount', `wamount` = '$wamount', `bamount` = '$bamount' WHERE `userid` = '$userid' ";
	$res = mysqli_query($conn,$qry);
	if ($res)
		$_SESSION['TYPE'] = "1";
	else
		$_SESSION['TYPE'] = "0";

	header("location: ../views/wallet1?id=".$userid);
	mysqli_close($conn);
}else
	{
		$_SESSION['TYPE'] = "2";
		header("location: ../views/wallet1?id=".$userid);
		exit;
	}
?>