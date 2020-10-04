<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
    $mat_id = trim($_POST["mat_id"]);
    $amount = trim($_POST["amount"]);
	$teams = trim($_POST["teams"]);
    $fees = trim($_POST["fees"]);

	mysqli_autocommit($conn, FALSE);
	$qry = "INSERT INTO `contests` (`amount`, `no_of_teams`, `fee`, `matchid`, `repeat1`, `fill1`, `multi`, `type`, `jinku`) VALUES ('$amount','$teams','$fees','$mat_id','1','0','0','1','1')";
	$res = mysqli_query($conn,$qry);
	$insertid = mysqli_insert_id($conn);
	if ($insertid > 0) {
		foreach($_POST['start'] as $i => $start) 
		{ 
		  // Get values from post.
		  $start = $start;
		  $end = $_POST['end'][$i];
		  $prize = $_POST['prize'][$i];

		  // Add to database
		  $sql = "INSERT INTO `prize` (`contestid`, `min1`, `max1`, `prize`) VALUES ('".$insertid."', '".$start."', '".$end."', '".$prize."')";
		  $result = mysqli_query($conn,$sql);
		}
		if($result and $res){
			mysqli_commit($conn);
	        $_SESSION['TYPE'] = "1";
			header("location: ../views/match_upcoming");
			exit;
	    }else{
			mysqli_rollback($conn);
	    	$_SESSION['TYPE'] = "0";
			header("location: ../views/match_upcoming");
	    }
		
		mysqli_close($conn);
		header("location: ../views/match_upcoming");
		exit();
	}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/match_upcoming");
		exit;
	}
}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/match_upcoming");
		exit;
	}
?>