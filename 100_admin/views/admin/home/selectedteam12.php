<?php
include("connection.php");
session_start();

if(isset($_SESSION["val1"])&&isset($_SESSION["val3"]))
{
$match_id=intval($_SESSION["val1"]);
$matchid=intval($_SESSION["val1"]);
$team_id1=intval($_SESSION["val3"]);
}
else
{
 header("Location: homet.php");
}

$selectedplayers=$_POST['selectedplayers'];
$i=0;
$s12="";
foreach($selectedplayers as $bk)
{
$str=$bk;
$res =explode(",",$str);
  $bk1=$res[0];

  if($i==0)
   $s12=($s12.$bk1.",");

   if($i>0&&$i<10)	
   $s12=($s12.$bk1.",");

 if($i==10)
  $s12=($s12.$bk1);
 
   
  $i++;
}
$ser_player=$s12;


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
     width: 60%;
     font-size: 15px;
     
    position: absolute;
   top: 5%;
    left: 20%;
       
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


            .mar
  {
margin:auto;
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
    
  }

    [type="radio"]:checked,
[type="radio"]:not(:checked) {
    position: absolute;
    left: -9999px;
}
[type="radio"]:checked + label,
[type="radio"]:not(:checked) + label
{
    position: relative;
    padding-left: 28px;
    cursor: pointer;
    line-height: 20px;
    display: inline-block;
    color: #666;
}
[type="radio"]:checked + label:before,
[type="radio"]:not(:checked) + label:before {
    content: '';
    position: absolute;
    left: 0;
    top: 0;
    width: 18px;
    height: 18px;
    border: 1px solid #ddd;
    border-radius: 100%;
    background: #fff;
}
[type="radio"]:checked + label:after,
[type="radio"]:not(:checked) + label:after {
    content: '';
    width: 12px;
    height: 12px;
    background: #2196f3ad;
    position: absolute;
    top: 3px;
    left: 3px;
    border-radius: 100%;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
}
[type="radio"]:not(:checked) + label:after {
    opacity: 0;
    -webkit-transform: scale(0);
    transform: scale(0);
}
[type="radio"]:checked + label:after {
    opacity: 1;
    -webkit-transform: scale(1);
    transform: scale(1);
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
         background-color:#3b5998 !important;
height: 90px;


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
padding: 10px;
    background-color: white;

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
    margin-bottom: 20px;
  }
}
.mar
  {
    margin: -15px;
    border-radius: 0px;
    margin-bottom: 20px;
  }
  
/* Match cards ends */


       /* media query starts for bellow 600px*/
