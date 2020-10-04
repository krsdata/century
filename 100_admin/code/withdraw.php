<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $usr_id = trim($_POST["usr_id"]);
        $amount = trim($_POST["amount"]);
		$BANK = trim($_POST["BANK"]);
		$status = trim($_POST["status"]);
		$email = trim($_POST["email"]);
		$date1 = trim($_POST["date1"]);
        $link = trim($_POST["link"]);

		require("../class.phpmailer.php");

		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->Host = "mail.matchonsports.com";

		$mail->SMTPAuth = true;
		$mail->Port = 587;
		$mail->Username =  "support1@matchonsports.com";

		//echo $mail->Username;

		$mail->Password = "dAva%%^5";

		$mail->From =  "support1@matchonsports.com";
		$mail->FromName = "MatchOn Fantasy Cricket";

		$mail->IsHTML(true);

		$from = $_POST['email'];

		$mail->AddAddress($from);
		mysqli_autocommit($conn, FALSE);
		
			//Your authentication key
			$authKey = "15848AG7xWO9R5e9e8054P15";

			//Multiple mobiles numbers separated by comma
			$mobileNumber = $_POST['mobile'];;

			//Sender ID,While using route4 sender id should be 6 characters long.
			$senderId = "ialert";
			
		if ($status == '2') {
    		
			$qry = "UPDATE `transaction` set  contestid='$status' where userid='$usr_id' and date1='$date1' ";
			mysqli_query($conn,$qry);
			mysqli_commit($conn);
			$mail->Subject = "Withdrawal MatchOn";
			$_SESSION['TYPE'] = "1";
			
			if ($BANK == 'P') {
				$mail->Body = "<br /> Dear User, <br /><br /> Your PAYTM withdrawal has been successfully initiated. Please Check Your PAYTM wallet. <br /> <br /><br /><br />Thanks & Regards<br /> MATCH ON SPORTS<br /> Support Team";
			
			//Your message to send, Add URL encoding here.
			$message = urlencode("Dear User, Your PAYTM withdrawal has been successfully initiated. Please Check Your PAYTM wallet. MATCH ON SPORTS");

			}
			if ($BANK == 'A') {
				$mail->Body = "<br /> Dear User, <br /><br /> Your BANK withdrawal has been successfully initiated. Please Check Your BANK ACCOUNT. <br /> <br /><br /><br />Thanks & Regards<br /> MATCH ON SPORTS<br /> Support Team";
				
				//Your message to send, Add URL encoding here.
				$message = urlencode("Dear User, Your BANK withdrawal has been successfully initiated. Please Check Your BANK ACCOUNT. MATCH ON SPORTS");
			}
			$mail->Send();
		}
		else if ($status == '3') {
    
			$qry = "UPDATE `transaction` set  contestid='$status' where userid='$usr_id' and date1='$date1' ";
			mysqli_query($conn,$qry);
			mysqli_commit($conn);
		}
		else if ($status == '4') {
    
			$qry = "UPDATE `transaction` set  contestid='$status' where userid='$usr_id' and date1='$date1' ";
			$res = mysqli_query($conn,$qry);
			sleep(1);
			$qry1 = "UPDATE `API_user_account` set  usr_paytm_isVarified='3',usr_bank_isVarified='3',usr_act_remark=''  where usr_id='$usr_id' ";
			$res1 = mysqli_query($conn,$qry1);
			$qry2 = "UPDATE `wallet1` set  wamount=wamount+'$amount' where userid='$usr_id' ";
			$res2 = mysqli_query($conn,$qry2);

			$qry0 = "INSERT INTO `transaction` (`userid`, `amount`, `date1`, `type`) VALUES ('$usr_id','$amount','$date1','cancelled')";
			$res0 = mysqli_query($conn,$qry0);
			if ($res and $res1 and $res2 and $res0) {
				mysqli_commit($conn);
				$mail->Body = "<br /> Dear User, <br /><br /> Your Withdrawal Has Been Bounced By Both Medium PAYTM/BANK. Due To Incorrect Details So Now We Are Refunding Your Winning Amount In Your Winning Wallet.Also We Are Cancelling Your KYC And Giving You Last Chance To Update Correct BANK/PAYTM Details. If Withdrawal Again Bounced We Will Unable To Give You Winning So KIndly Fill It Carefully. <br /> <br /><br /><br />Thanks & Regards<br /> MATCH ON SPORTS<br /> Support Team";
				$mail->Send();
				$_SESSION['TYPE'] = "1";
				
				//Your message to send, Add URL encoding here.
				$message = urlencode("Dear User, Your Withdrawal Has Been Bounced By Both Medium PAYTM/BANK. Due To Incorrect Details So Now We Are Refunding Your Winning Amount In Your Winning Wallet.Also We Are Cancelling Your KYC And Giving You Last Chance To Update Correct BANK/PAYTM Details. If Withdrawal Again Bounced We Will Unable To Give You Winning So KIndly Fill It Carefully.");
			}else{
				mysqli_rollback($link);
				$_SESSION['TYPE'] = "0";
			}
		}
		
		//Define route 
			$route = "8";
			//Prepare you post parameters
			$postData = array(
				'authkey' => $authKey,
				'mobiles' => $mobileNumber,
				'message' => $message,
				'sender' => $senderId,
				'route' => $route
			);

			//API URL
			$url="http://login.ibittechnologies.in/api/sendhttp.php";

			// init the resource
			$ch = curl_init();
			curl_setopt_array($ch, array(
				CURLOPT_URL => $url,
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_POST => true,
				CURLOPT_POSTFIELDS => $postData
				//,CURLOPT_FOLLOWLOCATION => true
			));


			//Ignore SSL certificate verification
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);


			//get response
			$output = curl_exec($ch);

			//Print error if any
			if(curl_errno($ch))
			{
				echo 'error:' . curl_error($ch);
			}

			curl_close($ch);

			//echo $output;
		
    	mysqli_close($conn);
    	header("location: ../views/".$link);
    	exit();
}else
	{
		$_SESSION['TYPE'] = "0";
		header("location: ../views/".$link);
		exit;
	}
?>