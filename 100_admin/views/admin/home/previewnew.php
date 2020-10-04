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

<style>
.container {
    position: relative;
    font-size: 10px;
    color: white;
}


.centered {
    position: absolute;
    top: 12%;
    left: 50%;
 transform: translate(-50%, -50%);  
}
</style>




<?php

/*
<div class="container">
  <img src="images/cricket.png" alt="Snow" style="width:100%; height:120%;">

<style>
.centered1 {
    position: absolute;
    top: 38%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.centered2 {
    position: absolute;
    top: 38%;
    left: 30%;
    transform: translate(-50%, -50%);
}

.centered3 {
    position: absolute;
    top: 62%;
    left: 50%;
    transform: translate(-50%, -50%);
}

.centered4{
    position: absolute;
    top: 62%;
    left: 30%;
    transform: translate(-50%, -50%);
}

.centered5{
    position: absolute;
    top: 87%;
    left: 50%;
    transform: translate(-50%, -50%);
}
</style>


 <div class="centered1">
 <center>
<img src="images/batsman.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">Dhoni Dhoni Dhoni</font>
</center>
</div>

 <div class="centered2">
 <center>
<img src="images/batsman.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">Dhoni Dhoni Dhoni</font>
</center>
</div>

<div class="centered3">
 <center>
<img src="images/allrounder.jpg" alt="Snow" style="width:25%;"><br />
<font style="background-color:blue;">Dhoni Dhoni Dhoni</font>
</center>
</div>

<div class="centered4">
 <center>
<img src="images/allrounder.jpg" alt="Snow" style="width:25%;"><br />
<font style="background-color:blue;">Dhoni Dhoni Dhoni</font>
</center>
</div>

<div class="centered5">
 <center>
<img src="images/bowler.jpg" alt="Snow" style="width:25%;"><br />
<font style="background-color:blue;">Dhoni Dhoni Dhoni</font>
</center>
</div>
<br 



*/

?>




<?php

$pcount1=0;
$pcount2=0;
$pcount3=0;
$pcount4=0;
$div1="";
$style1="";


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
 
//$wk=$wk."<button>".$plyname."</button>";
}
if($plytype==2)
{
$pcount1++;
//$bt=$bt."<button>".$plyname."</button>";
}
if($plytype==3)
{
$pcount2++;
//$al=$al."<button>".$plyname."</button>";
}
if($plytype==4)
{
$pcount3++;
//$bw=$bw."<button>".$plyname."</button>";
}

} //for


}  //while

$pcount4=0;
$tt11=0;
$bat1=0;
$bat21=0;
$bat21count=0;
$bat22=0;
$bat22count=0;
$tt12=0;
$bat12=0;
$tt13=0;
$bat13=0;

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

$div1='<div class="centered">
<center>
<img src="images/wicketkeeper.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">'.$plyname.'</font>
</center>
</div>';
$pcount4++;

//$wk=$wk."<button>".$plyname."</button>";
}



if($plytype==2)
{
$bat21count++;
//$bt=$bt."<button>".$plyname."</button>";
$pcount4++;
if($tt11==0)
{
$tt11=1;

if($pcount1==3)
{
$bat1=30;
}
if($pcount1==4)
{
$bat21=50;
$bat1=30;
}
if($pcount1==5)
{
$bat21=40;
$bat1=30;
}

}

$div1=$div1.'<div class="centered'.$pcount4.'">
<center>
<img src="images/batsman.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">'.$plyname.'</font>
</center>
</div>';

if($bat21count<=3)
{
echo 
'<style>
.centered'.$pcount4.' {
    position: absolute;
    top: 30%;
    left: '.$bat1.'%;
 transform: translate(-50%, -50%);
   
}
</style>';
$bat1=$bat1+20;
}
else
{
echo 
'<style>
.centered'.$pcount4.' {
    position: absolute;
    top: 42%;
    left: '.$bat21.'%;
 transform: translate(-50%, -50%);
   
}
</style>';
$bat21=$bat21+20;
}


}


if($plytype==3)
{
$pcount4++;
if($tt12==0)
{
$tt12=1;
if($pcount2==1)
$bat12=50;
if($pcount2==2)
$bat12=40;
if($pcount2==3)
$bat12=30;
}

$div1=$div1.'<div class="centered'.$pcount4.'">
<center>
<img src="images/allrounder.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">'.$plyname.'</font>
</center>
</div>';

echo 
'<style>
.centered'.$pcount4.' {
    position: absolute;
    top: 59%;
    left: '.$bat12.'%;
  transform: translate(-50%, -50%);
   
}
</style>';

$bat12=$bat12+20;



//$al=$al."<button>".$plyname."</button>";
}
if($plytype==4)
{
$bat22count++;
$pcount4++;
if($tt13==0)
{
$tt13=1;
if($pcount3==3)
{
$bat1=30;
}
if($pcount3==4)
{
$bat22=50;
$bat13=30;
}
if($pcount3==5)
{
$bat22=40;
$bat13=30;
}
}

$div1=$div1.'<div class="centered'.$pcount4.'">
<center>
<img src="images/bowler.jpg" alt="Snow" style="width:15%;"><br />
<font style="background-color:blue;">'.$plyname.'</font>
</center>
</div>';


if($bat22count<=3)
{
echo 
'<style>
.centered'.$pcount4.' {
    position: absolute;
    top: 78%;
    left: '.$bat13.'%;
 transform: translate(-50%, -50%);
   
}
</style>';
$bat13=$bat13+20;
}
else
{
echo 
'<style>
.centered'.$pcount4.' {
    position: absolute;
    top: 90%;
    left: '.$bat22.'%;
 transform: translate(-50%, -50%);
   
}
</style>';
$bat22=$bat22+20;
}




//$bw=$bw."<button>".$plyname."</button>";
}

} //for


}  //while


 echo '

<div class="container">
  <img src="images/cricket.png" alt="Snow" style="width:100%; height:100%;">'.$div1.'

<br />
</div>';


echo '
<br /><br />
</div></div></div>


';


?>


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