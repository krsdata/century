<?php
include("connection.php");
$match_id=$_GET['match_id'];
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
    left: 25%;
       
}

.header3 {
    background-color: lightgrey;
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
    left: 25%;
       
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


.new2
{

text-decoration: none;

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
           font-size: 15px !important;
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
.btm
  {
    margin-top: 11px;
    margin-bottom: 11px;
    padding:5px;
  }
  .tit
  {
    font-size:12px;
    font-weight:bolder;
  }
.blder
  {
    font-weight:bolder;
  }

         </style>

    </head>
    <body>
    <div class="navbar navbar-top fixed-top">
<div class="header6">
<?php
echo '
<a href="contests1.php?match_id='.$match_id.'">
<i class="material-icons" style="font-size: 20px; color:white;">
arrow_back
</i></a>';

?>
</div>
<div class="header5">
MY TEAMS</div>
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

                            echo '<center><table><tr><td><p class="text-center"><i  style="font-size: 13px; color:black;">'.$t1.' vs '.$t2.'</i></p></td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</td>
<td>

<p class="text-center"><i style="font-size: 13px;" class="material-icons">alarm</i><i  style="font-size: 13px; color:red;" id="'.$match3.'"></i></p></td></tr></table></center>

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
<center>You can create upto 6 teams for a single contest</center>
        
<?php
$email=$_SESSION["email"] ;

$query="SELECT * FROM `user_team` WHERE `user_id`='$email' and `match_id`='$match_id'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{
$count11++;
$caption=$rows['caption'];
$VCaption=$rows['vice_caption'];
$Userteam_id=$rows['user_team_id'];



$email=$_SESSION["email"] ;

$query1="SELECT * FROM `players` WHERE `player_id`='$caption'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$caption=$rows1['player_name'];
}
$email=$_SESSION["email"] ;

$query2="SELECT * FROM `players` WHERE `player_id`='$VCaption'";
$result2=mysqli_query($con,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$VCaption=$rows2['player_name'];
}


$tttcount=0;

$query2="SELECT * FROM `team_number` WHERE `team_id`='$Userteam_id'";
$result2=mysqli_query($con,$query2);
$rows2=mysqli_num_rows($result2);
while ($rows2 = mysqli_fetch_array($result2)) 
{
$tttcount=$rows2['team_name'];
}




echo'
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
  <span class="tit">Team Name</span><br><span class="blder">Team'.$tttcount.'</span>
  </div>
  <div class="col text-center" style="width: 150px;">
  <span class="tit" >Caption Name</span><br><span class="blder">'.$caption.'</span>
</div>
  <div class="col  text-right float-right">
  <span class="tit">Vice Caption</span><br><span class="blder">'.$VCaption.'</span>
  </div>
  </div>
    <div class="container">
    <div style="display:inline;float: right;">
<a href="preview.php?match_id='.$match_id.'&teamid='.$Userteam_id.'">
    <button class="btn btn-info ">Preview</button></a>

<a href="team12.php?match_id='.$match_id.'&team_id='.$Userteam_id.'">
    <button class="btn btn-info ">EDIT</button></a>
    </div>
    </div>
    </div>';
}
?>    
 
  

<br /><br />


      </div>
    
      <?php


$query="SELECT count(*) as count1 FROM `user_team` WHERE `user_id`='$email' and `match_id`='$match_id'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$count1=$rows['count1'];
}

if($count1>5)
{

   
      echo'
<div class="navbar navbar-bottom fixed-bottom">
 
      <div class="navicon">
<button type="button" class="header3" disabled>CreateTeam</button>
 </div>
   <div>
';
}
else
{
   
      echo'
<div class="navbar navbar-bottom fixed-bottom">

<a href="team1.php?match_id='.$match_id.'" class="new2"><div class="header2">CREATE TEAM '.($count1+1).'</div></a> 
 
      <div>';
}


      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>