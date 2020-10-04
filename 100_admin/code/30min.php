<?php
exit();
require_once "../db/config.php";
session_start();
if($_SESSION["username"] != ""){
   
		$qry = "UPDATE `API_matches` SET `mat_startdate` = `mat_startdate` + interval 30 minute WHERE `mat_status` = '1' ";
		$res = mysqli_query($conn,$qry);
		print_r($res);
		if($res)
			echo "Done";
		else
			echo "Not Done";
		mysqli_close($conn);
		
}else
	{
		echo "Not run";
	}
?>