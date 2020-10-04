<?php
 include("connection.php");
$qry='SELECT * FROM `matches` WHERE `status`="1"';
$result1 = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result1);
if($rows>0)
{
  while ($rows = mysqli_fetch_array($result1)) {
    $match3=$rows['matchid'];
    $finaldate=$rows['time'];
    $status=$rows['status'];
    $cdate=date("Y/m/d H:m:s");

    $datetime1 = new DateTime($cdate);
    $datetime2 = new DateTime($finaldate);
    $interval = $datetime1->diff($datetime2);
    if($interval->format('%R%a ')>0)
    {

    }
    else
    {
      $ss='UPDATE `matches` SET`status`="2" WHERE `matchid`='.$match3.'';
      $result2 = mysqli_query($con,$ss);
    }




  }
}
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

.header5 {
    background-color: #3b5998;
    color: white;
    padding: 1%;
     text-align: center;
     width: 30%;
     font-size: 20px;
     
    position: absolute;
   top: 20%;
    left: 33%;
       
}


        body
        {
            background: url(./assets/img/bg.jpg)no-repeat;
            background-color: white;
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
background-color: lightgrey;
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
    border-radius: 3px;
    display: inline;
    margin-right: 8px;
    margin-top: 0px;
}
 
.right
{
  height: 100px;
    border-radius: 3px;
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

         </style>

    </head>
    <body>
    <div class="navbar navbar-top fixed-top">
<div class="header5">
LEAGUES</div>
</div>

      <div class="middle">

<style>
.button {
    background-color: white; /* Green */
    border: none;
    color: white;
   cursor: pointer;
    
}


</style>


<?php
                        $qry='SELECT matches.matchid,matches.time,matches.match_type, team1.team_name AS team1, team1.image AS team1_image, team2.team_name AS team2, team2.image AS team2_image FROM matches JOIN team team1 ON matches.t1= team1.id LEFT OUTER JOIN team team2 ON matches.t2=team2.id WHERE matches.status=1';
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

                            echo'
<form action="contests1_1.php" method="post">
<input type="text" name="match_id" value="'.$match3.'" hidden/>
<button type="submit" class="button">
 <div class="card mx-auto">
                                <div class="row container" style="padding:5px; width: fit-content;margin-left: auto;
                                margin-right: auto;">
                                  <div style="display:inline;">
                                      <img src="'.$t1_image.'" class="left" width="60" height="50">
                                      </div>
                                      <div style="width: 105px;">
                                     <p class="text-center"><br />'.$t1.' vs '.$t2.'&nbsp;&nbsp;'.$matchtype.'
<p class="text-center"><i style="font-size: 13px;" class="material-icons">alarm</i><i id="'.$match3.'"></i></p>

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
    document.getElementById("'.$match3.'").innerHTML = days'.$match3.' + "d:" + hours'.$match3.' + "h:"
    + minutes'.$match3.' + "m:" + seconds'.$match3.' + "s";
    
    // If the count down is over, write some text 
    if (distance'.$match3.' < 0) {
        clearInterval(x'.$match3.');
        document.getElementById("'.$match3.'").innerHTML = "Completed";



    }
}, 1000);
</script> 

                                    </p>
                                      </div>
                                      <div style="display:inline;">
                                      <img src="'.$t2_image.'" class="right" width="60" height="50">
                                    </div>
                                   </div>
                              </div></button>  </form>';
                          }
                            
                        }
                        else
                        {
                            echo ' <div class="card mx-auto">
                            <div class="row container" style="padding:5px; width: 100%;">
                              
                                  <div style="display:inline;width:100%">
                                 <p class="text-center"><span class="font">No Matches Held</span></p>
                                  </div>
                                     </div>
                          </div> ';
                        }
                        
                        ?>


      </div>
      <?php
   
      include_once ("navbottom.php");
      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>