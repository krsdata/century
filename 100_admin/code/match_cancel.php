<?php
require_once "../db/config.php";

$mat_id = trim($_POST["mat_id"]);
$status = trim($_POST["status"]);
$link = trim($_POST["link"]);

$query1211="SELECT *  FROM `contests` WHERE `matchid`='$mat_id'";

$result1211=mysqli_query($conn,$query1211);

$rows1211=mysqli_num_rows($result1211);

while ($rows1211 = mysqli_fetch_array($result1211)) 

{

	

$contest_id11=$rows1211['contests_id'];

$fees12=$rows1211['fee'];





$querye="SELECT joined_id,user_id  FROM `matches_joined` WHERE  contests_id='$contest_id11'";

$resulte=mysqli_query($conn,$querye);

$rowse=mysqli_num_rows($resulte);

while ($rowse = mysqli_fetch_array($resulte)) 

{


$joined_id=$rowse['joined_id'];
$emailoo=$rowse['user_id'];


$sql = "SELECT bamount,damount,wamount FROM wallet_contest_transaction WHERE mat_joined_id='$joined_id' AND isRefunded=0";
$qry = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($qry);
$bamount=$row['bamount'];
$damount=$row['damount'];
$wamount=$row['wamount'];


$qry111="UPDATE `wallet1` set  bamount=bamount+'$bamount',damount=damount+'$damount',wamount=wamount+'$wamount' where userid='$emailoo'";

    $result11121 = mysqli_query($conn,$qry111);

$sql1 = "UPDATE wallet_contest_transaction set isRefunded=1 WHERE mat_joined_id='$joined_id'";
$qry1 = mysqli_query($conn,$sql1);



if($fees12>0)

{

$query112="INSERT INTO `transaction`(`userid`, `amount`, `type`,contestid) VALUES ('$emailoo','$fees12','abandoned','$contest_id11')";

$result112=mysqli_query($conn,$query112);

}





}


/*$querye="SELECT userid,amount  FROM `transaction` WHERE  contestid='$contest_id11' AND type='winning'";

$resulte=mysqli_query($conn,$querye);

$rowse=mysqli_num_rows($resulte);

while ($rowse = mysqli_fetch_array($resulte)) 

{



$emailoo=$rowse['userid'];
$wamount=$rowse['amount'];






$qry111="UPDATE `wallet1` set  wamount=wamount-'$wamount'  where userid='$emailoo'";

    $result11121 = mysqli_query($conn,$qry111);





if($fees12>0)

{

$query112="INSERT INTO `transaction`(`userid`, `amount`, `type`,contestid) VALUES ('$emailoo','$fees12','cancelled','$contest_id11')";

$result112=mysqli_query($conn,$query112);

}





}*/



}
session_start();
$qry = "UPDATE `API_matches` SET `mat_isPrizeDesctributed` = '$status' WHERE `mat_id` = '$mat_id' ";
mysqli_query($conn,$qry);
$_SESSION['TYPE'] = "1";
header("location: ../views/".$link);
?>