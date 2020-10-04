<?php
include("connection.php");

if(isset($_SESSION["val10"])&&isset($_SESSION["val11"]))
{
$match_id=intval($_SESSION["val10"]);
$contest_id11=intval($_SESSION["val11"]);
}
else
{
 header("Location: homet.php");
}

$ty=rand(101,1000);
 $_SESSION["mid"]=$ty;


?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.3" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
rel="stylesheet">
       <style>


.header4 {
    background-color: white;
    color: black;
   
     text-align: center;
     width: 98%;
height: 23%;
     font-size: 12px;
     
    position: absolute;
   top: 63%;
    left: 1%;
       
}


.header5 {
    background-color: #3b5998;
    color: white;
    padding: 1%;
     text-align: center;
     width: 30%;
     font-size: 15px;
     
    position: absolute;
   top: 5%;
    left: 33%;
       
}

.header6{
    background-color: #3b5998;
    color: white;
    padding: 1%;
      width: 30%;
     font-size: 15px;
     
    position: absolute;
   top: 5%;
    left: 3%;
       
}

.header7{
    background-color: #3b5998;
    color: white;
    padding: 1%;
      width: 30%;
     font-size: 15px;
    text-align:right;
     
    position: absolute;
   top: 5%;
    right: 3%;
       
}




        body
        {
            background: url(./assets/img/bg.jpg)no-repeat;
            background-color:#3b5998;
            background-size: 115%;
            background-position-x: 35%;
        }
    .navbar
        {
            width:555px;
            margin:auto;
        }
    .navbar-top
    {
         background-color:#3b5998 !important;
        height: 90px;
        font-size: 30px;
    }
    .navbar-brand
       {
           margin:auto;
           color: white !important;
           font-weight:bolder !important;
           font-size: 25px !important;
       }
    .middle
    {
        width: 555px;
    height: 89vh;
    margin: auto;
    margin-top: 70px;
    background-color: white;
    padding: 15px;
    overflow: auto;
    }
    .navbar-bottom
    {
 background-color: #3b5998;
        padding: 10px;
        height: 50px;
    }
    .navbar-bottom .material-icons
    {
        margin-left: 4px;
        font-size: 45px;
        color: #0078d780;
        transition: .3s;
        cursor:pointer;
    }
    .navicon
    {
        width: 50px;
        height: 30px;
        margin-left: auto;
        margin-right: auto;
    }


/* Match cards starts */

.card
{
  margin-bottom: 0px;
    margin-top: 10px;
}
.left
{
  height: 100px;
    border-radius: 5px;
    display: inline;
    margin-right: 4px;
    margin-top: 0px;
}
 
.right
{
  height: 100px;
    border-radius: 5px;
    display: inline;
    margin-left: 2px;
    margin-right: 0px;
    margin-top: 0px;
}
  .font
  {
    font-size:15.5px;
    font-weight:bold;
  }
  small
  {
    color:black;
    font-weight:bold;
  }
  .main
  { 
    padding: 10px;
  height: 100vh;
  overflow: auto;
  
  }

  @media only screen and (min-width: 768px) {
   .card
   {
     width:500px;
   }
   .left
  {
    height: 100px;
    border-radius: 5px;
    display: inline;
    margin-right: 40px;
    margin-top: 0px;
  }
  .right
  {
    height: 100px;
    border-radius: 5px;
    display: inline;
    margin-left: 40px;
    margin-right: 0px;
    margin-top: 0px;
  }
   .main
  {
  
    padding: 15px;
    width:555px;
  height: 92vh;
  overflow: auto;
 
  }
  .mar
  {
    margin: -15px;
    width: 555px;
    color: white;
    font-weight: bold;
    background: #3582ff;
  }
}
.mar
  {
    margin: -15px;
    width: 109%;
    border-radius: 0px;
    background: #3582ff;
  }
  
/* Match cards ends */


       /* media query starts for bellow 600px*/
@media only screen and (max-width: 600px)
       {
        body
        {
            background: url(./assets/img/bg.jpg)no-repeat;
           background-color:#0078d7;
            background-position-x: 45%;
        }
        .navbar
        {
            width:100%;
            margin:auto;
           
        }
        .middle
    {
        width:100%;
        height:auto;
        margin:auto;
        margin-top:70px;
        background-color:#cccccccc;
    }
    .navbar-bottom .material-icons
    {
        margin-left: 8px;
        font-size: 35px;

    }
    .navicon
    {
        width: 50px;
        height: 30px;
        margin-left: auto;
        margin-right: auto;
    }
       }
       /* media query ends*/
