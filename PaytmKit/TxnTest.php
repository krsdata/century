<?php
	header("Pragma: no-cache");
	header("Cache-Control: no-cache");
	header("Expires: 0");
?>

<html>
	<body>
		<form method="post" action="pgRedirect.php">
			<input id="ORDER_ID" type="hidden" name="ORDER_ID" value="<?php echo rand(10000,99999999)?>" />
			<input id="CUST_ID" type="hidden" name="CUST_ID" value="CUST001" />
			<input id="INDUSTRY_TYPE_ID" type="hidden" name="INDUSTRY_TYPE_ID" value="Retail" />
			<input id="CHANNEL_ID" type="hidden" name="CHANNEL_ID" value="WEB" />

			<table border="1">
				<tbody>
					<tr>
						<td><label>txnAmount*</label></td>
						<td><input title="TXN_AMOUNT" type="text" name="TXN_AMOUNT" value="1" />
						</td>
					</tr>
					<tr>
						<td colspan="2"><input value="CheckOut" type="submit"></td>
					</tr>
				</tbody>
			</table>
		</form>
	</body>
</html>