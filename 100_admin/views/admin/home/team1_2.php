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
  </title>
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
  input[type=checkbox]
  {
    display:none;
  }
  input[type=checkbox] + .lab {
  color: #7c20a3;
  font-style: normal;
  cursor: pointer;
  transition: 0.5s;
  padding: 4px;
} 
input[type=checkbox]:checked + .lab {
  color: #00e309;
  font-style: normal;
  cursor: pointer;
  transition: 0.5s;
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

 
 
 <div class="middle">

        <div id="nav-tabs">
        <?php
      include_once ("navmain.php");
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

$email=$_SESSION['email'];

$queryteam="SELECT * FROM `user_team` WHERE `user_id`='$email' and `match_id`='$match_id'";
$resultteam=mysqli_query($con,$queryteam);
$rowsteam=mysqli_num_rows($resultteam);
if($rowsteam>0)
{
?>


  <div class="row  mx-auto">
  <div class="col-md-12">
                    <h3 class="text-center">
                      <small>My Team</small>
                    </h3>
              <?php echo'<a href="matchteam.php?match_id='.$match_id.'"><button class="btn btn-info btn-block">My Teams</button></a>';?>
</div>
</div>
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
                                  <i class="material-icons">call_missed</i> WK 
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#bm" data-toggle="tab">
                                  <i class="material-icons">format_bold</i> BAT 
                                </a>
                              </li>
                              <li class="nav-item">
                                <a class="nav-link" href="#ar" data-toggle="tab">
                                  <i class="material-icons">text_format</i> AR 
                                </a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link" href="#bo" data-toggle="tab">
                                      <i class="material-icons">album</i> BOWL 
                                    </a>
                                  </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                   <?php echo'<form action="selectedteam1.php?match_id='.$match_id.'" method="post">';?>
                      <div class="card-body ">
                        <div class="tab-content">
                          <div class="tab-pane active" id="wk">
                          <div class="text-center" style="font-weight:bolder;">Pick 1 Wicket Keeper</div><br>
<?php



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
echo'<div class="container-fluid row mar ">
<div class="col inputGroup " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.'" name="selectedplayers[]" class="fantasy"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="https://cdn0.iconfinder.com/data/icons/sports-and-games-3/512/117-512.png"></div>
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
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.'" name="selectedplayers[]" class="fantasy"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="http://cdn.onlinewebfonts.com/svg/img_531987.png"></div>
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
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.'" name="selectedplayers[]" class="fantasy"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="https://d30y9cdsu7xlg0.cloudfront.net/png/207546-200.png"></div>
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
echo'<div class="container-fluid row mar ">
<div class="col inputGroup  " style="overflow:auto;line-height:18.1px; "><input type="checkbox" id="'.$pname.'" value="'.$pid.'" name="selectedplayers[]" class="fantasy"> <label class="lab" for="'.$pname.'">
<div style="float:left;"><img class="imgs img-fluid" src="https://d30y9cdsu7xlg0.cloudfront.net/png/286930-200.png"></div>
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
                

               <div class="footer-main" style="margin-left: 38%; margin-bottom: 60px;";>
               <button type="submit" class="btn btn-rose" id="confirmButton"> Next </button></div>
              </div>
            </div>
    
            
  </form>
</div>
<?php
      include_once ("navbottom.php");
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
