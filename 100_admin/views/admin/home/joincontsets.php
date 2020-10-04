<?php
include"connectionnew.php";
if(isset($_SESSION["val1"])&&isset($_SESSION["val2"]))
{
$match_id=intval($_SESSION["val1"]);
$constest_id=intval($_SESSION["val2"]);
}
else
{
 header("Location: homet.php");
}

$user_id=$_SESSION["email"];
$team_id=$_POST['teamid_form'];


$qry70="SELECT * FROM matches where matchid='$match_id' and status=1";
$result70 = mysqli_query($con,$qry70);
$rows70 = mysqli_num_rows($result70);

//echo $qry;

if($rows70>=1)
{


//echo $constest_id."test";

$diff1=0;

$qry="SELECT `contests_id`, `amount`, `no_of_teams`, `fee` FROM `contests` where contests_id='$constest_id'";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{  
  $no_of_teams=$rows['no_of_teams'];

}


$qry2="SELECT count(*) as cont1 FROM `matches_joined` where  contests_id='$constest_id'  and  `match_id`='$match_id'";
$result2=mysqli_query($con,$qry2);
$rows2=mysqli_num_rows($result2);
while($rows2=mysqli_fetch_assoc($result2))
{

$contest_id111=$rows2['cont1'];
$diff1=  $no_of_teams - $contest_id111;

}

if($diff1>0)
{

$qry71="SELECT * FROM matches_joined where  user_id='$user_id' and match_id='$match_id' and team_id='$team_id' and contests_id='$constest_id'";
$result71 = mysqli_query($con,$qry71);
$rows71 = mysqli_num_rows($result71);
//echo $qry;
if($rows71>=1)
{


}
else
{


$qry72="SELECT * FROM contests where  contests_id='$constest_id'";
$result72 = mysqli_query($con,$qry72);

while($rows72=mysqli_fetch_assoc($result72))
{  
  $feesr=$rows72['fee'];

}


$qry73="SELECT * FROM wallet1 where  userid='$user_id'";
$result73 = mysqli_query($con,$qry73);

while($rows73=mysqli_fetch_assoc($result73))
{  
  $damount=$rows73['damount'];
  $wamount=$rows73['wamount'];
$bamount=$rows73['bamount'];
}

$total11=$damount+$wamount+$bamount;
$temp=$feesr;

if($total11>=$feesr)
{

$temp=$temp-$damount;
if($temp<=0)
{
$damount=$damount-$feesr;
}
else
{
$damount=0;
$temp1=$temp-$bamount;
if($temp1<=0)
{
$bamount=$bamount-$temp;
}
else
{
$bamount=0;
$wamount=$wamount-$temp1;
}


}


$query45="Update `wallet1` set damount='$damount',wamount='$wamount',bamount='$bamount' where  userid='$user_id'";
$result45=mysqli_query($con,$query45);



$query="INSERT INTO `matches_joined`(`user_id`, `match_id`, `team_id`, `contests_id`) VALUES ('$user_id','$match_id','$team_id','$constest_id')";
$result=mysqli_query($con,$query);


$query112="INSERT INTO `transaction`(`userid`, `amount`, `type`,contestid) VALUES ('$user_id','$feesr','Fees','$constest_id')";
$result112=mysqli_query($con,$query112);

}
else
{

 $rediect='myaccountt1.php'; 
    
    echo "<script type='text/javascript'>alert('No sufficient balance.');
    window.location='".$rediect."';
    </script>";


}



}


echo "<script type='text/javascript'>alert('".$user_id." has Joid the Contests Sucessfully');";
}
else
{
echo "<script type='text/javascript'>alert('Contest is already Full. Please try again.');";

}

echo "window.location='contests1t1.php'";
echo "</script>";

}
else
{
 $rediect='homet.php';
 
    
    echo "<script type='text/javascript'>alert('Match Already Moved to Live.');
    window.location='".$rediect."';
    </script>";


}



?>