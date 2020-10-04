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
    background-color: #cccccccc;
    padding: 15px;
    overflow: auto;
    }
    .navbar-bottom
    {
        padding: 10px;
        height: 70px;
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



         </style>

    </head>
    <body>
      <?php
      include_once ("navmain.php");
      ?>

      <div class="middle">
        
<?php
$email=$_SESSION["email"] ;
$team_id=$_GET['teamid'];

$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id' and `user_id`='$email' and `match_id`='$match_id'";
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
  <span class="tit" >Captain</span><br><span class="blder">'.$caption.'</span>
</div>
  <div class="col  text-right float-right">
  <span class="tit">Vice-Captain</span><br><span class="blder">'.$VCaption.'</span>
  </div>
  </div>
  </div>';
}
?>    

<?php
$wk="<center>";
$bt="<center> ";
$al="<center> ";
$bw="<center>";


$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id' and `user_id`='$email' and `match_id`='$match_id'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{

$playersdata=$rows['players'];
//echo "$playersdata";
$splittedstring=explode(",",$playersdata);
foreach ($splittedstring as $key => $value) {
//echo "splittedstring[".$key."] = ".$value."<br>";

$query1="SELECT * FROM `players` WHERE `player_id`='$value'";
$result1=mysqli_query($con,$query1);
$rows1=mysqli_num_rows($result1);
while ($rows1 = mysqli_fetch_array($result1)) 
{
$plyname=$rows1['player_name'];
$plytype=$rows1['player_type'];
}
if($plytype==1)
{
$wk=$wk."<button>".$plyname."</button>";
}
if($plytype==2)
{
$bt=$bt."<button>".$plyname."</button>";
}
if($plytype==3)
{
$al=$al."<button>".$plyname."</button>";
}
if($plytype==4)
{
$bw=$bw."<button>".$plyname."</button>";
}

} //for


}  //while

$wk=$wk."</center>";
$bt=$bt."</center>";
$al=$al."</center>";
$bw=$bw."</center>";

echo '
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
   </div>
  <div class="col text-center" style="width: 150px;">
Wicket-Keeper
  </div>
  <div class="col  text-right float-center">
    </div>
  </div>

  <div class="container">
  <div class=" progress progress-line-danger">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                 
                </div>
              </div>
    </div>
    <div class="container">
    <div style="display:inline">
      </div>
    <div style="display:inline;float: center;">
'.$wk.'
    </div>
 
    </div>
    
   </div>
';

echo '
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
   </div>
  <div class="col text-center" style="width: 150px;">
Batsman
  </div>
  <div class="col  text-right float-center">
    </div>
  </div>

  <div class="container">
  <div class=" progress progress-line-danger">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                 
                </div>
              </div>
    </div>
    <div class="container">
    <div style="display:inline">
      </div>
    <div style="display:inline;float: center;">
'.$bt.'
    </div>
 
    </div>
    
   </div>
';

echo '
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
   </div>
  <div class="col text-center" style="width: 150px;">
All-Rounder
  </div>
  <div class="col  text-right float-center">
    </div>
  </div>

  <div class="container">
  <div class=" progress progress-line-danger">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                 
                </div>
              </div>
    </div>
    <div class="container">
    <div style="display:inline">
      </div>
    <div style="display:inline;float: center;">
'.$al.'
    </div>
 
    </div>
    
   </div>
';

echo '
<div class="card btm mx-auto">
  <div class="row">
  <div class="col float-left" style="width: 255px;">
   </div>
  <div class="col text-center" style="width: 150px;">
Bowler
  </div>
  <div class="col  text-right float-center">
    </div>
  </div>

  <div class="container">
  <div class=" progress progress-line-danger">
                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:0%;">
                 
                </div>
              </div>
    </div>
    <div class="container">
    <div style="display:inline">
      </div>
    <div style="display:inline;float: center;">
'.$bw.'
    </div>
 
    </div>
    
   </div>
';



?>
<br /><br /><br />

      </div>
    
      <?php


$query="SELECT count(*) as count1 FROM `user_team` WHERE `user_id`='$email' and `match_id`='$match_id'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
while ($rows = mysqli_fetch_array($result)) 
{
$count1=$rows['count1'];
}


   
      echo'
<div class="navbar navbar-bottom fixed-bottom">
<div class="navicon">
     <a href="matchteam.php?match_id='.$match_id.'" class="btn btn-rose">Close Preview</a>
      </div>
   <div class="navicon">
     <a href="#"></a>
      </div>
        <div>
';



      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>