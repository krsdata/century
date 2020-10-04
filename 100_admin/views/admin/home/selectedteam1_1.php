<?php
include("connection.php");
$match_id=$_GET['match_id'];

$selectedplayers=$_POST['selectedplayers'];
$i=0;

foreach($selectedplayers as $bk)
{
$str=$bk;
$res =explode(",",$str);
  $bk1=$res[0];

if($i==0) 
   $a[0]=$bk1+",";

   if($i>0&&$i<10)	
  $a[$i]=$bk1+",";

 if($i==10)
   $a[10]=$bk1;
 
   
  $i++;
}
$ser_player=$a;


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
/* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
</style>
<script>
function test1(a)
{
alert("hi");
var chk_arr =  document.getElementsByName("check_list[]1");
var chklength = chk_arr.length; 

for(k=0;k<chklength;k++)
{
 if(chk_arr[k].checked==true)
 {
    count++;
}
}

if(count>1)
{

for(k=0;k<chklength;k++)
{
 if(chk_arr[k].checked==true&&(a-1)!=k)
 {
    chk_arr[k].checked = false;
    return true;
}
}



}



}
function test2(a)
{
var chk_arr =  document.getElementsByName("check_list[]2");
var chklength = chk_arr.length; 

for(k=0;k<chklength;k++)
{
 if(chk_arr[k].checked==true)
 {
    count++;
}
}

if(count>1)
{

for(k=0;k<chklength;k++)
{
 if(chk_arr[k].checked==true&&(a-1)!=k)
 {
    chk_arr[k].checked = false;
    return true;
}
}


}

</script>


        <style>




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
    width: 70px;
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
      <?php
      include_once ("navmain.php");
      ?>

      <div class="middle">
<centre><b>Please Select Captain and Vice Captain</b></centre><br /><br />

<form action="saveuserteam.php" method="Post">
<div class="section">

<?php
$matchid=$_GET['match_id'];
$matchqry="SELECT * FROM `matches` WHERE `matchid`='$matchid'";
$matchresult=mysqli_query($con,$matchqry);
$matchrows=mysqli_num_rows($matchresult);
while($matchrows=mysqli_fetch_assoc($matchresult))
{
  $t1=$matchrows['t1'];
  $t2=$matchrows['t2'];
}
$coccount=0;
foreach($selectedplayers as $bk)
{

$str=$bk;
$res =explode(",",$str);
  $bk1=$res[0];
$a[$i]=$res[0];

  $playerquery="SELECT * FROM players INNER JOIN team ON players.team_id=team.id WHERE (team.id='$t1' OR team.id='$t2') AND players.player_id='$a[$i]'";
  $result=mysqli_query($con,$playerquery);
  $rows=mysqli_num_rows($result);
  while($rows=mysqli_fetch_assoc($result))
  {
    $playername=$rows['player_name'];
    $playerpoints=$rows['player_points'];
    $teamname=$rows['team_name'];
   
$str=$bk;
$res =explode(",",$str);
  $bk1=$res[0];
$a[$i]=$res[0];

 $id=$a[$i];
$coccount++;

<div class="col">
<div style="float:left;"><img class="imgs img-fluid" src="http://www.pngmart.com/files/6/Cricket-PNG-Photos.png"></div>
<p style="width: 175px; font-size: 13.5px;margin-top: 0px;"><span>'.$playername.'</span><br>
<span>'.$teamname.'</span> | <span>'.$playerpoints.'</span></p>
</div>
<div class="col" style="margin-top: 0px;">

<label class="container"><b>CA</b>
 <input type="checkbox" id="'.$a['.$i.'].'"  name="check_list1[]" value="'.$a['.$i.'].'"  onclick="test1('.$coccount.')"> 
 <span class="checkmark"></span>
</label>

<label class="container"><b>VC</b>
<input type="checkbox" id="'.$a['.$i.'].'"  name="check_list2[]" value="'.$a['.$i.'].'"  onclick="test2('.$coccount.')">
  <span class="checkmark"></span>
</label>

</div>
</div>';



  }
    $i++;
}
?>
</div>

 <div style="    margin-left: 29%;
    margin-top: -85px;
    margin-bottom: 55px;">
    <button type="submit" class="btn btn-primary" id="confirmButton"> Save Team </button></div>
<?php
echo '<input type="hidden" value='.$match_id.' name="match"><input type="hidden" value='.$ser_player.' name="players">';
?>


</form>



      </div>



      <?php
      include_once ("navbottom.php");
      ?>
      
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript">
function fun1(a)
{
$("input[type=radio]").attr('disabled', false);
var va=a.id;

$('input[id=c908]').prop('disabled',true);
alert("hai" +va);
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