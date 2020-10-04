<?php
include_once("connectionnew.php");


$matchid=$_POST['match'];
$userteam=$_POST['players'];
$caption=$_POST['caption'];
$vicecaption=$_POST['vice-caption'];
$userid=$_SESSION['email'];


$qry70="SELECT * FROM matches where matchid='$matchid' and status=1";
$result70 = mysqli_query($con,$qry70);
$rows70 = mysqli_num_rows($result70);

//echo $qry;

if($rows70>=1)
{



$qry1="SELECT * FROM `user_team` WHERE `user_id`='$userid' and `match_id`='$matchid'";
$result = mysqli_query($con,$qry1);
$rows = mysqli_num_rows($result);
if($rows<6)
{
$count112=0;

$query11="SELECT max(user_team_id) as count2 FROM `user_team`";
$result11=mysqli_query($con,$query11);
$rows11=mysqli_num_rows($result11);
while ($rows11 = mysqli_fetch_array($result11)) 
{
$count112=$rows11['count2'];
}

$count112=$count112+1;


$qry71="SELECT * FROM user_team where user_team_id='$count112' and  user_id='$userid' and match_id='$matchid' and players='$userteam' and caption='$caption' and vice_caption='$vicecaption'";
$result71 = mysqli_query($con,$qry71);
$rows71 = mysqli_num_rows($result71);
//echo $qry;
if($rows71>=1)
{


}
else
{


$insert="INSERT INTO `user_team`(`user_team_id`, `user_id`, `match_id`, `players`, `caption`, `vice_caption`) VALUES ('$count112','$userid','$matchid','$userteam','$caption','$vicecaption')";
$result1 = mysqli_query($con,$insert);

$newteam='SELECT * FROM `user_team` WHERE `user_id`="'.$userid.'" AND `match_id`='.$matchid.'';
$newteam_result=mysqli_query($con,$newteam);
$rows_newteam=mysqli_num_rows($newteam_result);



$count111=0;



$query11="SELECT count(*) as count1 FROM `user_team` WHERE `user_id`='$userid' and `match_id`='$matchid'";
$result11=mysqli_query($con,$query11);
$rows11=mysqli_num_rows($result11);
while ($rows11 = mysqli_fetch_array($result11)) 
{
$count111=$rows11['count1'];

}

$count111=$count111;


$insert1="INSERT INTO `team_number` VALUES ('$count112','$count111')";
$result11 = mysqli_query($con,$insert1);

}


    $rediect='contests1t1.php';
 
    
    echo "<script type='text/javascript'>alert('Your Team has been Created Successfully.');
    window.location='".$rediect."';
    </script>";

}

else
{
 $rediect='contests1t1.php';
 
    
    echo "<script type='text/javascript'>alert('Only 6 Teams are allowed.');
    window.location='".$rediect."';
    </script>";


}



}
else
{
 $rediect='homet.php';
 
    
    echo "<script type='text/javascript'>alert('Match Already Moved to Live.');
    window.location='".$rediect."';
    </script>";


}




?>


