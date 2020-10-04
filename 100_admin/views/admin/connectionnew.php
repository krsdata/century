<?php

include("disable.php");

session_start();

if (isset($_SESSION['name'])) 

{

    $auser= $_SESSION["name"];

}



 $con= mysqli_connect("localhost","root","Server@db2019","matchons_cric_1");



                       

 if(!$con)

 {

     echo "unsucessfull connection connection error";

 }

?>