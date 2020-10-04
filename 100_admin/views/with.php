<?php
$con=mysqli_connect("india.cluster-ccwtefa3mahu.us-east-1.rds.amazonaws.com","matchonsports","matchonsports","matchons_cric_1");
$i=0;
$sql = "SELECT * FROM transaction where `date1` BETWEEN '2019-11-16 13:31:00' AND '2019-12-10 11:15:50'
 and `type` = 'withdraw' and `contestid` = '0'";
	$result = mysqli_query($con,$sql);
	while($rs = mysqli_fetch_array($result))
	{
		$i++;
	}echo $i;
?>