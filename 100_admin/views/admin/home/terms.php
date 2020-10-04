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
Terms&Conditions</div>
</div>

      <div class="middle">


<main>
    <details>
   		<summary role="button" tabindex="0">
    		matchonsports
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         General Terms
    	</summary>
		<div>
		<ul>
<li >Any person utilizing matchonsports or the matchonsports App ("<strong>User</strong>") for availing the online information and database retrieval services, including, gaming services, offered therein "<strong>matchonsports Services</strong>") or participating in the various contests and, games (including fantasy games), being conducted on matchonsports ("<strong>Contest(s)</strong>") shall be bound by these Terms and Conditions, and all other rules, regulations and terms of use referred to herein or provided by matchonsports in relation to any matchonsports Services.</li>
<li >matchonsports shall be entitled to modify these Terms and Conditions, rules, regulations and terms of use referred to herein or provided by matchonsports in relation to any matchonsports Services, at any time, by posting the same on matchonsports. Use of matchonsports constitutes the User's acceptance of such Terms and Conditions, rules, regulations and terms of use referred to herein or provided by matchonsports in relation to any matchonsports Services, as may be amended from time to time. matchonsports may also notify the User of any change or modification in these Terms and Conditions, rules, regulations and terms of use referred to herein or provided by matchonsports, by way of sending an email to the User's registered email address or posting notifications in the User accounts. The User may then exercise the options provided in such an email or notification to indicate non-acceptance of the modified Terms and Conditions, rules, regulations and terms of use referred to herein or provided by matchonsports. If such options are not exercised by the User within the time frame prescribed in the email or notification, the User will be deemed to have accepted the modified Terms and Conditions, rules, regulations and terms of use referred to herein or provided by matchonsports.</li>
<li >Certain matchonsports Services being provided on matchonsports may be subject to additional rules and regulations set down in that respect. To the extent that these Terms and Conditions are inconsistent with the additional conditions set down, the additional conditions shall prevail.</li>
<li >matchonsports may, at its sole and absolute discretion:
										<ul class="pdTop10">
<li >Restrict, suspend, or terminate any User's access to all or any part of matchonsports or matchonsports Services;</li>
<li >Change, suspend, or discontinue all or any part of the matchonsports Services;</li>
<li >Reject, move, or remove any material that may be submitted by a User;</li>
<li >Move or remove any content that is available on matchonsports;</li>
<li >Deactivate or delete a User's account and all related information and files on the account;</li>
<li >Establish general practices and limits concerning use of matchonsports;</li>
<li >Revise or make additions to the roster of players available for selection in a Contest on account of revisions to the roster of players involved in the relevant Sports Event;</li>
<li >Assign its rights and liabilities to all User accounts hereunder to any entity (post intimation of such assignment shall be sent to all Users to their registered email ids)</li>
</ul>
              </div>
    </details>


   		
    	</div>
    </details>
	
	
	
	
	
	<details>
   		<summary role="button" tabindex="0">
    		Usage of Content
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         Content Terms
    	</summary>
		<div>
	<ul>
