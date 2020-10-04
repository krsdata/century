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

@keyframes expand {
  0% {
    opacity: 0;
    max-height: 0;
  }
  100% {
    opacity: 1;
    max-height: 30em;
  }
}


main {
  display: block;
  /* IE */
  width: 100%;
  max-width: 50em;
  margin: 3em auto;
}
p {
  margin: 0;
}
p + p {
  margin-top: 1.5em;
}
a {
  color: #1e90ff;
}
details > div {
  position: relative;
  z-index: 20;
  padding: 1.25em 1.5em;
  margin-bottom: 0.6em;
  border-radius: 0.3em;
  box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07);
  background-color: white;
}
summary {
   position: relative;
  z-index: 10;
  display: block;
  background: white;
  padding-left: 3em;
  margin-bottom: 0.5em;
  font-size: 1.2em;
  line-height: 2;
  box-sizing: border-box;
  list-style: none;
  cursor: pointer;
  border-radius: 0.3em;
  box-shadow: 0 15px 35px rgba(50, 50, 93, .1), 0 5px 15px rgba(0, 0, 0, .07);
}
summary:hover, summary:focus {
  background: #1e90ff;
  color: white;
  text-shadow: 0 -1px 0 rgba(0, 0, 0, .5);
  outline: 0;
}
summary::-webkit-details-marker {
  display: none;
}
summary::before {
  content: '+';
  position: absolute;
  top: 50%;
  left: 1em;
  transform: translateY(-50%);
  width: 1em;
  height: 1em;
  margin-right: 1em;
  background: #ff5321;
  color: white;
  font-family: Arial, sans-serif;
  font-size: 14px;
  line-height: 1;
  text-align: center;
  border-radius: 50%;
}
details[open] summary::before {
  content: '-';
  line-height: 0.9;
}
details[open] summary:hover::before, details[open] summary:focus::before {
  background: white;
  color: #1e90ff;
}



         </style>

    </head>
    <body>
    <div class="navbar navbar-top fixed-top">
<div class="header5">
Fantasy Points</div>
</div>

      <div class="middle">



<br />
<input id="tab1" type="radio" name="tabs" checked>
  <label for="tab1" style=" width: 32%">T20</label>
    
  <input id="tab2" type="radio" name="tabs">
  <label for="tab2" style=" width: 33%">ODI</label>

 <input id="tab3" type="radio" name="tabs">
  <label for="tab3" style=" width: 33%">Test</label>



 <section id="content1">

