<?php
include("../../../db/config.php");
session_start();

$match_id=$_GET['trans3'];
$contest_id=$_GET['trans1'];
$team_id=$_GET['trans2'];



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




#test111{
    background-color: lightblue;
    width: 400px;
    border: 15px solid green;
    padding: 25px;
    margin: 25px;
    color:blue;
    text-align: center;
}
#test211{
      color:blue;
    background-color: lightgrey;
    width: 290px;
    border: 10px solid green;
    padding: 30px;
    margin: 25px;
    text-align: center;
}
      
#test1
{

    background-color: white;
    color: black;
    padding: 14px 25px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
   border-style: groove;
   border-color:lightblue;


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

    </head>
    <body>
    
<div class="navbar navbar-top fixed-top">
<div class="header6">
<?php

 $ty1=((intval($contest_id)+$ty)*3)-$ty;


echo '
<a href="contests3_new.php?trans1='.$contest_id.'&trans2='.$match_id.'">
<i class="material-icons" style="font-size: 20px; color:white;">
arrow_back
</i></a>

';

?>
</div>

<div class="header7">
<?php

?>
</div>


<div class="header5">
PREVIEW</div>
<div class="header4">

<?php
                       //$qry='SELECT matches.matchid,matches.time,matches.match_type, team1.team_name AS team1, team1.image AS team1_image, team2.team_name AS team2, team2.image AS team2_image FROM matches JOIN team team1 ON matches.t1= team1.id LEFT OUTER JOIN team team2 ON matches.t2=team2.id WHERE matches.matchid='.$match_id;
             $qry='SELECT * FROM API_matches WHERE `mat_id`='.$match_id;

                        $result1 = mysqli_query($conn,$qry);
                        $rows1 = mysqli_num_rows($result1);

                        if($rows1>0)
                        {
                          while ($rows1 = mysqli_fetch_array($result1)) {
                            $mat_comp_id = $rows1['mat_comp_id'];
              $t1 = $rows1['mat_team1_id'];
              $t2 = $rows1['mat_team2_id'];
              
              $sql0 = "SELECT comp_title FROM API_competition WHERE `comp_id` = '$mat_comp_id'";
              $result0 = mysqli_query($conn,$sql0);
              $row0 = mysqli_fetch_assoc($result0);
              $comp_title = $row0['comp_title'];
              
              $sql1 = "SELECT team_logo_url FROM API_team WHERE `team_id` = '$t1'";
              $r1 = mysqli_query($conn,$sql1);
              $row1 = mysqli_fetch_assoc($r1);
              $sql2 = "SELECT team_logo_url FROM API_team WHERE `team_id` = '$t2'";
              $r2 = mysqli_query($conn,$sql2);
              $row2 = mysqli_fetch_assoc($r2);

                            $t1_image=$row1['team_logo_url'];

                            $t2_image=$row2['team_logo_url'];


                            $matchtype=$rows1['mat_sub_title'];
              $mat_short_title=$rows1['mat_short_title'];

                            $match3=$rows1['mat_id'];

                            $finaldate=$rows1['mat_startdate'];

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
<div class="new">'.$mat_short_title.'</div>
<div class="new"><i style="font-size: 13px; color:red;" class="material-icons">alarm</i><i  style="font-size: 13px; color:red;" id="'.$match3.'"></i></div>
<div class="new">'.$matchtype.'</div>
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
        <br />
<?php
$email=$_SESSION["email"] ;


$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id' and  `match_id`='$match_id'";
$result=mysqli_query($conn,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{
$count11++;
$caption=$rows['caption'];
$VCaption=$rows['vice_caption'];
$Userteam_id=$rows['user_team_id'];
$tttcount=$rows['user_team_number'];


$email=$_SESSION["email"] ;

$query1="SELECT * FROM `API_players` WHERE `ply_id`='$caption'";
$result1=mysqli_query($conn,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$caption=$rows1['ply_shortName'];
}
$email=$_SESSION["email"] ;

$query2="SELECT * FROM `API_players` WHERE `ply_id`='$VCaption'";
$result2=mysqli_query($conn,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$VCaption=$rows2['ply_shortName'];
}

$tttcount=0;

/* $query2="SELECT * FROM `team_number` WHERE `team_id`='$Userteam_id'";
$result2=mysqli_query($conn,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$tttcount=$rows2['team_name'];
} */

/*
echo'
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit">Team Name</span><br><span class="blder">Team'.$tttcount.'</span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" >Captain</span><br><span class="blder">'.$caption.'</span>
</div>
  <div class="col  text-right float-right">
  <span class="tit">Vice-Captain</span><br><span class="blder">'.$VCaption.'</span>
  </div>
  </div>
  </div>';
*/


}
?>    




<?php

$pcount0=0;
$pcount1=0;
$pcount2=0;
$pcount3=0;
$pcount4=0;
$div1="";
$style1="";




$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id' and `match_id`='$match_id'";
$result=mysqli_query($conn,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{

$playersdata=$rows['players'];
$team_players = get_object_vars(json_decode(unserialize($playersdata)));
//print_r($team_players);
$team_ids = array_values($team_players);//print_r($team_ids[0]);exit();
$playersdata = array_merge($team_ids[0],$team_ids[1]);
//$splittedstring=explode(",",$playersdata);
foreach ($playersdata as $key => $value) {
//echo "splittedstring[".$key."] = ".$value."<br>";

//$q1="SELECT * FROM `API_players` WHERE `ply_id`='$value'";
$q1="SELECT ply_shortName,rol_name AS ply_role FROM `API_players` JOIN API_player_role ON API_players.ply_id=API_player_role.rol_ply_id WHERE API_player_role.rol_ply_id='$value' AND API_player_role.rol_mat_id=$match_id";
$l1=mysqli_query($conn,$q1);
$s1=mysqli_num_rows($l1);
while ($s1 = mysqli_fetch_array($l1)) 
{
$plyname=$s1['ply_shortName'];
$plytype=$s1['ply_role'];
}
if($plytype=='wk')
{
 $pcount0++;
//$wk=$wk."<button>".$plyname."</button>";
}
if($plytype=='bat')
{
$pcount1++;
//$bt=$bt."<button>".$plyname."</button>";
}


if($plytype=='all')
{
$pcount2++;
//$al=$al."<button>".$plyname."</button>";
}
if($plytype=='bowl')
{
$pcount3++;
//$bw=$bw."<button>".$plyname."</button>";
}

} //for


}  //while



echo '

<style>
.container {
    position: relative;
    font-family: Arial;
}



.i-circle {
    background: blue;
    color: white;
    padding: 2px 4px;
    border-radius: 50px;
    font-size: 14px;
  
}
.i-circle1 {
    background: black;
    color: white;
    padding: 2px 4px;
    border-radius: 50px;
    font-size: 14px;
  
}

.text-block {
    position: absolute;
    bottom: 20px;
    right: 20px;
    background-color: black;
    color: white;
    padding-left: 20px;
    padding-right: 20px;
}

.centered11 {
    position: absolute;
    top: 20px; 
    ';


    if($pcount0==5)
{

echo ' left: 40px;';

}
else if($pcount0==4)
{
echo ' left: 60px;';
}
else if($pcount0==3)
{
echo ' left: 100px;';
} 
   echo '
}


.centered1 {
    position: absolute;
    top: 150px;
';

if($pcount1==5)
{

echo ' left: 40px;';

}
else if($pcount1==4)
{
echo ' left: 60px;';
}
else if($pcount1==3)
{
echo ' left: 100px;';
}

echo '
   
}

.centered2 {
    position: absolute;
    top: 280px;
';

if($pcount2==3)
{

echo ' left: 100px;';

}
else if($pcount2==2)
{
echo ' left: 120px;';
}
else if($pcount2==1)
{
echo ' left: 180px;';
}


echo '
   
}

.centered3 {
    position: absolute;
    top: 400px;
';

if($pcount3==5)
{

echo ' left: 40px;';

}
else if($pcount3==4)
{
echo ' left: 60px;';
}
else if($pcount3==3)
{
echo ' left: 100px;';
}


echo '
 
}


table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
   background: transparent;
    padding: 0px;
   background-color: rgba(0, 0, 0, 0.0) !important;
  }

th, td {
    text-align: center;
    padding: 1px;
  font-size: 12px;
     
}



</style>';


$div11="";
$div21="";
$div31="";
$div12="";
$div22="";
$div32="";
$div13="";
$div23="";
$div33="";
$div14="";
$div24="";
$div34="";
$div111="";
$div121="";
$div131="";
$div141="";

if($pcount0==3)
{

$div111="60px";

}
else if($pcount0==2)
{
$div111="70px";
}
else if($pcount0==1)
{
$div111="80px";
}

if($pcount1==5)
{

$div121="80px";

}
else if($pcount1==4)
{
$div121="90px";
}
else if($pcount1==3)
{
$div121="100px";
}

if($pcount2==3)
{

$div131="100px";

}
else if($pcount2==2)
{
$div131="140px";
}
else if($pcount2==1)
{
$div131="150px";
}

if($pcount3==5)
{

$div141="80px";

}
else if($pcount3==4)
{
$div141="90px";
}
else if($pcount3==3)
{
$div141="100px";
}


$ttw1=0;
$stat1=0;
$ffirst=0;
$ccco="";


$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id' and `match_id`='$match_id'";
$result=mysqli_query($conn,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{
  $playersdata=$rows['players'];
$team_players = get_object_vars(json_decode(unserialize($playersdata)));
//print_r($team_players);
$team_ids = array_values($team_players);//print_r($team_ids[0]);exit();
$playersdata = array_merge($team_ids[0],$team_ids[1]);
foreach ($playersdata as $key => $value) {
//echo "splittedstring[".$key."] = ".$value."<br>";

//$query10="SELECT * FROM `API_players` WHERE `ply_id`='$value'";
$query10="SELECT ply_shortName,rol_name AS ply_role FROM `API_players` JOIN API_player_role ON API_players.ply_id=API_player_role.rol_ply_id WHERE API_player_role.rol_ply_id='$value' AND API_player_role.rol_mat_id=$match_id";
$result10=mysqli_query($conn,$query10);
$rows10=mysqli_num_rows($result10);
$rows10 = mysqli_fetch_assoc($result10); 

  $plyname=$rows10['ply_shortName'];
$plytype=$rows10['ply_role'];
$teamid=$team_id;
$ppoints=0;

/*$query11="SELECT * FROM `API_player_point` WHERE `pnt_ply_id`='$value' AND `pnt_mat_id`='$match_id'";
$result11=mysqli_query($conn,$query11);
$rows11=mysqli_fetch_assoc($result11);
$ppoints=$rows11['pnt_total'];*/

$gty="";

if($plytype=='wk')
{


if($plyname==$caption)
{
$gty='<span class="i-circle">C</span>';
}
if($plyname==$VCaption)
{
$gty='<span class="i-circle1">VC</span>';
}
 

$len = strlen($plyname);

if($pcount0==5)
{
 if($len>9)
 $plyname=substr($plyname, 0, 7)."..";
}
if($pcount0==4)
{
 if($len>11)
 $plyname=substr($plyname, 0, 9)."..";
}
if($pcount0==3)
{
 if($len>13)
 $plyname=substr($plyname, 0, 11)."..";
}


if($ffirst==0)
{
$ffirst=1;
$ttw1=$teamid;
}
if($ttw1==$teamid)
$stat1=0;
else
$stat1=1;


if($stat1==1)
{
$ccco="#141430";
}
else
{
$ccco="red";
}




 /*$div11='
  <tr>
      <td style="background-color:transparent; color:white; width:150px;">'.$gty.'<br />
    <img src="images/wicketkeeper.jpg" width="40px" height="40px"></td>    
   </tr>
    <tr>
      <th style="background-color:'.$ccco.'; color:white; width:100px;">'.$plyname.'</th>
    </tr>
    <tr>
      <td style="background-color:white; color:#141430; width:10px;">'.$ppoints.' cr</td>
      </tr>
        </tr>';*/
  $div11=$div11.'<td style="background-color:transparent; color:white; width:80px;">'.$gty.'<br /><img src="images/allrounder.jpg" width="40px" height="40px"></td>
      <td>&nbsp;</td>';

$div21=$div21.'<th style="background-color:'.$ccco.'; color:white; width:'.$div111.';">'.$plyname.'</th>
      <th>&nbsp;</th>';

$div31=$div31.' <td style="background-color:white; color:#141430; width:80px;">'.$ppoints.' cr</td>
     <td>&nbsp;</td>';

}
if($plytype=='bat')
{



if($plyname==$caption)
{
$gty='<span class="i-circle">C</span>';
}
if($plyname==$VCaption)
{
$gty='<span class="i-circle1">VC</span>';
}


$len = strlen($plyname);

if($pcount1==5)
{
 if($len>9)
 $plyname=substr($plyname, 0, 7)."..";
}
if($pcount1==4)
{
 if($len>11)
 $plyname=substr($plyname, 0, 9)."..";
}
if($pcount1==3)
{
 if($len>13)
 $plyname=substr($plyname, 0, 11)."..";
}





if($ffirst==0)
{
$ffirst=1;
$ttw1=$teamid;
}
if($ttw1==$teamid)
$stat1=0;
else
$stat1=1;


if($stat1==1)
{
$ccco="#141430";
}
else
{
$ccco="red";
}



$div12=$div12.'<td style="background-color:transparent; color:white; width:80px;">'.$gty.'<br /><img src="images/batsman.jpg" width="40px" height="40px"></td>
      <td>&nbsp;</td>';

$div22=$div22.'<th style="background-color:'.$ccco.'; color:white; width:'.$div121.';">'.$plyname.'</th>
      <th>&nbsp;</th>';

$div32=$div32.' <td style="background-color:white; color:#141430; width:80px;">'.$ppoints.' cr</td>
     <td>&nbsp;</td>';

}
if($plytype=='all')
{


if($plyname==$caption)
{
$gty='<span class="i-circle">C</span>';
}
if($plyname==$VCaption)
{
$gty='<span class="i-circle1">VC</span>';
}


$len = strlen($plyname);

if($pcount2==3)
{
 if($len>13)
 $plyname=substr($plyname, 0, 11)."..";
}
if($pcount2==2)
{
 if($len>18)
 $plyname=substr($plyname, 0, 16)."..";
}
if($pcount2==1)
{
 if($len>20)
 $plyname=substr($plyname, 0, 18)."..";
}





if($ffirst==0)
{
$ffirst=1;
$ttw1=$teamid;
}
if($ttw1==$teamid)
$stat1=0;
else
$stat1=1;


if($stat1==1)
{
$ccco="#141430";
}
else
{
$ccco="red";
}



$div13=$div13.'<td style="background-color:transparent; color:white; width:80px;">'.$gty.'<br /><img src="images/allrounder.jpg" width="40px" height="40px"></td>
      <td>&nbsp;</td>';

$div23=$div23.'<th style="background-color:'.$ccco.'; color:white; width:'.$div131.';">'.$plyname.'</th>
      <th>&nbsp;</th>';

$div33=$div33.' <td style="background-color:white; color:#141430; width:80px;">'.$ppoints.' cr</td>
     <td>&nbsp;</td>';




}
if($plytype=='bowl')
{



if($plyname==$caption)
{
$gty='<span class="i-circle">C</span>';
}
if($plyname==$VCaption)
{
$gty='<span class="i-circle1">VC</span>';
}


$len = strlen($plyname);

if($pcount3==5)
{
 if($len>9)
 $plyname=substr($plyname, 0, 7)."..";
}
if($pcount3==4)
{
 if($len>11)
 $plyname=substr($plyname, 0, 9)."..";
}
if($pcount3==3)
{
 if($len>13)
 $plyname=substr($plyname, 0, 11)."..";
}





if($ffirst==0)
{
$ffirst=1;
$ttw1=$teamid;
}
if($ttw1==$teamid)
$stat1=0;
else
$stat1=1;


if($stat1==1)
{
$ccco="#141430";
}
else
{
$ccco="red";
}



$div14=$div14.'<td style="background-color:transparent; color:white; width:80px;">'.$gty.'<br /><img src="images/bowler.jpg" width="40px" height="40px"></td>
      <td>&nbsp;</td>';

$div24=$div24.'<th style="background-color:'.$ccco.'; color:white; width:'.$div141.';">'.$plyname.'</th>
      <th>&nbsp;</th>';

$div34=$div34.' <td style="background-color:white; color:#141430; width:80px;">'.$ppoints.' cr</td>
     <td>&nbsp;</td>';






}

} //for


}  //while


 $ty1=((intval($contest_id)+$ty)*3)-$ty;



echo '



<style>
img {
    
    filter: grayscale(30%);
}

.centeredpp {
    position: absolute;
    top: 3%;
    left: 88%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}
.centeredpp1 {
    position: absolute;
    top: 3%;
    left: 8%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}
.centeredpp2 {
    position: absolute;
    top: 5%;
    left: 50%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}

.centeredpp3 {
    position: absolute;
    top: 29%;
    left: 50%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}

.centeredpp4 {
    position: absolute;
    top: 56%;
    left: 50%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}

.centeredpp5 {
    position: absolute;
    top: 78%;
    left: 50%;
line-height: 1.2;
 transform: translate(-50%, -50%);  

}


</style>

















<div class="container">




  <center>
  <img src="images/cricket.jpg" alt="Nature" style="width:100%;">


<div class="centeredpp">
 <center>



<a href="contests3_new.php?trans1='.$contest_id.'&trans2='.$match_id.'">
<i class="material-icons" style="text-align: right; color:white; font-size: 20px;">close</i></a>
</center>
</div>

<div class="centeredpp1">
<p style="text-align: left; color:white; font-size: 14px;"><b>Team '.$tttcount.'</b>
</p>
</div>';

/*
<div class="centeredpp2">
<p style="text-align: left; color:white; font-size: 10px;">WICKET-KEEPER</p>
</div>

<div class="centeredpp3">
<p style="text-align: left; color:white; font-size: 10px;">BATSMEN</p>
</div>

<div class="centeredpp4">
<p style="text-align: left; color:white; font-size: 10px;">ALL-ROUNDERS</p>
</div>

<div class="centeredpp5">
<p style="text-align: left; color:white; font-size: 10px;">BOWLERS</p>
</div>


*/







echo '

  
  <div class="centered11">
   <div style="overflow-x:auto;">
 
  <table>
  <tr>
         '.$div11.'
   </tr>
    <tr>
    
   '.$div21.'
  
    </tr>
    <tr>
     
     '.$div31.'
       
    </tr>
 
         </tr>
  </table>

</div>
  </div>
  
   
  
  
  
  <div class="centered1">
   <div style="overflow-x:auto;">

  <table>
  <tr>
         '.$div12.'
   </tr>
    <tr>
    
   '.$div22.'
  
    </tr>
    <tr>
     
     '.$div32.'
       
    </tr>
 
         </tr>
  </table>

</div>
  </div>
  
  
   <div class="centered2">
   <div style="overflow-x:auto;">
  
  <table>
  
  <tr>
    '.$div13.'
   </tr>
  
    <tr>
       '.$div23.'
  
    </tr>
    <tr>
    '.$div33.'
       
       
    </tr>
 
         </tr>
  </table>

</div>
  </div>
  
  
  
  
  
  <div class="centered3">
   <div style="overflow-x:auto;">
    <table>
  
  <tr>
    '.$div14.'
   
   </tr>
  
    <tr>
   '.$div24.'
   
  
    </tr>
    <tr>
   '.$div34.'       
    </tr>
 
         </tr>
  </table>
  </center>
</div>
  </div>
  
  
  
    </center>
  
</div>






















</div></div></div>


';



?>



      </div>
    
      <?php


$query="SELECT count(*) as count1 FROM `user_team` WHERE  `match_id`='$match_id'";
$result=mysqli_query($conn,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$count1=$rows['count1'];
}




      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>