.navbar-bottom .material-icons:hover
{
    color:#0078d7;
    transition: .5s;
}
.modal .modal-header .close i
  {
    color:white;
  }
  .modal-title
  {
    margin-bottom: 20px;
    color:white;
  }
  .modal-open .modal
  {
    margin-top: 140px;
  }
 .top
  {
      margin-top: 75px;
  }
  .btm
  {
    margin-top: 11px;
    margin-bottom: 11px;
  }
  
  .row {
    display: flex;
    flex-wrap: wrap;
    margin-right: auto;
    margin-left: auto;
  }
  .tit
  {
    font-size:12px;
    font-weight:bolder;
 font-color:black;
  }
  .blder
  {
    font-weight:bolder;
  }
.bttn
{
  border:none;
  background-color: #ffffff00;
}

.main
  {
    padding: 15px;
    margin-top: 46px;
  height: 86vh;
  overflow: auto;
  background: #03a9f4;
  }

  @media only screen and (min-width: 768px) {
   .card
   {
     width:500px;
   }
   .main
  {
  
    padding: 15px;
    width:555px;
  height: 92vh;
  overflow: auto;
  background: #03a9f4;
  }
}

@media only screen and (min-width: 768px) {
  .modal .modal-dialog
{
  margin-top:28%;
}
}


         </style>

<style>

.header {
    background-color: #3b5998;
    color: white;
    padding: 35px;
       
}
.header1 {
    background-color: #3b5998;
    color: white;
    padding: 1%;
     border-color: white; 
  border-width: 1px; 
border-style: solid;
   text-align: center;
     width: 46%;
     font-size: 100%;
     
    position: absolute;
    bottom: 10%;
    left: 3%;
   
       
}
.header2 {
    background-color: white;
    color: #3b5998;
    padding: 1%;
     border-color: white; 
border-style: solid;
border-width: 1px; 
     text-align: center;
     width: 46%;
     font-size: 100%;
     
    position: absolute;
   bottom: 10%;
    left: 51%;
       
}
.header3{
    background-color: white;
    color: #3b5998;
    padding: 3px;
     border-color: #3b5998; 
border-style: solid;
border-width: 1px; 
     text-align: center;
  width:60px;
       font-size: 14px;
       
}
.new2
{

text-decoration: none;

}


</style>

    </head>
    <body>
    
<div class="navbar navbar-top fixed-top">
<div class="header6">
<?php

$ty1=((intval($match_id)+$ty)*3)-$ty;

echo '
<a href="contestslivenewt.php?trans1='.$ty1.'">
<i class="material-icons" style="font-size: 20px; color:white;">
arrow_back
</i></a>
&nbsp;&nbsp;&nbsp;
<a href="homet.php">
<i class="material-icons" style="font-size: 20px; color:white;">
home
</i></a>

';

?>
</div>

<div class="header7">
<?php
echo '
<a href="#" onClick="alert(\'Wallet Balance: Rs.0\')">
<i class="material-icons" style="font-size: 20px; color:white;">
account_balance_wallet
</i></a>

';

?>
</div>


<div class="header5">
CONTESTS</div>
<div class="header4">

<?php
                       $qry='SELECT matches.matchid,matches.time,matches.match_type, team1.team_name AS team1, team1.image AS team1_image, team2.team_name AS team2, team2.image AS team2_image FROM matches JOIN team team1 ON matches.t1= team1.id LEFT OUTER JOIN team team2 ON matches.t2=team2.id WHERE matches.matchid='.$match_id;

                        $result1 = mysqli_query($con,$qry);
                        $rows1 = mysqli_num_rows($result1);

                        if($rows1>0)
                        {
                          while ($rows1 = mysqli_fetch_array($result1)) {
                            $t1=$rows1['team1'];
                            $t1_image=$rows1['team1_image'];
                            $t2_image=$rows1['team2_image'];
                            $t2=$rows1['team2'];
                            $matchtype=$rows1['match_type'];
                            $match3=$rows1['matchid'];
                            $finaldate=$rows1['time'];

                          /*  echo '<table><tr><td><p><i  style="font-size: 13px; color:black; text-align: left; padding-right:130px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$t1.' vs '.$t2.'</i></p></td>

<td>

<p class="text-center"><i style="font-size: 13px; color:red;" class="material-icons">alarm</i><i  style="font-size: 13px; color:red;" id="'.$match3.'"></i></p></td>


<td>
<p><i  style="font-size: 13px; color:black; text-align: right; padding-left:130px;">'.$matchtype.'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</i></p>
</td>

</tr></table>*/

echo '

<style>
.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: white;
  
}


.new {
  background-color: white;
  width: 200PX;
  margin: 3px;
  color: Black;
  text-align: center;
  line-height: 22px;
  font-size: 14px;
 text-decoration: none;
}
</style>


<div class="flex-container">
<div class="new">'.$t1.' vs '.$t2.'</div>
<div class="new">Live</div>
<div class="new">'.$matchtype.'</div>
</div>';


}
}
?>


</div>
</div>

      <div class="middle">
