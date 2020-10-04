<?php

include("change.php");

echo '

<script type=\'text/javascript\'>

(function()
{
  if( window.localStorage )
  {
    if( !localStorage.getItem(\'firstLoad\') )
    {
      localStorage[\'firstLoad\'] = true;
      window.location.reload();
    }  
    else
      localStorage.removeItem(\'firstLoad\');
  }
})();

</script>

';


include("disable.php");

session_start();

if(isset($_SESSION["log333"]))
{
if($_SESSION["log333"]==3)
{

}
else
{
header("Location: ../../admin");
}
}
else
{
header("Location: ../../admin");
}


if (isset($_SESSION['name'])) 
{
    $auser= $_SESSION["name"];
}

 $con= mysqli_connect("localhost","root","","matchons_cric_1");
                        
 if(!$con)
 {
     echo "unsucessfull connection connection error";
 }



$qry='SELECT * FROM `matches` WHERE `status`="1"';
$result1 = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result1);
if($rows>0)
{
  while ($rows = mysqli_fetch_array($result1)) {
    $match3=$rows['matchid'];
    $finaldate=$rows['time'];
    $status=$rows['status'];

$date = date_default_timezone_set('Asia/Kolkata');

    $cdate=date("Y-m-d H:i:s");

   // $datetime1 = new DateTime($cdate);
  //  $datetime2 = new DateTime($finaldate);
  //  $diff1= date_diff($datetime1,$datetime2);
    

$timeFirst  = strtotime($cdate);
$timeSecond = strtotime($finaldate);
$differenceInSeconds = $timeSecond-$timeFirst ;
   

$test1112=0;
//$test1112 = ($diff1->y)+($diff1->m)+($diff1->d)+($diff1->h)+($diff1->i)+($diff1->s);

$test1112=$differenceInSeconds;

//echo  "tttttttttttttttttttt".$test1112."<br />";

    if($test1112>0)
    {

    }
    else
    {
     $ss='UPDATE `matches` SET`status`="2" WHERE `matchid`='.$match3.'';
     $result2 = mysqli_query($con,$ss);
    }




  }
}




?>