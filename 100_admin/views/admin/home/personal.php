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
            background-color:lightgrey;
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




* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] ,  input[type=file]{
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}















.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}


         </style>

    </head>
    <body>
    <div class="navbar navbar-top fixed-top">
<div class="header5">
Personal Details</div>
</div>

      <div class="middle">


<?php

$tgmail=$_SESSION["email"];

$b1="000";
$b2="Enter Aadhar Number";
$b3="Enter Pan Number";
$b4="Upl";
$b5="Upl";

$qry="SELECT * FROM `user1` WHERE `userid`='$tgmail'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);

//echo "$qry";
if($rows>=1)
{
    while ($rows = mysqli_fetch_array($result)) 
    {
        $b1 = $rows['mobile'];
       $b2= $rows['address'];
$b3= $rows['Idproof'];
$b4= $rows['idproof1'];
$b5= $rows['address1'];
    }
   
}



echo '

<form action="personalt1.php"  method="post"  enctype="multipart/form-data" style="border:1px solid #ccc">
  <div class="container">
      <p>Please fill in this form to update your Personal details.</p>
    <hr>
   Mobile
    <input type="text"  value="'.$b1.'" name="mobile1" required>

  Aadhar Card
    <input type="text"  value="'.$b2.'" name="aadhar1" required>

 Pan Card
    <input type="text"  value="'.$b3.'" name="pan1" required>';
   

if(strlen($b4)<5)
{

echo ' Pancard Image(only .jpg/.jpeg)
    <input type="file" name="fileToUpload" id="fileToUpload"> <br />
';
}
else
{

echo 'Pancard Image(only .jpg/.jpeg)&nbsp;(Already Uploaded) 

<div class="popup" onclick="myFunction1()"><h3> Click here to Preview</h3>
  <span class="popuptext" id="myPopup1"><img src="proof/'.$b4.'" width="300" height="300"/></span>
</div> 
    <input type="file" name="fileToUpload" id="fileToUpload"><br />';

}

if(strlen($b5)<5)
{

echo ' Aadharcard Image(only .jpg/.jpeg)
    <input type="file" name="fileToUpload1" id="fileToUpload1"> <br />';
}
else
{

echo ' Aadharcard Image(only .jpg/.jpeg)&nbsp;(Already Uploaded)
<div class="popup" onclick="myFunction()"><h3>Click here to  Preview</h3>
  <span class="popuptext" id="myPopup"><img src="proof/'.$b5.'" width="300" height="300"/></span>
</div>
    <input type="file" name="fileToUpload1" id="fileToUpload1"><br />';

}


echo  '
      <div class="clearfix">
        <center>  <button type="submit" class="signupbtn" name="submit">Update</button></center> 
    </div>
  </div>
</form>
';

?>




<br /><br /><br /><br />

<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function myFunction1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}
</script>

      </div>
      <?php
      include("navbottom.php");
      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>