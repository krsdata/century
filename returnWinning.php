<?php
//$con=mysqli_connect("india.cluster-ccwtefa3mahu.us-east-1.rds.amazonaws.com","matchonsports","matchonsports","matchons_cric_1");
// $con=mysqli_connect("localhost","century","Century#2020","century");

//get match contests
$query1211="SELECT * FROM `contests` WHERE `matchid`='45122'";
$result1211=mysqli_query($con,$query1211);
$rows1211=mysqli_num_rows($result1211);

while ($rows1211 = mysqli_fetch_array($result1211)) 
{
	$contest_id11=$rows1211['contests_id'];

	//update match joined user rank and amount to 0
	$s_sql = "UPDATE matches_joined
			SET 
				rank = 0, 
				amount = 0 
			WHERE contests_id = ".$contest_id11;
	mysqli_query($con,$s_sql);

	$querye="SELECT transaction_id, userid, amount FROM `transaction` WHERE type = 'winning' AND contestid='$contest_id11'";
	$resulte=mysqli_query($con,$querye);
	$rowse=mysqli_num_rows($resulte);

	while ($rowse = mysqli_fetch_array($resulte)) 
	{
		$emailoo=$rowse['userid'];
		$amount=$rowse['amount'];
		$transaction_id=$rowse['transaction_id'];
		//die;

		$qry111="UPDATE `wallet1` set wamount=wamount-'$amount' where userid='$emailoo'";
    	mysqli_query($con,$qry111);

		if($amount>0)
		{
			$query112="DELETE FROM transaction WHERE transaction_id = ".$transaction_id;
			mysqli_query($con,$query112);

			//$query112="INSERT INTO `transaction`(`userid`, `amount`, `type`,contestid) VALUES ('$emailoo','$amount','technical issue','$contest_id11')";
			//mysqli_query($con,$query112);
		}
	}
}
?>