<li >matchonsports includes a combination of content created by matchonsports, its partners, licensors, associates and/or Users. The intellectual property rights <strong> ("Intellectual Property Rights")</strong> in all software underlying matchonsports and the matchonsports Services and material published on matchonsports, including (but not limited to) games, Contests, software, advertisements, written content, photographs, graphics, images, illustrations, marks, logos, audio or video clippings and Flash animation, is owned by matchonsports, its partners, licensors and/or associates. Users may not modify, publish, transmit, participate in the transfer or sale of, reproduce, create derivative works of, distribute, publicly perform, publicly display, or in any way exploit any of the materials or content on matchonsports either in whole or in part without express written license from matchonsports.</li>
<li >Users may request permission to use any matchonsports content by writing in to matchonsports Helpdesk</a>.</li>
<li >Users are solely responsible for all materials (whether publicly posted or privately transmitted) that they upload, post, e-mail, transmit, or otherwise make available on matchonsports <strong>("Users' Content")</strong>. Each User represents and warrants that he/she owns all Intellectual Property Rights in the User's Content and that no part of the User's Content infringes any third party rights. Users further confirm and undertake to not display or use of the names, logos, marks, labels, trademarks, copyrights or intellectual and proprietary rights of any third party on matchonsports. Users agree to indemnify and hold harmless matchonsports, its directors, employees, affiliates and assigns against all costs, damages, loss and harm including towards litigation costs and counsel fees, in respect of any third party claims that may be initiated including for infringement of Intellectual Property Rights arising out of such display or use of the names, logos, marks, labels, trademarks, copyrights or intellectual and proprietary rights on matchonsports, by such User or through the User's commissions or omissions.</li>
<li >Users hereby grant to matchonsports and its affiliates, partners, licensors and associates a worldwide, irrevocable, royalty-free, non-exclusive, sub-licensable license to use, reproduce, create derivative works of,distribute, publicly perform, publicly display, transfer, transmit, and/or publish Users' Content for any of the following purposes:
<ul class="pdTop10">
<li >displaying Users' Content on matchonsports</li>
<li >distributing Users' Content, either electronically or via other media, to other Users seeking to download or otherwise acquire it, and/or</li>
<li >storing Users' Content in a remote database accessible by end users, for a charge.</li>
<li >This license shall apply to the distribution and the storage of Users' Content in any form, medium, or technology.</li>
</ul>
</li>
<li >All names, logos, marks, labels, trademarks, copyrights or intellectual and proprietary rights on matchonsports(s) belonging to any person (including User), entity or third party are recognized as proprietary to the respective owners and any claims, controversy or issues against these names, logos, marks, labels, trademarks, copyrights or intellectual and proprietary rights must be directly addressed to the respective parties under notice to matchonsports.</li>
</ul>
              </div>
    </details>


   		
    	</div>
    </details>


	
	
	<details>
   		<summary role="button" tabindex="0">
    		Privacy
    	</summary>
		<div>
        
        <details>
   		<summary role="button" tabindex="0">
         Privacy Terms
    	</summary>
		<div>
<ul>
<li class="pdBtm10">Users agree to abide by these Terms and Conditions and all other rules, regulations and terms of use of the Website. In the event User does not abide by these Terms and Conditions and all other rules, regulations and terms of use, matchonsports may, at its sole and absolute discretion, take necessary remedial action, including but not limited to:
										<ul class="pdTop10">
<li class="pdBtm10">restricting, suspending, or terminating any User's access to all or any part of matchonsports Services;</li>
<li class="pdBtm10">deactivating or deleting a User's account and all related information and files on the account. Any amount remaining unused in the User's Game account or Winnings Account on the date of deactivation or deletion shall be transferred to the User's bank account on record with matchonsports subject to a processing fee (if any) applicable on such transfers as set out herein; or</li>
<li class="pdBtm10">refraining from awarding any prize(s) to such User.</li>
</ul>
</li>
<li class="pdBtm10">Users agree to provide true, accurate, current and complete information at the time of registration and at all other times (as required by matchonsports). Users further agree to update and keep updated their registration information.</li>
<li class="pdBtm10">A User shall not register or operate more than one User account with matchonsports.</li>
<li class="pdBtm10">Users agree to ensure that they can receive all communication from matchonsports by marking e-mails from matchonsports as part of their "safe senders" list. matchonsports shall not be held liable if any e-mail remains unread by a User as a result of such e-mail getting delivered to the User's junk or spam folder.</li>
<li class="pdBtm10">Any password issued by matchonsports to a User may not be revealed to anyone else. Users may not use anyone else's password. Users are responsible for maintaining the confidentiality of their accounts and passwords. Users agree to immediately notify matchonsports of any unauthorized use of their passwords or accounts or any other breach of security.</li>
<li class="pdBtm10">Users agree to exit/log-out of their accounts at the end of each session. matchonsports shall not be responsible for any loss or damage that may result if the User fails to comply with these requirements.</li>
<li class="pdBtm10">Users agree not to use cheats, exploits, automation, software, bots, hacks or any unauthorised third party software designed to modify or interfere with matchonsports Services and/or matchonsports experience or assist in such activity.</li>
<li class="pdBtm10">Users agree not to copy, modify, rent, lease, loan, sell, assign, distribute, reverse engineer, grant a security interest in, or otherwise transfer any right to the technology or software underlying matchonsports or matchonsports Services.</li>
<li class="pdBtm10">Users agree that without matchonsports's express written consent, they shall not modify or cause to be modified any files or software that are part of matchonsports's Services.</li>
<li class="pdBtm10">Users agree not to disrupt, overburden, or aid or assist in the disruption or overburdening of (a) any computer or server used to offer or support matchonsports or the matchonsports Services (each a "Server"); or (2) the enjoyment of matchonsports Services by any other User or person.</li>
<li class="pdBtm10">Users agree not to institute, assist or become involved in any type of attack, including without limitation to distribution of a virus, denial of service, or other attempts to disrupt matchonsports Services or any other person's use or enjoyment of matchonsports Services.</li>
<li class="pdBtm10">Users shall not attempt to gain unauthorised access to the User accounts, Servers or networks connected to matchonsports Services by any means other than the User interface provided by matchonsports, including but not limited to, by circumventing or modifying, attempting to circumvent or modify, or encouraging or assisting any other person to circumvent or modify, any security, technology, device, or software that underlies or is part of matchonsports Services.</li>
<li class="pdBtm10">Without limiting the foregoing, Users agree not to use matchonsports for any of the following:
										<ul class="pdTop10">
