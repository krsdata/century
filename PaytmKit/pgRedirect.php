<?php
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");

// following files need to be included
require_once("./lib/config_paytm.php");
require_once("./lib/encdec_paytm.php");

$checkSum = "";
$paramList = array();

// Create an array having all required parameters for creating checksum.
$paramList["MID"] = PAYTM_MERCHANT_MID;
$paramList["ORDER_ID"] = rand(1000,9999).time();
$paramList["CUST_ID"] = $_POST['userId'];
$paramList["INDUSTRY_TYPE_ID"] = "Retail";
$paramList["CHANNEL_ID"] = "WEB";
$paramList["TXN_AMOUNT"] = $_POST['amount'];
$paramList["WEBSITE"] = PAYTM_MERCHANT_WEBSITE;
$paramList["CALLBACK_URL"] = PAYTM_CALLBACK_URL.$_POST['userId'].'/'.$_POST['amount'].'/'.$_POST['orderId'];
// $paramList["MSISDN"] = "1234567890"; //Mobile number of customer
// $paramList["EMAIL"] = "rahulsavita477@gmail.com"; //Email ID of customer
// $paramList["VERIFIED_BY"] = "EMAIL"; //
// $paramList["IS_USER_VERIFIED"] = "YES"; //

//Here checksum string will return by getChecksumFromArray() function.
$checkSum = getChecksumFromArray($paramList, PAYTM_MERCHANT_KEY);
?>

<html>
	<body>
		<form method="post" action="<?php echo PAYTM_TXN_URL ?>" name="f1">
			<table border="1">
				<tbody>
					<?php
					foreach($paramList as $name => $value)
						echo '<input type="hidden" name="' . $name .'" value="' . $value . '">';
					?>
					<input type="hidden" name="CHECKSUMHASH" value="<?php echo $checkSum ?>">
				</tbody>
			</table>
			<script type="text/javascript">
				document.f1.submit();
			</script>
		</form>
	</body>
</html>