<main>
    <details>
   		<summary role="button" tabindex="0">
    		BATTING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         Run (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
        Boundary Bonus (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Six Bonus (+1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
    Half-century Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>


<details>
   		<summary role="button" tabindex="0">
    Century Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
Dismissal for a duck  (-2)
    	</summary>
		<div>
              </div>
    </details>
   

    	</div>
    </details>



  <details>
   		<summary role="button" tabindex="0">
    		BOWLING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Wicket (+10)<br />
        Excluding Run Out
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      4 wicket haul Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     5 wicket haul Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Maiden over (+4)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>



 <details>
   		<summary role="button" tabindex="0">
    		FIELDING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Stumping/Run-out (+8)<br />
        Direct
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      Catch (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Run-out (+4 thrower&nbsp;&nbsp;+4 Catcher)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>



<details>
   		<summary role="button" tabindex="0">
    		OTHERS
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Captain (2x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Vice-Captain (1.5x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     In starting 11 (+2)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>

	


<details>
   		<summary role="button" tabindex="0">
    		ECONOMY RATE<h6>(Min 2 overs to be bowled)</h6>
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Below 4 runs per over (+3)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
   Between 4-4.99 runs per over (+2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
   Between 5-6 runs per over (+1)
    	</summary>
		<div>
              </div>
    </details>


<details>
   		<summary role="button" tabindex="0">
       Between 9-10 runs per over (-1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
    Between 10.1-11 runs per over (-2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Above 11 runs per over (-3)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>






<details>
   		<summary role="button" tabindex="0">
    		STRIKE RATE<h6>(Min 10 Balls To Be Played)</h6>
    	</summary>
		<div>
          
<details>
   		<summary role="button" tabindex="0">
       Between 60-70 runs per 100 balls (-1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Between 50-59.9 runs per 100 balls (-2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Below 50 runs per 100 balls (-3)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>
	

    
</main>


<br /><br /><br />

</section>


<section id="content2">

<main>
    <details>
   		<summary role="button" tabindex="0">
    		BATTING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         Run (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
        Boundary Bonus (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Six Bonus (+1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
    Half-century Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>


<details>
   		<summary role="button" tabindex="0">
    Century Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
Dismissal for a duck  (-2)
    	</summary>
		<div>
              </div>
    </details>
   

    	</div>
    </details>



  <details>
   		<summary role="button" tabindex="0">
    		BOWLING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Wicket (+10)<br />
        Excluding Run Out
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      4 wicket haul Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     5 wicket haul Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Maiden over (+4)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>



 <details>
   		<summary role="button" tabindex="0">
    		FIELDING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Stumping/Run-out (+8)<br />
        Direct
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      Catch (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Run-out (+4 thrower&nbsp;&nbsp;+4 Catcher)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>



<details>
   		<summary role="button" tabindex="0">
    		OTHERS
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Captain (2x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Vice-Captain (1.5x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     In starting 11 (+2)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>

	


<details>
   		<summary role="button" tabindex="0">
    		ECONOMY RATE<h6>(Min 2 overs to be bowled)</h6>
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Below 4 runs per over (+3)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
   Between 4-4.99 runs per over (+2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
   Between 5-6 runs per over (+1)
    	</summary>
		<div>
              </div>
    </details>


<details>
   		<summary role="button" tabindex="0">
       Between 9-10 runs per over (-1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
    Between 10.1-11 runs per over (-2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Above 11 runs per over (-3)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>






<details>
   		<summary role="button" tabindex="0">
    		STRIKE RATE<h6>(Min 10 Balls To Be Played)</h6>
    	</summary>
		<div>
          
<details>
   		<summary role="button" tabindex="0">
       Between 60-70 runs per 100 balls (-1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Between 50-59.9 runs per 100 balls (-2)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
 Below 50 runs per 100 balls (-3)
    	</summary>
		<div>
              </div>
    </details>


    	</div>
    </details>
	

    
</main>

<br /><br /><br />
</section>

<section id="content3">
<main>
    <details>
   		<summary role="button" tabindex="0">
    		BATTING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         Run (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
        Boundary Bonus (+0.5)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Six Bonus (+1)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
    Half-century Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>


<details>
   		<summary role="button" tabindex="0">
    Century Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
Dismissal for a duck  (-2)
    	</summary>
		<div>
              </div>
    </details>
   

    	</div>
    </details>



  <details>
   		<summary role="button" tabindex="0">
    		BOWLING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Wicket (+10)<br />
        Excluding Run Out
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      4 wicket haul Bonus (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     5 wicket haul Bonus (+8)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>



 <details>
   		<summary role="button" tabindex="0">
    		FIELDING
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Stumping/Run-out (+8)<br />
        Direct
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
      Catch (+4)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Run-out (+4 thrower&nbsp;&nbsp;+4 Catcher)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>



<details>
   		<summary role="button" tabindex="0">
    		OTHERS
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
       Captain (2x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     Vice-Captain (1.5x)
    	</summary>
		<div>
              </div>
    </details>

<details>
   		<summary role="button" tabindex="0">
     In starting 11 (+2)
    	</summary>
		<div>
              </div>
    </details>



    	</div>
    </details>

	

    
</main>

<br /><br /><br />
</section>
<br /><br /><br /><br />




      </div>
      <?php
      include("navbottom.php");
      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>