<li class="pdBtm10">To engage in any obscene, offensive, indecent, racial, communal, anti-national, objectionable, defamatory or abusive action or communication;</li>
<li class="pdBtm10">To harass, stalk, threaten, or otherwise violate any legal rights of other individuals;</li>
<li class="pdBtm10">To publish, post, upload, e-mail, distribute, or disseminate (collectively, "Transmit") any inappropriate, profane, defamatory, infringing, obscene, indecent, or unlawful content;</li>
<li class="pdBtm10">To Transmit files that contain viruses, corrupted files, or any other similar software or programs that may damage or adversely affect the operation of another person's computer, matchonsports, any software, hardware, or telecommunications equipment;</li>
<li class="pdBtm10">To advertise, offer or sell any goods or services for any commercial purpose on matchonsports without the express written consent of matchonsports;</li>
<li class="pdBtm10">To Transmit content regarding services, products, surveys, contests, pyramid schemes, spam, unsolicited advertising or promotional materials, or chain letters;</li>
<li class="pdBtm10">To advertise, offer or sell any goods or services for any commercial purpose on matchonsports without the express written consent of matchonsports;</li>
<li class="pdBtm10">To Transmit content regarding services, products, surveys, contests, pyramid schemes, spam, unsolicited advertising or promotional materials, or chain letters;</li>
<li class="pdBtm10">To download any file, recompile or disassemble or otherwise affect our products that you know or reasonably should know cannot be legally obtained in such manner;</li>
<li class="pdBtm10">To falsify or delete any author attributions, legal or other proper notices or proprietary designations or labels of the origin or the source of software or other material;</li>
<li class="pdBtm10">To restrict or inhibit any other user from using and enjoying any public area within our sites;</li>
<li class="pdBtm10">To collect or store personal information about other Users;</li>
<li class="pdBtm10">To interfere with or disrupt matchonsports, servers, or networks;</li>
<li class="pdBtm10">To impersonate any person or entity, including, but not limited to, a representative of matchonsports, or falsely state or otherwise misrepresent User's affiliation with a person or entity;</li>
<li class="pdBtm10">To forge headers or manipulate identifiers or other data in order to disguise the origin of any content transmitted through matchonsports or to manipulate User's presence on matchonsports(s);</li>
<li class="pdBtm10">To take any action that imposes an unreasonably or disproportionately large load on our infrastructure;</li>
<li class="pdBtm10">To engage in any illegal activities. You agree to use our bulletin board services, chat areas, news groups, forums, communities and/or message or communication facilities (collectively, the "Forums") only to send and receive messages and material that are proper and related to that particular Forum.</li>
</ul>
              </div>
    </details>


   		
    	</div>
    </details>




    
</main>

<br /><br /><br /><br />

      </div>
      <?php
      include("navbottom.php");
      ?>
      
      
        <script src="" async defer></script>
    </body>
</html>