<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
    $mat_id = trim($_POST["mat_id"]);

	mysqli_autocommit($conn, FALSE);
	$qry = "DELETE FROM `API_matches` WHERE `mat_id` = '$mat_id'";
	$res = mysqli_query($conn,$qry);

	$sql = "DELETE FROM `API_match_squad` WHERE `sqd_mat_id` = '$mat_id'";
	$result = mysqli_query($conn,$sql);

	$sql1 = "SELECT * FROM `contests` WHERE `matchid` = '$mat_id'";
	$res1 = mysqli_query($conn,$sql1);
	while ($val1 = mysqli_fetch_array($res1)) {
		$contests_id = $val1['contests_id'];
		$sql2 = "DELETE FROM `prize` WHERE `contestid` = '$contests_id'";
		$res2 = mysqli_query($conn,$sql2);
	}
	$sql3 = "DELETE FROM `contests` WHERE `matchid` = '$mat_id'";
	$res3 = mysqli_query($conn,$sql3);
	$sql4 = "DELETE FROM `matches_joined` WHERE `match_id` = '$mat_id'";
	$res4 = mysqli_query($conn,$sql4);
	$sql5 = "DELETE FROM `user_team` WHERE `match_id` = '$mat_id'";
	$res5 = mysqli_query($conn,$sql5);
	if($result && $res && $res1 && $res2 && $res3 && $res4 && $res5){
		mysqli_commit($conn);
        $_SESSION['TYPE'] = "1";
        echo '<script>window.history.back();</script>';
		//header("location: ../views/match_completed");
		exit;
    }else{
		mysqli_rollback($link);
    	$_SESSION['TYPE'] = "0";
		echo '<script>window.history.back();</script>';
    }
	
	mysqli_close($conn);
	echo '<script>window.history.back();</script>';
	exit();
}else
	{
		$_SESSION['TYPE'] = "0";
		echo '<script>window.history.back();</script>';
		exit;
	}
?>