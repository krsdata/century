<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
        $usr_id = trim($_POST["usr_id"]);
        $remark = trim($_POST["remark"]);
        $email = trim($_POST["email"]);
		$status = trim($_POST["status"]);
        $link = trim($_POST["link"]);

        require("../class.phpmailer.php");

		$mail = new PHPMailer();

		$mail->IsSMTP();
		$mail->Host = "mail.matchonsports.com";

		$mail->SMTPAuth = true;
		$mail->Port = 587;
		$mail->Username =  "test@matchonsports.com";

		//echo $mail->Username;

		$mail->Password = "E)+n=l}EEG%g";

		$mail->From =  "test@matchonsports.com";
		$mail->FromName = "MatchOn Fantasy Cricket";

		$mail->IsHTML(true);

		$from = $_POST['email'];


		$mail->AddAddress($from);
		if ($status == '2') {
    
			$qry = "UPDATE `API_user_account` set  usr_paytm_isVarified='$status',usr_bank_isVarified='$status',usr_act_remark='$remark'  where usr_id='$usr_id' ";
			mysqli_query($conn,$qry);
			$mail->Subject = "Approval Verification Done";
			$mail->Body = "<br /> Dear User, <br /><br /> Your Document Has Been Successfully Verified. Now You Can Withdrawal Your Winning Amount. Withdrawal Will Take 24-48 Hours. <br /> <br /><br /><br />Thanks & Regards<br /> MATCH ON SPORTS<br /> Support Team";
			$mail->Send();
		}
		else if ($status == '3') {
    
			$qry = "UPDATE `API_user_account` set  usr_paytm_isVarified='$status',usr_bank_isVarified='$status',usr_act_remark='$remark'  where usr_id='$usr_id' ";
			mysqli_query($conn,$qry);
			$mail->Subject = "Approval Verification Rejected";
			$mail->Body = "<br /> Dear User, <br /><br /> Your Documents Has Been Rejected Due To Wrong Information Shared By You.  <br />Please Edit the Details And Upload Correct Information As Per RBI Guidelines. <br /> <br /><br /><br />Thanks & Regards<br /> MATCH ON SPORTS<br /> Support Team";
			echo $mail->Send();
		}
		$_SESSION['TYPE'] = "1";
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