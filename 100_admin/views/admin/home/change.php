<?php

session_start();

if(isset($_SESSION["log"]))
{
if($_SESSION["log"]!=3)
{
include("homepath.php");
}
}
else
{
include("homepath.php");
}

if (isset($_SESSION['name'])) 
{
    $auser= $_SESSION["name"];
}

 $con= mysqli_connect("localhost","matchons_cric_1","E[;?1Uhq}SnB","matchons_cric_1");
                        
 if(!$con)
 {
     echo "unsucessfull connection connection error";
 }


if(isset($_SESSION["val1"]))
{
$mat12345=intval($_SESSION["val1"]);

$qry="SELECT * FROM `matches` WHERE matchid='".$mat12345."' and status=2";


$result1 = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result1);
if($rows>0)
{
     
    header("Location: homet1.php");
 
}


}// end of session val


?>