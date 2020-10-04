<?php
 include("connection.php");

if(isset($_SESSION["val1"]))
{
$_SESSION["val1"]=0;

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
 <link href="./assets/css/tab.css" rel="stylesheet" />
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
background-color: #3b5998;
        padding: 10px;
        height: 70px;
      font-size: 14px;
  color: white;
    }
    .navbar-bottom .material-icons
    {
        margin-left: 8px;
        font-size: 18px;
        color: white;
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
{     height: 100px;
      border-radius: 3px;
    display: inline;
    margin-right: 8px;
    margin-top: 0px;
}

.left1
{     
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

.right1
{
 
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
   .left1
  {
 
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
  .right1
  {

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
My Profile</div>
</div>

      <div class="middle">


<div class="card btm mx-auto">
  <div class="row" style="padding:10px;">

<?php
$user=$_SESSION['email'];
$qry="SELECT * FROM `user` WHERE `email`='$user'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);
    while ($rows = mysqli_fetch_array($result)) 
    {
        $user_name=$rows['username'];
    }

echo'<div class="col-md-4"><img src="https://www.bajajelectricals.com/img/Comment-user.png" height="100px" width="100px" style="border-radius:50%; border:2px solid bule;"></div>';
echo '<div class="col-md-8" style="color:black; font-size:20px;"><h3>Welcome '.$user_name.'</h3></div>';
?>
   </div>
</div>




   <a href="mycontestst.php"> 
<div class="card btm mx-auto">
  <div class="row">

  <div class="col float-left" style="width: 255px; padding:10px;">
  <span  style="color:black; font-size:20px; padding:10px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Contests</b></span>
    </div>
 
 </div>
  </div>
   </a>


<a href="myaccountt1.php"> 
<div class="card btm mx-auto">
  <div class="row">

  <div class="col float-left" style="width: 255px; padding:10px;">
  <span  style="color:black; font-size:20px; "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;My Account</b></span>
    </div>
 
 </div>
  </div>
   </a>



<a href="personalt.php"> 
<div class="card btm mx-auto">
  <div class="row">

  <div class="col float-left" style="width: 255px; padding:10px;">
  <span  style="color:black; font-size:20px; "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Personal Details</b></span>
    </div>
 
 </div>
  </div>
   </a>


<a href="bankt.php">
<div class="card btm mx-auto">
  <div class="row">

  <div class="col float-left" style="width: 255px; padding:10px;">
  <span  style="color:black; font-size:20px; "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bank Details</b></span>
    </div>
 
 </div>
  </div>
   </a>


<a href="logout.php"> 
<div class="card btm mx-auto">
  <div class="row">

  <div class="col float-left" style="width: 255px; padding:10px;">
  <span  style="color:black; font-size:20px; "><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Logout</b></span>
    </div>
 
 </div>
  </div>
   </a>

    
   
<br /><br /><br />

</div>
      <?php
   
echo '
<div class="navbar navbar-bottom fixed-bottom">
     
<div class="navicon">
<center>
     <a href="homet.php" style="color:white;"><i class="material-icons">home</i>
<br />
    Home</a>
      </div>
      <div class="navicon">
<center>
      <a href="mycontestst.php" style="color:white;"><i class="material-icons">star</i>
<br />
     mycontests</a>
</center>
      </div>
      <div class="navicon">
      <a href="my_accountt.php" style="color:white;"><i class="material-icons">account_circle</i>
<br />
&nbsp; me  </a>
      </div>
      <div class="navicon">
      <a href="moret.php" style="color:white;"><i class="material-icons">more</i>
<br />
    more</a>
      </div>
</center>
     <div>';
      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>