<br />
<?php

$email=$_SESSION["email"] ;
$ctccount=0;
$arr = array(1,2);

$ststatus=1;
$qry="SELECT * FROM `matches` WHERE `matchid`='$match_id'";
$result1 = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result1);
if($rows>0)
{
 while ($rows = mysqli_fetch_array($result1)) {
    $ststatus=$rows['status'];
}


}


$qry="SELECT `contests_id`, `amount`, `no_of_teams`, `fee` FROM `contests` where contests_id='$contest_id11'";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{
  $contest_id=$rows['contests_id'];
  $amt=$rows['amount'];
  $no_of_teams=$rows['no_of_teams'];
  $fee=$rows['fee'];

$winners=0;

$qry1="SELECT  max(max1) as ct FROM `prize` where `contestid`='$contest_id'";
$result1=mysqli_query($con,$qry1);
while($rows1=mysqli_fetch_assoc($result1))
{

  $winners=$rows1['ct'];

}
  
  
  
$qry2="SELECT count(*) as cont1 FROM `matches_joined` where  contests_id='$contest_id11'  and  `match_id`='$match_id'";
$result2=mysqli_query($con,$qry2);
$rows2=mysqli_num_rows($result2);
while($rows2=mysqli_fetch_assoc($result2))
{

$contest_id111=$rows2['cont1'];
$diff1=  $no_of_teams - $contest_id111;
$perc1= (100-($diff1*100)/$no_of_teams);
$ctccount++;
$arr[$ctccount]=$contest_id11;

    echo '
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit" style="color:black;" >Total Prize Money</span><br><span class="blder" style="color:black;">'.$amt.'</span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" style="color:black;">Winners </span><br><span class="blder"><button class="bttn"  style="color:black;" data-toggle="modal" data-target="#myModal'.$ctccount.'">'.$winners.'<span class="dropdown-toggle"></span></button></span>
  </div>
  <div class="col  text-right float-right">
  <span class="tit" style="color:black;">Entry Fee</span><br><span class="blder" style="color:black;">'.$fee.'</span>
  </div>
  </div>

  <div class="container">
  <div class=" progress progress-line-danger" style="width:80%;">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: '.$perc1.'%;">
                  <span class="sr-only">50% Complete</span>
                </div>
              </div>
    </div>
    <div class="container">
    <div style="display:inline; color:black;">
    '.$contest_id111.' Team(s) Joined in this Contest
    </div>
     ';
    
   echo '
    

    </div>
    <br />
   </div>
';




}

  
}


echo'
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit"><b>USER</b></span>
    </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" ><b>POINTS</b></span>
</div>
  <div class="col  text-right float-right">
  <span class="tit"><b>RANK</b></span>
  </div>
  </div>
  </div>';


/*
echo '
<div class="flex-container">
<div class="new">User</div>
<div class="new">Team</div>
<div class="new">Rank</div>
</div>';
*/

$rank123=array(1.0,1.0,1.0,1.0);
$user123=array(1,1,1,1);
$countrank=0;

$query="SELECT user_id,match_id,contests_id,team_id  FROM `matches_joined` WHERE  contests_id='$contest_id11'  and `match_id`='$match_id'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$user1=$rows['user_id'];
$user12=$rows['team_id'];


$plypointslive=0.0;
//points calculation

$query1="SELECT * FROM `totalpoints` WHERE `teamid`='$user12' and `matchid`='$match_id'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$plypointslive=floatval(trim($rows1['points']));
}

$countrank++;
$rank123[$countrank]=$plypointslive;
$user123[$countrank]=$user12;

}


for($i=1;$i<=$countrank;$i++)
{
for($j=$i;$j<=$countrank;$j++)
{

if($rank123[$i]<$rank123[$j])
{
$tyr=$rank123[$i];
$rank123[$i]=$rank123[$j];
$rank123[$j]=$tyr;

$ttj=$user123[$i];
$user123[$i]=$user123[$j];
$user123[$j]=$ttj;

}

}
}

$rank333=array(1,1,1);

$iyu=1;
for($i=1;$i<$countrank;$i++)
{

$rank333[$i]=$iyu;

if($rank123[$i]==$rank123[$i+1])
{
$iyu=$iyu;
}
else
{
$iyu=$i+1;
}


}

$rank333[$countrank]=$iyu;








$email=$_SESSION["email"] ;




