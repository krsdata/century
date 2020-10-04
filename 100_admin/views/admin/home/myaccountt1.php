<?php

session_start();
$_SESSION["broker"]="26";
include("connectionnew.php");

$gmail1=$_SESSION["email"];


$qry="SELECT * FROM `wallet1` WHERE `userid`='$gmail1'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);

//echo "$qry";
if($rows>=1)
{



  
}
else
{

 $qry1="INSERT INTO `wallet1`(`userid`, `damount`, `wamount`, `bamount`) VALUES ('$gmail1','0','0','0')";
    $result1 = mysqli_query($con,$qry1);



}





  include("homepath1.php");
  
 ?>