@media only screen and (max-width: 600px)
       {
        body
        {
            background: url(./assets/img/bg.jpg)no-repeat;
           background-color:#0078d7;
           background-size: 1000%;
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
.section
{
    padding-top: 10px;
}
         </style>

    </head>
    <body class="index-page sidebar-collapse">
  

<div class="navbar navbar-top fixed-top">
<div class="header6">
<?php
echo '
<a href="team12t1.php">
<i class="material-icons" style="font-size: 20px; color:white;">
arrow_back
</i></a>

';

?>
</div>



<div class="header5">
CHOOSE CAPTAIN & VICE CAPTAIN</div>
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
.flex-container1 {
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


<div class="flex-container1">
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
<br />
<center><b>CHOOSE CAPTAIN AND VICE CAPTAIN<br />
(CA) gets 2X points<br />
(VC) gets 1.5X points
</b></center><br />
<?php
echo '
<form action="saveuserteam12.php" method="Post">';
?>
<div class="section">

<?php

$matchqry="SELECT * FROM `matches` WHERE `matchid`='$matchid'";
$matchresult=mysqli_query($con,$matchqry);
$matchrows=mysqli_num_rows($matchresult);
while($matchrows=mysqli_fetch_assoc($matchresult))
{
  $t1=$matchrows['t1'];
  $t2=$matchrows['t2'];
}
$counttt=0;
foreach($selectedplayers as $bk)
{
$counttt++;
$str=$bk;
$res =explode(",",$str);
  $bk1=$res[0];
	
  $a[$i]=$bk1;
  $playerquery="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_id='$a[$i]'";
  $result=mysqli_query($con,$playerquery);
  $rows=mysqli_num_rows($result);
  while($rows=mysqli_fetch_assoc($result))
  {
    $playername=$rows['player_name'];
    $playerpoints=$rows['player_points'];
    $teamname=$rows['team_name'];
  $hhy=$rows['player_type'];
    $id=$a[$i];


if($hhy==1)
{
//echo '<br /><img class="imgs img-fluid" src="images/wicketkeeper.jpg" width="50" height="50"></div>';
$first=0;
echo '<hr><p style=" font-size: 13.5px; color:black;">WICKET-KEEPER</p>';
}
else if($hhy==2)
{
if($first==0)
{
$first=1;
echo '<hr><p style=" font-size: 13.5px; color:black;">BATSMEN</p>';
}
//echo '<img class="imgs img-fluid" src="images/batsman.jpg" width="50" height="50"></div>';
$first1=0;
}
else if($hhy==3)
{
if($first1==0)
{
$first1=1;
echo '<hr><p style=" font-size: 13.5px; color:black;">ALL-ROUNDER</p>';
}
//echo '<img class="imgs img-fluid" src="images/allrounder.jpg" width="50" height="50"></div>';
$first2=0;
}
else
{
if($first2==0)
{
$first2=1;
echo '<hr><p style=" font-size: 13.5px; color:black;">BOWLER</p>';
}
//echo '<img class="imgs img-fluid" src="images/bowler.jpg" width="50" height="50"></div>';
$first3=0;
}


echo'
<hr>
<div class="container-fluid row mar ">
<div class="col">
<div style="float:left; ">';
if($hhy==1)
{
echo '<img class="imgs img-fluid" src="images/wicketkeeper.jpg" width="50" height="50"></div>';

}
else if($hhy==2)
{

echo '<img class="imgs img-fluid" src="images/batsman.jpg" width="50" height="50"></div>';

}
else if($hhy==3)
{

echo '<img class="imgs img-fluid" src="images/allrounder.jpg" width="50" height="50"></div>';

}
else
{
echo '<img class="imgs img-fluid" src="images/bowler.jpg" width="40" height="40"></div>';

}



echo'
<div style="text-align:left; ">
<p style=" font-size: 13.5px; color:black;"><span>'.$playername.'</span><br>
<span>'.$teamname.'</span> | <span>'.$playerpoints.'</span></p>
</div>
</div>
<div class="col">

<input type="radio" name="caption" onchange="fun1('.$id.')" value="'.$a[$i].'" id="c'.$a[$i].'"><label for="c'.$a[$i].'">CA</label>
<input type="radio" name="vice-caption"  onchange="fun2('.$id.')"  value="'.$a[$i].'" id="vc'.$a[$i].'"><label for="vc'.$a[$i].'">VC</label>

</div>
</div>';



  }
    $i++;
}
?>
</div>


<div class="navbar navbar-bottom fixed-bottom">
      <div class="navicon">
     <button type="submit"  id="confirmButton1"  class="btn btn-rose" disabled>SaveTeam</button></div>
      </div>
      <div class="navicon">
      <a href="#"></a>
      </div>
     <div>




<?php
echo '<input type="hidden" value='.$match_id.' name="match"><input type="hidden" value='.$ser_player.' name="players">';
?>


</form>



      </div>



      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>



<script>


function test4()
{

<?php
$query="SELECT * FROM `user_team` WHERE `user_team_id`='$team_id1'";
$result=mysqli_query($con,$query);
$rows=mysqli_num_rows($result);
$count11=0;
while ($rows = mysqli_fetch_array($result)) 
{
$count11++;
$caption=$rows['caption'];
$VCaption=$rows['vice_caption'];
$Userteam_id=$rows['user_team_id'];

echo 'document.getElementById("c'.$caption.'").checked=true;';
echo 'document.getElementById("vc'.$VCaption.'").checked=true;';


}

?>



}

test4();
</script>



<script type="text/javascript">
function fun1(a)
{

var test="vc"+a;

    document.getElementById(test).checked= false;

fun3();

}
function fun2(a)
{
var test="c"+a;

    document.getElementById(test).checked= false;

fun3();
}

function fun3()
{

var x = document.getElementsByName("caption");
var y = document.getElementsByName("vice-caption");

var t=0;
var s=0;

// var elements = document.getElementsByName(theRadioGroup);
    for (var i = 0, l = x.length; i < l; i++)
    {
        if (x[i].checked)
        {
             t=1;
        }
    }

    for (var i = 0, l = y.length; i < l; i++)
    {
        if (y[i].checked)
        {
             s=1;
        }
    }

if((t==1)&&(s==1))
{
 document.getElementById("confirmButton1").disabled = false;

}
else
{
document.getElementById("confirmButton1").disabled = true;
}


}

</script>
      
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