for($yu=1;$yu<=$countrank;$yu++)
{

$query="SELECT user_id,match_id,contests_id,team_id FROM `matches_joined` WHERE  contests_id='$contest_id11'  and `user_id`='$email' and `match_id`='$match_id' 
 and team_id='$user123[$yu]'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$user1=$rows['user_id'];
$user12=$rows['team_id'];

$tttcount=0;

$query2="SELECT * FROM `team_number` WHERE `team_id`='$user12'";
$result2=mysqli_query($con,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$tttcount=$rows2['team_name'];
}

$query1="SELECT username  FROM `user` WHERE  email='$user1'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$user2=$rows1['username'];


$plypointslive=0.0;
//points calculation

$query1="SELECT * FROM `totalpoints` WHERE `teamid`='$user12' and `matchid`='$match_id'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$plypointslive=floatval(trim($rows1['points']));
}

$ty2=((intval($user12)+$ty)*3)-$ty;

echo '
<a href="previewlivenewt.php?trans1='.$ty2.'">
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit"><font color="orange">'.$user2.'(T'.$tttcount.')</font></span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" ><font color="orange">'.$plypointslive.'</font></span>
</div>
  <div class="col  text-right float-right">';


for($i=1;$i<=$countrank;$i++)
{

if($user12==$user123[$i])
{
$indi=$i;
break;
}


}



echo '
  <span class="tit"><font color="orange">'.$rank333[$indi].'</font></span>
  </div>
  </div>
  </div></a>';


}


}



}



for($yu=1;$yu<=$countrank;$yu++)
{


$query="SELECT user_id,match_id,contests_id,team_id  FROM `matches_joined` WHERE  contests_id='$contest_id11'  and `match_id`='$match_id' and `user_id` not in('$email') and team_id='$user123[$yu]'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$user1=$rows['user_id'];
$user12=$rows['team_id'];

$tttcount=0;

$query2="SELECT * FROM `team_number` WHERE `team_id`='$user12'";
$result2=mysqli_query($con,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$tttcount=$rows2['team_name'];
}

$query1="SELECT username  FROM `user` WHERE  email='$user1'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$user2=$rows1['username'];

if($ststatus==1)
{

echo'
<a href=""  onclick="alert(\'Match not yet started\');">
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit"><font color="black">'.$user2.'(T'.$tttcount.')</font></span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" ><font color="black">'.$plypointslive.'</font></span>
</div>
  <div class="col  text-right float-right">';

for($i=1;$i<=$countrank;$i++)
{

if($user12==$user123[$i])
{
$indi=$i;
break;
}


}

echo '
  <span class="tit"><font color="black">'.$rank333[$indi].'</font></span>
  </div>
  </div>
  </div></a>';


}
else
{

$plypointslive=0.0;
//points calculation

$query1="SELECT * FROM `totalpoints` WHERE `teamid`='$user12' and `matchid`='$match_id'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$plypointslive=floatval(trim($rows1['points']));
}

$ty3=((intval($user12)+$ty)*3)-$ty;

echo '
<a href="previewlivenewt.php?trans1='.$ty3.'">
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit"><font color="black">'.$user2.'(T'.$tttcount.')</font></span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" ><font color="black">'.$plypointslive.'</font></span>
</div>
  <div class="col  text-right float-right">';

for($i=1;$i<=$countrank;$i++)
{

if($user12==$user123[$i])
{
$indi=$i;
break;
}


}

echo ' <span class="tit"><font color="black">'.$rank333[$indi].'</font></span>
  </div>
  </div>
  </div></a>';


}



}



}


}


?>
<br /><br /><br />
</div>
<div>



  <?php

for($i=1;$i<=$ctccount;$i++)
{
 echo '<!-- Classic Modal -->
   <div class="modal fade" id="myModal'.$i.'" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info">
          <h5 class="modal-title">Rank and Prize</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <div class="modal-body">';


$qry1="SELECT  * FROM `prize` where `contestid`='$arr[$i]'";
$result1=mysqli_query($con,$qry1);
while($rows1=mysqli_fetch_assoc($result1))
{

$min1=$rows1['min1'];
$max1=$rows1['max1'];
$prize1=$rows1['prize'];

    if($min1==$max1)
   {  
     echo '<span>Rank '.$min1.'</span><span class="float-right">'.$prize1.'</span><br>';

    }
else
  {
 echo '<span>Rank '.$min1.'-'.$max1.'</span><span class="float-right">'.$prize1.'</span><br>';

   }
         

}


echo'
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger btn-link" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!--  End Modal -->
</div>';
}  

?>
          

 </div>




      </div>

      <?php





      ?>
      
      
        <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="./assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="./assets/js/plugins/moment.min.js"></script>
  <!--	Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="./assets/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="./assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/material-kit.js?v=2.0.3" type="text/javascript"></script>
  <script>
    $(document).ready(function() {
      //init DateTimePickers
      materialKit.initFormExtendedDatetimepickers();

      // Sliders Init
      materialKit.initSliders();
    });


    function scrollToDownload() {
      if ($('.section-download').length != 0) {
        $("html, body").animate({
          scrollTop: $('.section-download').offset().top
        }, 1000);
      }
    }
  </script>
    </body>
</html>