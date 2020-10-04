<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SESSION["username"] != ""){
 
	$qry = "UPDATE `API_matches` SET `mat_status` = '4' WHERE `mat_id` = '44348' ";
	$res = mysqli_query($conn,$qry);
	/* Indis vs NZ match 24/01/2020 */
	//$qry = "UPDATE `user_team` SET `usr_team_earn_points` = '0.00' WHERE `match_id` = '41933' ";
	/* HS vs ST Big Bash match 24/01/2020 */
	/* $qry = "UPDATE `user_team` SET `usr_team_earn_points` = '0.00' WHERE `match_id` = '43278' ";
	$res = mysqli_query($conn,$qry); */
	/* $qry = "UPDATE `wallet1` SET `damount` = '0.00',`wamount` = '0.00',`bamount` = '0.00' WHERE `userid` = '132488' ";
	$res = mysqli_query($conn,$qry); */
	/* echo $qry = "UPDATE `API_user_account` SET `usr_act_remark` = 'We have caught fraud in your  account, cyber cell with police department is now going to contact you.',`usr_paytm_isVarified` = '3',`usr_bank_isVarified` = '3' WHERE `usr_id` = '155467' ";
	/* $res = mysqli_query($conn,$qry); */
	/*echo $qry = "UPDATE `refer1` SET `refid` = 'UDCRA' WHERE `userid` = '1754' ";
	echo $res = mysqli_query($conn,$qry);*/
	/* $qry = "SELECT * FROM `prize` WHERE `contestid` = 161354";
	$res = mysqli_query($conn,$qry);
	$row = mysqli_fetch_assoc($res);print_r($row); */
	/* $qry1 = "SELECT * FROM `contests` WHERE `matchid` = 43839 AND type=1";
	$res1 = mysqli_query($conn,$qry1); 
	while($row = mysqli_fetch_array($res))
	{
		print_r($row);
	}*/
	if ($res)
		echo "1";
	else
		echo "0";
	/* $qry = "DELETE FROM `transaction` WHERE `amount` = 11111111";
	$res = mysqli_query($conn,$qry);
	if ($res)
		echo "Delete";
	else
		echo "Not Delete"; */

	mysqli_close($conn);
}else
	{
		exit;
	}
?>