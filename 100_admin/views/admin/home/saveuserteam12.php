<?php
include_once("connection.php");

if(isset($_SESSION["val1"])&&isset($_SESSION["val3"]))
{
$team_id1=intval($_SESSION["val3"]);
}
else
{
 header("Location: homet.php");
}

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


$qry71="SELECT * FROM user_team where user_team_id='$team_id1' and user_id='$userid' and match_id='$matchid' and players='$userteam' and caption='$caption' and vice_caption='$vicecaption'";
$result71 = mysqli_query($con,$qry71);
$rows71 = mysqli_num_rows($result71);
//echo $qry71;
if($rows71>=1)
{

$rediect='homet.php';
     

 echo "<script type='text/javascript'>alert('Updated Successfully.');
    window.location='".$rediect."';
    </script>";



}
else
{


$update="Update `user_team` set players='$userteam',caption='$caption',vice_caption='$vicecaption'  WHERE `user_team_id`='$team_id1'";
$result1 = mysqli_query($con,$update);


 $rediect='contests1t1.php';
 
    
    echo "<script type='text/javascript'>alert('Your Team has saved Successfully.');
    window.location='".$rediect."';
    </script>";
}



}

else
{
 $rediect='homet.php';
 
    
    echo "<script type='text/javascript'>alert('Sorry.Match Already Moved to Live.');
    window.location='".$rediect."';
    </script>";


}





?>


