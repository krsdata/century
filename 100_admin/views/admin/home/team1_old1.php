<?php
include("connection.php");
$match_id=$_GET['match_id'];
if(!isset($_SESSION["player_no"]) ){
  $_SESSION["player_no"]=0;
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Fantacy Cric
  </title>s
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  
  <!-- CSS Files -->
  <link href="./assets/css/material-kit.css?v=2.0.3" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />
  <link href="./assets/css/test.css" type="text/css" rel="stylesheet">
  <style>



.flex-container {
  display: flex;
  flex-wrap: nowrap;
  background-color: #5b5455;
  
}
.new {
  background-color: #5b5455;
padding-top:3px; 
padding-left:15px; 
  width: 90PX;
  color: white;
  text-align: center;
  font-size: 18px;
 text-decoration: none;

}

.vl {
    border-left: 6px dashed  grey;
    height: 60px;
}



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

.new2{
  background-color: #5b5455;
padding-top:3px; 
  width: 70PX;
  color: white;
  text-align: center;
  font-size: 18px;
 text-decoration: none;
}
.new1{
  background-color: #5b5455;
padding-top:3px; 
  width: 50PX;
  color: white;
  text-align: center;
  font-size: 18px;
 text-decoration: none;
}



span.step {
  background: blue;
  border-radius: 1.5em;
  -moz-border-radius: 0.8em;
  -webkit-border-radius: 0.8em;
  color: white;
  display: inline-block;
  font-weight: bold;
  line-height: 1.6em;
  margin-right: 5px;
  text-align: center;
  width: 1.6em; 
}


span.step1 {
  background: blue;
  border-radius: 3.5em;
  -moz-border-radius: 1.8em;
  -webkit-border-radius: 1.8em;
  color: white;
  display: inline-block;
  font-weight: bold;
  line-height: 2.6em;
  margin-right: 5px;
  text-align: center;
  width: 2.6em; 
}


    .row
    {
      margin-top: -37px;
    }
.main
  {  margin-top: 70px;
    padding: 15px;
  height: 100vh;
  overflow: auto;
  background: #03a9f4;
  }

.mar
  {
    margin-bottom: -25px;
  }
  .widt
  {
    width:150px;
  }
  .w1
  {
    width:fit-content;
  }
  .imgs
  {
    width: 70px;
  }

input[type="checkbox"] {
  display: none;
}
 input[type=checkbox] + .lab {
  color: black;
  font-style: normal;
  cursor: pointer;
  transition: 0.5s;

} 
input[type=checkbox]:checked + .lab {
  color: black;
  font-style: normal;
  cursor: pointer;
  transition: 0.5s;
background:white;

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
 body
        {
            background: url(./assets/img/bg.jpg)no-repeat;
            background-color:#0078d7;
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
        background-color:#0078D7 !important;
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
        padding: 10px;
        height: 60px;
background-color: #5b5455;
    }
    .navbar-bottom .material-icons
    {
        margin-left: 8px;
        font-size: 45px;
        color: #0078d780;
        transition: .5s;
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
    margin-right: 8px;
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
    padding: 15px;
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
    margin-bottom:-25px;
    width: 555px;
    color: white;
    font-weight: bold;

  }
}
.mar
  {
    margin: -15px;
    margin-bottom:-25px;
    width: 109%;
    border-radius: 0px;
    
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
        height: 90vh; 
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
.card-nav-tabs
{
  margin-top: 40px;
}
.row
{
  margin-top: -25px;
}
.h3
{
  line-height: 1.0em;
}
  </style>
  
</head>

 <body>
    
<div class="navbar navbar-top fixed-top">
<div class="header6">
<?php
echo '
<a href="matchteam.php?match_id='.$match_id.'">
<i class="material-icons" style="font-size: 20px; color:white;">
arrow_back
</i></a>
';

?>
</div>


<div class="header5">
CREATE TEAM</div>
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


.newt {
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
<div class="newt">'.$t1.' vs '.$t2.'</div>
<div class="newt"><i style="font-size: 13px; color:red;" class="material-icons">alarm</i><i  style="font-size: 13px; color:red;" id="'.$match3.'"></i></div>
<div class="newt">'.$matchtype.'</div>
</div>';


echo'

<script>
// Set the date were counting down to
 var countDownDate'.$match3.'= new Date("'.$finaldate.'").getTime();

// Update the count down every 1 second
var x'.$match3.' = setInterval(function() {

    // Get todays date and time
    var now'.$match3.' = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance'.$match3.' = countDownDate'.$match3.' - now'.$match3.';
    
    // Time calculations for days, hours, minutes and seconds
    var days'.$match3.' = Math.floor(distance'.$match3.' / (1000 * 60 * 60 * 24));
    var hours'.$match3.' = Math.floor((distance'.$match3.' % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes'.$match3.' = Math.floor((distance'.$match3.' % (1000 * 60 * 60)) / (1000 * 60));
    var seconds'.$match3.' = Math.floor((distance'.$match3.' % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("'.$match3.'").innerHTML =days'.$match3.' + "d:" + hours'.$match3.' + "h:"
    + minutes'.$match3.' + "m:" + seconds'.$match3.' + "s";
    
    // If the count down is over, write some text 
    if (distance'.$match3.' < 0) {
        clearInterval(x'.$match3.');
        document.getElementById("'.$match3.'").innerHTML = "Completed";



    }
}, 1000);
</script> ';

}
}
?>


</div>
</div>



 
 
 <div class="middle">

        <div id="nav-tabs">
        <?php

/*
if ($_SESSION['player_no']==1) 
{
  $_SESSION['player_no']=0;
     echo'<div class="alert alert-info " style="margin-top: -5px;">
    <div class="container">
      <div class="alert-icon">
        <i class="material-icons">info_outline</i>
      </div>
      <button type="button" class="close fade" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true"><i class="material-icons">clear</i></span>
      </button>
      <b>Info alert:</b> Please Select 11 Players...
    </div>
  </div>';
}
*/

$totacount=0;

$email=$_SESSION['email'];

$queryteam="SELECT * FROM `user_team` WHERE `user_id`='$email' and `match_id`='$match_id'";
$resultteam=mysqli_query($con,$queryteam);
$rowsteam=mysqli_num_rows($resultteam);
if($rowsteam>0)
{
?>


  <?php
}
?>

                <div class="row mx-auto" style="margin-top:-8px;">
                  <div class="col-md-12">
                    <h3 class="text-center">
                      <small>Create Your Team</small>
                    </h3>
                    <!-- Tabs with icons on Card -->
                    <div class="card card-nav-tabs">
                      <div class="card-header card-header-info" style="padding: 0px;">
                        <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                        <div class="nav-tabs-navigation">
                          <div class="nav-tabs-wrapper">
                            <ul class="nav nav-tabs ml-auto justify-content-center" data-tabs="tabs">
                              <li class="nav-item">
                                <a class="nav-link active" href="#wk" data-toggle="tab">
                                        WIK <br />
                                    <span class="step" id="w121">0</span>
                                </a>
                            
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#bm" data-toggle="tab">
                                   BAT  <br />
                                    <span class="step" id="w122">0</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#ar" data-toggle="tab">
                                   ALR
                                    <br />
                                    <span class="step" id="w123">0</span>
                                </a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#bo" data-toggle="tab">
                                   BOWL 
                                        <br />
                               <span class="step" id="bowbow">0</span>
                                    </a>
                                  </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                   <?php echo'<form action="selectedteam1.php?match_id='.$match_id.'" method="post"  onsubmit="return test()">';?>
                      <div class="card-body ">
                        <div class="tab-content">
                          <div class="tab-pane active" id="wk">
                          <div class="text-center" style="font-weight:bolder;">Pick 1 Wicket Keeper</div><br>
<?php

$ty1="";
$ty2="";
$fft=0;

$matchqry="SELECT * FROM `matches` WHERE `matchid`='$match_id'";
$matchresult=mysqli_query($con,$matchqry);
$matchrows=mysqli_num_rows($matchresult);
while($matchrows=mysqli_fetch_assoc($matchresult))
{
  $t1=$matchrows['t1'];
  $t2=$matchrows['t2'];
}
$qry="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_type=1";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{
$tname=$rows['team_name'];
$pname=$rows['player_name'];
$ptype=$rows['player_type'];
$pppoint=$rows['player_points'];
$pid=$rows['player_id'];

if($fft==0)
{
$fft=1;
$ty1=$tname;
}
if($fft==1&&$ty1!=$tname)
{
$fft=2;
$ty2=$tname;
}


switch($ptype)
{
  case 1:
  {
    $ptype="WK";
    break;
  }
  case 2:
  {
    $ptype="BAT";
    break;
  }
  case 3:
  {
    $ptype="ALL Rounder";
    break;
  }
  case 4:
  {
    $ptype="BOWL";
    break;
  }
  default:
  {
    break;
  }
}
$totacount++;

echo'<div class="container-fluid row mar ">
<div class="col inputGroup " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.',1,'.$pppoint.','.$tname.'" name="selectedplayers[]" class="fantasy" onclick="test1('.$totacount.')"><label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="images/wicketkeeper.jpg"></div>
<p style="width: 175px; font-size: 13.5px;margin-top: 5px; margin-left: 83px;"><span>'.$pname.'</span><br>
<span>'.$tname.'</span> | <span>'.$pppoint.'</span> | <span>'.$ptype.'</span></label></p>
</div>
</div>
';


}

?>

                          </div>
                          <div class="tab-pane" id="bm">
                          <div class="text-center" style="font-weight:bolder;">Pick 3-5 Bats Man</div><br>
                          <?php
$qry="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_type=2";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{
$tname=$rows['team_name'];
$pname=$rows['player_name'];
$ptype=$rows['player_type'];
$pppoint=$rows['player_points'];
$pid=$rows['player_id'];
switch($ptype)
{
  case 1:
  {
    $ptype="WK";
    break;
  }
  case 2:
  {
    $ptype="BAT";
    break;
  }
  case 3:
  {
    $ptype="ALL Rounder";
    break;
  }
  case 4:
  {
    $ptype="BOWL";
    break;
  }
  default:
  {
    break;
  }
}
$totacount++;
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.',2,'.$pppoint.','.$tname.'" name="selectedplayers[]" class="fantasy" onclick="test1('.$totacount.')"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="images/batsman.jpg"></div>
<p style="width: 175px; font-size: 13.5px;margin-top: 10px;margin-left: 83px;"><span>'.$pname.'</span><br>
<span>'.$tname.'</span> | <span>'.$pppoint.'</span> | <span>'.$ptype.'</span></label></p>
</div>
</div>
';


}


?>




                          </div>
                          <div class="tab-pane" id="ar">
                          <div class="text-center" style="font-weight:bolder;">Pick 1-3 AllRounder</div><br>
                          <?php
$qry="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_type=3";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{
$tname=$rows['team_name'];
$pname=$rows['player_name'];
$ptype=$rows['player_type'];
$pppoint=$rows['player_points'];
$pid=$rows['player_id'];
switch($ptype)
{
  case 1:
  {
    $ptype="WK";
    break;
  }
  case 2:
  {
    $ptype="BAT";
    break;
  }
  case 3:
  {
    $ptype="ALL Rounder";
    break;
  }
  case 4:
  {
    $ptype="BOWL";
    break;
  }
  default:
  {
    break;
  }
}
$totacount++;
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'"  value="'.$pid.',3,'.$pppoint.','.$tname.'" name="selectedplayers[]" class="fantasy" onclick="test1('.$totacount.')"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="images/allrounder.jpg"></div>
<p style="width: 175px; font-size: 13.5px;margin-top: 10px;margin-left: 83px;"><span>'.$pname.'</span><br>
<span>'.$tname.'</span> | <span>'.$pppoint.'</span> | <span>'.$ptype.'</span></label></p>
</div>
</div>
';


}


?>



                              </div>
                          <div class="tab-pane" id="bo">
                          <div class="text-center" style="font-weight:bolder;">Pick 3-5 Bowler</div><br>
<?php
$qry="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_type=4";
$result=mysqli_query($con,$qry);
$rows=mysqli_num_rows($result);
while($rows=mysqli_fetch_assoc($result))
{
$tname=$rows['team_name'];
$pname=$rows['player_name'];
$ptype=$rows['player_type'];
$pppoint=$rows['player_points'];
$pid=$rows['player_id'];
switch($ptype)
{
  case 1:
  {
    $ptype="WK";
    break;
  }
  case 2:
  {
    $ptype="BAT";
    break;
  }
  case 3:
  {
    $ptype="ALL Rounder";
    break;
  }
  case 4:
  {
    $ptype="BOWL";
    break;
  }
  default:
  {
    break;
  }
}
$totacount++;
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'"  value="'.$pid.',4,'.$pppoint.','.$tname.'" name="selectedplayers[]" class="fantasy" onclick="test1('.$totacount.')"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="images/bowler.jpg"></div>
<p style="width: 175px; font-size: 13.5px;margin-top: 10px;margin-left: 83px;"><span>'.$pname.'</span><br>
<span>'.$tname.'</span> | <span>'.$pppoint.'</span> | <span>'.$ptype.'</span></label></p>
</div>
</div>
';


}


?>

                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- End Tabs with icons on Card -->
                  </div>
                  
                </div>
                

          
             </div>
            </div>



<?php

/*
<div class="navbar navbar-bottom fixed-bottom">
   <div class="navicon">
   <table><tr><td><font color="red">Points Left</font></td><td><span class="step1" id="wtotal1">0</span></td><td>/</td><td><span class="step1" id="wtotal2">100</span></td></tr></table>
      </div>
  <div class="navicon">
       <table><tr><td><font color="red">Total</font></td><td><span class="step1" id="wtotal">0</span></td></tr></table>
      </div>

      <div class="navicon">
     <button type="submit"  id="confirmButton1"  class="btn btn-rose" disabled>Next</button></div>
      </div>
<div class="navicon">  
      </div>
     <div>
*/

echo '
<div class="navbar navbar-bottom fixed-bottom">

<div class="flex-container">
<div class="new1"><span id="wtotalk">0</span><br /><p style="font-size:12px">'.$ty1.'</p></div>
<div class="new1"><span id="wtotalk1">0</span><br /><p  style="font-size:12px">'.$ty2.'</p></div>
<div class="new2"><span id="wtotal">0</span>/<font color="lightgrey">11</font><br /><p style="font-size:12px"> PLAYERS</p></div>
<div class="vl"></div>
<div class="newt"><span id="wtotal1">0</span>/<font color="lightgrey">100</font><br /><p style="font-size:12px;">CREDITSLEFT</p></div>
</div>
<button type="submit"  id="confirmButton1"  disabled>Next</button></div>

 <div>    ';

?>

            
  </form>
</div>

 
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


function test2(a)
{
var chk_arr =  document.getElementsByName("selectedplayers[]");
var chklength = chk_arr.length; 
         
var count=0;
var count1=0;
var count2=0;
var count3=0;
var count4=0;
var point=0.0; 
var cct=0.0;
var cct1=0;
var cct2=0;
var val1=" ";
var val2=" ";
var first1=0;

for(k=0;k<chklength;k++)
{

 if(chk_arr[k].checked==true)
 {
var str = chk_arr[k].value;
var res = str.split(",");
if(res[1]==1)
count1++;
if(res[1]==2)
count2++;
if(res[1]==3)
count3++;
if(res[1]==4)
count4++;

point=point+parseFloat(res[2]);
    count++;

if(first1==1&&val1!=res[3])
{
first1=2;
val2=res[3];
}
if(first1==0)
{
first1=1;
val1=res[3];
cct1++;
}
else
{
if(val1==res[3])
{
cct1++;
}
else
{
cct2++;
}
}



}
	
}

cct=100.0-point;

if(cct1>7||cct2>7)
{
chk_arr[a-1].checked = false;
alert("Only 7 players are allowed from single team");
}

if(cct>=0)
{

}
else
{
chk_arr[a-1].checked = false;
alert("Please check points left");
}

count=0;
count1=0;
count2=0;
count3=0;
count4=0;
point=0.0;
cct=0.0;

for(k=0;k<chklength;k++)
{

 if(chk_arr[k].checked==true)
 {
var str = chk_arr[k].value;
var res = str.split(",");
if(res[1]==1)
count1++;
if(res[1]==2)
count2++;
if(res[1]==3)
count3++;
if(res[1]==4)
count4++;

point=point+parseFloat(res[2]);
    count++;

}
	
}

cct=100.0-point;

document.getElementById("w121").innerHTML = count1;
document.getElementById("w122").innerHTML = count2;
document.getElementById("w123").innerHTML = count3;
document.getElementById("bowbow").innerHTML = count4;
document.getElementById("wtotal").innerHTML = count;
document.getElementById("wtotal1").innerHTML = cct;
document.getElementById("wtotalk").innerHTML = cct1;
document.getElementById("wtotalk1").innerHTML = cct2;



if(count==11)
{
    document.getElementById("confirmButton1").disabled = false;

}


}

function test1(a)
{
var chk_arr =  document.getElementsByName("selectedplayers[]");
var chklength = chk_arr.length; 
         
var count=0;
var count1=0;
var count2=0;
var count3=0;
var count4=0;
for(k=0;k<chklength;k++)
{

 if(chk_arr[k].checked==true)
 {
var str = chk_arr[k].value;
var res = str.split(",");
if(res[1]==1)
count1++;
if(res[1]==2)
count2++;
if(res[1]==3)
count3++;
if(res[1]==4)
count4++;

    count++;
}
	
}
if(count>11)
{
chk_arr[a-1].checked = false;
alert("Only 11 players are allowed");
test2(a);
return true;
}

test2(a);

if(count1>1)
{
chk_arr[a-1].checked = false;
alert("Only 1 Wicket Keeper is allowed");
//document.getElementById("w121").innerHTML = count1-1;
test2(a);
return true;
}
if(count2>5)
{
chk_arr[a-1].checked = false;
alert("5 Batsman are allowed");
//document.getElementById("w122").innerHTML = count2-1;
test2(a);
return true;
}
if(count3>3)
{
chk_arr[a-1].checked = false;
alert("3 Allrounders are allowed");
//document.getElementById("w123").innerHTML = count3-1;
test2(a);
return true;
}
if(count4>5)
{
chk_arr[a-1].checked = false;
alert("5 bowlers are allowed");
//document.getElementById("bowbow").innerHTML = count4-1;
test2(a);
return true;
}


if(count2==5)
{

if(count3==3)
{
chk_arr[a-1].checked = false;
alert("Minimum 3 bowlers are required");
//document.getElementById("w123").innerHTML = count3-1;
}
if(count4>4)
{
chk_arr[a-1].checked = false;
alert("Minimum 1 Alrounder is required");
//document.getElementById("bowbow").innerHTML = count4-1;
}
test2(a);
return true;
}

if(count3==3)
{

if(count2>4)
{
chk_arr[a-1].checked = false;
alert("Minimum 3 bowlers are required");
//document.getElementById("w122").innerHTML = count2-1;
}
if(count4>4)
{
chk_arr[a-1].checked = false;
alert("Minimum 3 batsman are required");
//document.getElementById("bowbow").innerHTML = count4-1;
}
test2(a);
return true;
}

if(count4==5)
{
if(count3==3)
{
chk_arr[a-1].checked = false;
alert("Minimum 3 batsman are required");
document.getElementById("w123").innerHTML = count3-1;
}
if(count2>4)
{
chk_arr[a-1].checked = false;
alert("Minimum 1 Alrounder is required");
document.getElementById("w122").innerHTML = count2-1;
}
test2(a);
return true;
}


}


function test()
{
var chk_arr =  document.getElementsByName("selectedplayers[]");
var chklength = chk_arr.length;             
var count=0;
for(k=0;k<chklength;k++)
{
    if(chk_arr[k].checked==true)
    count++;
} 
if(count==11)
return true;
else
{
alert("Please select 11 players");
return false;

}
}


  </script>
</body>

</html>
