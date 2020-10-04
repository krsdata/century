<?php

require_once "../db/config.php";
 
$filename = "withdrawdetails_".date("Y-m-d").".csv";
$fp = fopen('php://output', 'w');

header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
// label of the rows
$header_row = array("User Id","Name","Amount","WithdrawType", "Bank Name", "IFSC", "Acc No", "Paytm", "Pstatus", "Bstatus", "Date");
fputcsv($fp, $header_row);

   
	$query = "SELECT * FROM transaction where `date1` > '2019-09-01 00:00:00' and `type` = 'withdraw' and `contestid` = '0' order by date1";
	$result = mysqli_query($conn, $query);
	while($row = mysqli_fetch_array($result)) {	

		$query1 = "SELECT * FROM API_user_account where usr_id=".$row['userid']."";
		$result1 = mysqli_query($conn, $query1);
	

		foreach($result1 as $value1)
		{
			// Array indexes correspond to the field names in your db table(s)
			$row1 = array(
				$value1['usr_id'],
				$value1['usr_bank_acHolderName'],
				$row['amount'],
				$row['withdraw_type'],
				$value1['usr_bank_name'],
				$value1['usr_bank_ifsc'],
				$value1['usr_bank_acNumber'],
				$value1['usr_paytm_number'],
				$value1['usr_paytm_isVarified'],
				$value1['usr_bank_isVarified'],
				$row['date1']
			);
			
			fputcsv($fp,$row1,',','"');
		}
	
	}exit;
?>

