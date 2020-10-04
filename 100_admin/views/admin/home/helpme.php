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
  font-size: 20px;
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
Help</div>
</div>

      <div class="middle">


<main>
    <details>
   		<summary role="button" tabindex="0">
    		Deposite
    	</summary>
		<div>


        
        <details>
   		<summary role="button" tabindex="0">
           I deposited cash but it is not added to my matchonsports account balance. Why?
    	</summary>
		<div>
            <ul>
      <li>  There could have been an unexpected delay in updating your matchonsports account balance. It may be the case that the bank has not cleared your transaction and we are yet to receive the amount.
It is usually added instantly, but in such scenarios, it can take up to 30-45 minutes for the transaction to be updated.</li>
        <li>In case the amount does not get added even after 45 minutes, do not worry!! In scenarios where the transaction is stuck, we do get notified by our Payment Gateway once it gets successful and the transaction is accordingly credited to your matchonsports account.</li>
<li>In the meanwhile, do go ahead and make another deposit using an alternate mode like PayTM wallet, credit cards, debit cards, or internet banking</li>
        <ul>

</div>
    </details>

 
    

    	</div>
    </details>
    <details>
    	<summary role="button" tabindex="0">
		Withdrawals
		</summary>
        <div>
        <details>
    	<summary role="button" tabindex="0">
		How can I withdraw my winnings?

		</summary>
    	<div>	
        You can follow the below steps to place a withdrawal query
     <ul>
  <li>   Step 1: Login with your verified matchonsports account
  <li> Step 2: Go to My Account and if your account is a verified account you will see a Withdraw option under the winnings section.</li>
  <li>  Step 3: Click Withdraw and enter the amount you would like to withdraw. You will receive a confirmation from matchonsports on your registered email id.</li>
  <li>    You can withdraw money only from the winnings balance once your matchonsports account is verified. You cannot withdraw the cash amount but you can use it to join more contests and win more. 
  This verification is a one-time process which doesnt need to be repeated unless you wish to make changes to your account. We need you to provide the following bank account details: Name of the bank, Name of the branch, Name of the account holder, account no. and IFSC code. Once your account is verified, you can withdraw the desired amount (min. of Rs.200 and max. of Rs.2,00,000 at a time) and it will be deposited into your bank account within 5 working days.</li>
</ul>
</div>
    </details>
    <details>
    	<summary role="button" tabindex="0">
        Can I use someone elses bank account to withdraw money?

		</summary>
    	<div>	
			<p>Unfortunately, you can withdraw money from your matchonsports account balance ONLY to your own bank account. If you do not have a bank account, your winnings will keep getting accumulated in your matchonsports account balance. Once you get a bank account in your name, you can use the same to get your matchonsports account verified and place your withdrawal requests.
            </p>
        </div>
    </details>
    <details>
    	<summary role="button" tabindex="0">
		Its been over 5 working days but Ive still not received the withdrawal in my bank account?

		</summary>
    	<div>	
			<p>Please make sure that you are checking the same bank account which you have submitted during your bank verification. The payout entry in your bank statement would be in the name of FIDUCIARY BILLING SOLUTION.</p>

<p>In case you do not receive the payout post 5 working days of withdrawal request, your withdrawal may have been rejected by your bank. The most common reason for the rejection may be an incorrect account number, wrong IFSC code, NRI account etc.</p>

<p>In case there has been a rejection, we have you covered! Well reverse the money back into your matchonsports account so that you can update your details and place a new withdrawal request again.
            </p>
        </div>
    </details>
    <details>
    	<summary role="button" tabindex="0">
		Do I have to pay taxes when I withdraw money to my bank account?


		</summary>
    	<div>	
			<p>Taxes are deducted at source wherever applicable and paid out by us, as per the Income Tax Act 1961. Thus, if your individual winnings for a single contest are more than Rs.10,000, a tax of 31.2% will be deducted. The remaining amount (68.80%) will be credited to your winnings balance. For e.g. If you win Rs.1,00,000, Rs.31,200 will be deducted and your actual winnings are Rs.68,800</p>

<p>Winners will be provided TDS certificates in respect of such tax deductions, if applicable. However, you shall be responsible for payment of any other applicable tax, including but not limited to, income tax, gift tax, etc. in respect of the Cash Prizes money won. If you have any queries regarding taxation, we strongly suggest that you consult with a tax expert. For more information please check our Terms and Conditions..
            </p>
        </div>
    </details>
        </div>
    </details>
    <details>
    	<summary role="button" tabindex="0">
		Points

		</summary>
    	<div>	
        <details>
		<summary role="button" tabindex="0">
        When do the scores get updated?

		</summary>
		<div>
           <p>Points are usually updated every few minutes! However, when the match ends, the status changes from In Progress to Waiting For Review. In this time, the final points including your team's total and your rank are updated. Winners are declared and winnings are distributed only after our team verifies the final points. This process may take up to 2 hours. In certain cases, it could take longer. After the winners are declared, the match status will be Completed.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How will I score points?


		</summary>
		<div>
          <p>You will score points depending on how the players in your team perform in the live match. So, make sure you pick a winning combination to help you win BIG! Check out our detailed Points System to understand how to score on matchonsports.
</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        What happens when a ODI/T20 match is abandoned or not played out fully?
		</summary>
		<div>
        <p>If the real match is abandoned, the match will be cancelled and the entry fees will be refunded. This includes scenarios where the real match is abandoned without a single ball being bowled, as well as where the match is abandoned after it has started.</p>
            <p>If the real match has a result even if not played out fully, we will announce the results of the match as per the fantasy scorecard points accumulated, except where a result is a consequence solely of (i) the results of a Super Over or Bowl Out, (ii) the toss of a coin, (iii) prior results between or relative standings of the teams in the tournament, or (iv) any methodology other than those envisaged by the official score revision rules (e.g., Duckworth Lewis Stern) applicable to weather affected matches in the particular tournament.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        What happens when a match is tied?


		</summary>
		<div>
           <p>When a match is tied, winners are still declared at the end of the match on the basis of the points and ranks of users participating in the contest</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Why are my teams points/ranks not updated correctly?


		</summary>
		<div>
           <p>Points/ranks can sometimes take a bit longer than usual to reflect. However, the final scores, points and rankings are reflected once the match is completed. We also verify the points with live score feeds provided by reliable sources to ensure that the points/ranks are correctly reflected after every match.</p>
			
        </div>
    </details>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Playing the Game

		</summary>
		<div>
          
        <details>
		<summary role="button" tabindex="0">
        How do I play the matchonsports Sports Game?
		</summary>
		<div>
           <p>Step 1. Select a sport</p>

<p>Step 2. Choose a match from the Fixtures tab</p>

<p>Step 3. Create your team within a virtual budget of 100 credits before the deadline</p>

<p>Step 4. Now, join any of our Practice Contests to hone your skills or Cash Contests to win BIG</p>

<p>Step 5. You can browse through the various cash contests at the match centre & join any of them. You can also create your own contest & invite friends to play with you.</p>

<p>Once the match starts, your created team will score points based on the real-life performance of your chosen players in the match.</p>

<p>Your rank in a cash contest is decided based on the points your team earns during the live match. If your team finishes amongst the winning ranks of that cash contest, youll be declared a winner in the contest. Well credit the winnings in your matchonsports account, depending on the amount that youve won.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How many teams can I create for a single match?
		</summary>
		<div>
           <p>You can create upto 6 different teams for a match and join a Multi-Entry contest with all 6 teams. However, every entry with a new team will require a separate entry fee. You can also choose to switch between the teams (team 1/team 2 etc.) before the deadline for every match.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        What is the use of a Captain/Star Player in a team?
		</summary>
		<div>
           <p>A true Captain /Star Player leads by example! The player you choose to be your teams Captain/Star Player will earn 2 times the points and the Vice-captain you choose for cricket and football will earn 1.5 times the points for his performance. So, choose wisely.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How can I see my team's rank?


		</summary>
		<div>
           <p>Click on the match that you have created your team for & check the updated points and ranks for yourself and your opponents in that contest.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How do I create multiple teams for the same match?


		</summary>
		<div>
        Heres how you can create multiple teams for the same match:
<ul>
 <li>   Select the match you wish to join contests for</li>
 <li>     Go to the 'My Teams' section</li>
 <li>   Start creating your teams by clicking on the 'Create Team 1' button</li>
 <li>   Once you're done creating your first team, you'll get an option to 'Create Team 2'. You can create up to 6 teams per match</li>
<ul>
        </div>
    </details>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Winnings

		</summary>
		<div>
        <details>
		<summary role="button" tabindex="0">
        Why havent I received my winnings in my matchonsports account balance yet?
		</summary>
		<div>
          <ul>
        </ul>
        <li>Usually, the winnings for a match are added to your account balance within 4 hours of the match being completed.</li>
        <li>However, for matches ending late at night, winners will be declared the next morning after which your winnings will be added to your matchonsports account balance</li>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        If other users in the contest are at the same rank as me, how will the winnings be distributed?


		</summary>
		<div>
           <p>The winnings will be equally split among tied users. E.g. If the winning amount is Rs.5000 in a 3-member contest and 2 teams end up with equal (highest) points, then these 2 users will get Rs.2500 each as winnings.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How will I get my winnings into my bank account?


		</summary>
		<div>
        <p>When you win in a cash contest, your winnings will be added to your matchonsports account balance within 4 hours of the live match being completed. However, for matches ending late at night, winnings will be added to your account balance the next morning
<p>You can withdraw money from your account balance to your bank account once your matchonsports account is completely verified. Click on Menu -> Verify Now to place a verification request</p>
Post verification, you can submit your withdrawal request and the amount will be added to your bank account within 5 working days. Remember, the minimum amount you can withdraw at a time is Rs.200</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Does any tax get deducted from my winnings?


		</summary>
		<div>
           <p>When you win above Rs.10,000 from a single contest, the tax of 31.2% will be deducted and the rest gets added as winnings. You will also receive a TDS certificate 3 months from the winning date with details of the deduction.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        When will I receive my TDS certificate?

		</summary>
		<div>
           <p>Your TDS certificate gets generated within 3 months from the winning date. We will be emailing it to your registered email address once it is available.</p>
<p>Please note- TDS Certificates will be provided to users who have verified their profiles within that time period only. We will not be able to provide TDS Certificates for that cycle if you have not verified your profile.</p>
		
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Did you refund my entry fees, why?

		</summary>
		<div>
            <ul>
        <li>If any of the contest is not filled with the required number of participants or if the real match is abandoned the contest will be cancelled and we will refund the entry fee if joined to your matchonsports account within maximum 24hrs.</li>
<li>If contests have been cancelled for the below reasons, or any other reasons as may be notified from time to time, the entry fees of all participants in such match will be refunded in full within 24hrs.</li>
<li>If the real match is abandoned, all contests for the match will be cancelled and the entry fees will be refunded in full within 24 hrs. This includes scenarios where the real match is abandoned without a single ball being bowled, as well as where the match is abandoned after it has started.</li>
<li>If the match has a result (i.e., ends in a win to either team or a tie but not a "no result") even if not played out fully, we will announce the results of the contests as per normal, except where a result or progression of a team in the tournament is purely decided by:</li>
     <li>  the results of a Super Over or Bowl Out,</li>
       <li>the toss of a coin,</li>
       <li>prior results between or relative standings of the teams in the tournament, or</li>
       <li>any methodology other than those envisaged by the official score revision rules (e.g., Duckworth Lewis Stern) applicable to weather-affected matches in the particular tournament.</li>
       For the sake of clarity, the scores of a Super Over shall not be considered towards rankings under any circumstances.
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How will I be informed if I win a Cash prize?


		</summary>
		<div>
           <p>Ranks and points will be updated and displayed during and at the end of every match. If you win in any cash contest, the winnings will be credited automatically to your matchonsports account balance.

</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        When will the winnings be distributed?

		</summary>
		<div>
           <p>The winner declaration and crediting of the winnings to your matchonsports account usually happens within a couple of hours after the match is completed. Our dedicated team manually verifies the matchonsports scorecard with our live feed to ensure that the points and scores are correctly updated after every match. This procedure can sometimes take a relatively long time. Only after we are sure that all points and scores are accurate, the final points are updated and winners are declared..</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Does the amount in my Winnings Account have any expiry date?


		</summary>
		<div>
           <p>If the amount in your Winnings Account is not withdrawn to your bank account within 335 days from the date of credit, it will be deposited automatically to your bank account which is on record with matchonsports, provided that your matchonsports account has verified by matchonsports. In case no bank account is provided or you have failed to complete the verification for the matchonsports account, the amount would stand forfeited by matchonsports. Hence it's important that you get your matchonsports account verified as soon as possible. Please check our Terms & Conditions for detailed information on this aspect.

.</p>
			>
        </div>
    </details>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Verification

		</summary>
		<div>
        <details>
		<summary role="button" tabindex="0">
        How can I verify my account?
		</summary>
		<div>
        To verify your account, open the menu, click on Verify Now button & follow these steps:
<ol>
<li>Verify your mobile number by entering the OTP sent to your phone and submit.</li>
<li>Check your email and click on the Verify Now button to verify your email ID registered with matchonsports</li>
<li>Enter your PAN number, upload your PAN Card image and submit. Please note that you will able to place a PAN verification request only if your winnings balance is more than Rs. 200.<li>
<li>Enter your bank details, upload your bank account proof and submit.</li>
<li>Mobile and email verification are done instantly once you follow the above steps. Once PAN and bank details are submitted, you will receive an update within 5 working days!</li>
        </ol>
<p>In case you have only updated your PAN verification request, please go ahead and submit your bank verification as well so that both your requests are processed on priority.</p>
<p>Note: You can join contests even without verifying your account. When you win Cash Contests, your winnings will be deposited in your matchonsports account. Verification becomes mandatory only before you can make withdrawals from your matchonsports account to your bank account. The minimum winnings balance needed to place a withdrawal request is Rs. 200</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Can I verify more than one account with same PAN Card and bank account?
		</summary>
		<div>
           <p>Creating multiple accounts violates our FairPlay policy and hence you cannot verify multiple accounts using same PAN and bank details.</p>
		
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Why do I need a PAN Card to verify my account?
		</summary>
		<div>
           <p>Your withdrawals involve transfer of money from your matchonsports account to your bank account. Hence, PAN Card is mandatory to get your account verified, due to regulatory requirements.</p>
<p>If you do not have a PAN Card, you can apply for one and submit a verification request when you receive it. In the meantime, you can still join contests and your winnings will keep getting accumulated in your matchonsports account</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Why did my verification fail? OR Why was my verification request declined?

		</summary>
		<div>
        Some of the major reasons why your verification request may have failed are:
<ul>
<li>You didn't upload an image of your PAN Card Your withdrawals on matchonsports involve a transfer of money. Hence, PAN Card is mandatory to get your matchonsports account verified. Please upload a clear image of your PAN Card.</p>
<li>PAN number on the card does not match the PAN number entered during verification request Double check the PAN number that you have entered to avoid errors</li>
<li>Date of Birth on the PAN Card does not match the Date of Birth on your matchonsports account. Please ensure that you enter the exact Date of Birth on the verification request as it appears on the PAN Card</li>
<li>Name on the PAN Card does not match the name on the bank account You can withdraw money from your matchonsports account only to your own bank account. Hence, the name on the PAN Card and bank account need to match.</li>
<li>IFSC code provided in the bank details is incorrect/belongs to a different bank branch than the one mentioned for verification purposes. If you provide the wrong IFSC code, your money could be transferred to someone else's account. So, make sure you enter the correct code. You can find the IFSC code in your cheque book, passbook or bank statements. If you're not sure, please contact your bank to get the correct code.</li>
<li>The documents uploaded by you are not clear/visible. Our experts are humans after all! Please help them by uploading documents where all the details are clearly visible so that they can verify your details quickly.</li>
<li>Bank account number entered in verification request does not match with account number appearing on the uploaded proof. Please ensure that you enter the exact bank account number in the verification request, as it appears on the bank account proof. In the rare case that your verification request gets rejected, the reason for rejection will appear on top of the verification page for your reference.</li>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        My verification request has been submitted, but not yet verified?

		</summary>
		<div>
           <p>It takes around 5 working days to process your verification request from the date you submit your request. Be rest assured that you will receive an email notification once it has been completed.</p>
			
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Why am I facing issues with mobile number verification?

		</summary>
		<div>
        <p>Make sure you are using a mobile number that is not already registered or verified on matchonsports. If you are still facing an issue verifying your mobile number, please reach out to us with the screenshot of the error message so that we can investigate it accordingly.</p>
</div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Why am I facing issues with email verification?

		</summary>
		<div>
        <ul>        Please follow the below steps to complete your email verification:
<li>For Android/website</li>
<li>Tap on Me in the bottom navigation menu and tap on the Verify Now button</li>
<li>Enter your email address and click on Verify. You will receive a verification email from us.</li>
<li>If you are a Gmail user, the email may go to your Promotions folder. Find the email subject Confirm your matchonsports account in the Promotions tab. In case the link has expired, request for a new verification email by clicking on Resend on the email verification page.</li>
        </ul>
    <ul>
<li>iOS users
<li>Tap on My Profile in the menu and tap on the Verify Now button
<li>Enter your email address and click on Verify. You will receive a verification email from us.
<li>If you are a Gmail user, the email may go to your Promotions folder. Find the email subject Confirm your matchonsports account in the Promotions tab. In case the link has expired, request for a new verification email by clicking on Resend on the email verification page. If you are still facing an issue, please reach out to us.
</ul>       

        </div>
    </details>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Referral Program
		</summary>
		<div>
        <details>
		<summary role="button" tabindex="0">
        How does the referral program work?
		</summary>
		<div>
      <p>  The Invite Friends program, available only on our apps, is designed to help you earn at every stage of your journey on matchonsports.</p>

 <p> Just download our app (iOS or Android), locate the Invite Friends section & start inviting friends. Invite your friends via Whatsapp, Facebook, email and more and get up to Rs. 100 cash bonus per friend! The more cash contests your friends join, the larger your cash bonus (max. up to Rs.100 per friend).</p>

 <p> Remember: your friend MUST enter your invite code correctly DURING registration as this a mandatory step to link his/her account to yours.</p>

 <p> Additionally, both you & your friend MUST download the app, verify your mobile number to earn the Rs.100 cash bonus.</p>

 <p> You can invite as many friends as you like. The more the merrier.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How do I earn the referral bonus?</summary>
		<div>
            <ol>
        <li>Once your invited friends join cash contests on matchonsports, you will get a cash bonus equal to 1/3rd of their entry fee. For example, if your friend has joined a cash contest with Rs.15 entry fees, you will receive a cash bonus of Rs. 5 in your matchonsports account. Remember, you can earn a maximum cash bonus of Rs.100 from each invited friend.</li>
<li>Remember: The cash bonus will be credited to your account after the winners of the match (your friend has joined cash contests for) are declared (within 48 hours).</li>
        </ol>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        My friend has registered using my invite code and played cash contests as well. When will I start getting my referral bonus?
		</summary>
		<div>
       <ul>
        <li> Your friend must be displayed in your Invite Friends dashboard to make you eligible for the bonus. Please visit the Invite Friends section in the menu and then click on the link at the bottom of the screen to locate your Invite Friends Dashboard.</li>
<li>Once you find your friend in the list, relax! Please note that you will get the applicable cash bonus in your account within 48 hours after the winners of the match (your friend has joined cash contest/s in) are declared.</li>
<li>You will receive 1/3rd of the total amount your friend has joined cash contest/s with (maximum Rs.100 from each friend).</li>
<li>In case your friend is not showing up in your Invite Friends list, he/she may have missed entering your invite code during registration on the Android/iOS app. In this scenario, he/she would not have received the invite a friend bonus as well.</li>
<li>If you believe that your friend has entered your code during registration and is still not showing in your invite friends dashboard, please ask him/her to contact us via their matchonsports account mentioning the issue along with your invite code.</li>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        My cash bonus/invite code has been blocked. How do I unblock it?
		</summary>
		<div>
        <p>Our system would have detected FairPlay Violation on your matchonsports account due to which the cash bonus and invite code gets blocked. This usually happens when an invite code is used to create multiple (fake) accounts on matchonsports.
We suggest that you follow the following steps to unblock your Cash Bonus / referral (invite) code. Please make sure that you are using the latest Android/iOS app.</p>
<p>To unblock cash bonus:</p>
<li>Log into your account</li>
<li>From the bottom menu, goto 'Me' --> My Account</li>
<li>Click on How to Unblock and follow the instructions.</li>
<h3>To unblock invite code:</h3>
<li>Select Invite Friends from the 'More' menu on the bottom right.</li>
<li>Click on How to Unblock and follow the instructions.</li>
<ul>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        I registered using a referral code however I did not receive any cash bonus. Why?

		</summary>
		<div>
   <p>     In order to get the referral bonus, you need to enter a valid invite code (shared by your friend) during registration. If you have missed entering it during registration, unfortunately, you are not eligible for the bonus.</p>

<p>However, you can get a cash bonus by inviting your friends and getting them to register using your invite code (max bonus of Rs. 100 per friend). You can find your invite code by visiting the Invite Friends section in the menu.</p>

<p>In case you correctly entered the invite code shared by your friend during registration, but have not received your bonus yet, send us the invite code using the below link and we will help you out.</p>
        </div>
    </details>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Profile Changes
		</summary>
		<div>
        <details>
		<summary role="button" tabindex="0">
        Can I change my TEAM NAME?
		</summary>
		<div>
           <p>Unfortunately, you CANNOT change your Team Name. Your Team Name is your unique identity on matchonsports. We believe in FairPlay and complete transparency, and allow everyone whos joined a contest to track their opponents and see their points and ranking. If team names are frequently changed, it becomes very difficult to track performances and assess the competition</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Can I change my MOBILE NUMBER?


		</summary>
		<div>
           <p>Unfortunately, your mobile number CANNOT be changed once it is verified on your matchonsports account.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Can I change my EMAIL ID?


		</summary>
		<div>
          <p>Unfortunately, your email id CANNOT be changed once it is verified on your matchonsports account.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Can I change my PAN CARD?

		</summary>
		<div>
     <p>   Unfortunately, you CANNOT change your PAN Card as it is your identity proof on matchonsports. Also, PAN once verified CANNOT be unlinked from your matchonsports account.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Can I change my BANK ACCOUNT?

		</summary>
		<div>
       <p> To change the bank details on your already verified matchonsports account, kindly send us a request using the below link. Please note that as a security policy, we will be confirming your request with a few account related questions before we go ahead and help you change your bank account.</p>
<p>IMP: If you withdrawal is in process, request you to raise the bank account change request AFTER the withdrawal is credited into your bank account.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
      Can I change my STATE, GENDER or ADDRESS?


		</summary>
		<div>
       <p> Please go to Me --> Full Profile/Personal Details to change your Gender & Address at your end.</p>

<p>If your account is already verified, you cannot change your state of residence.</p>
        </div>
    </details>

        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        Login & Registration

		</summary>
		<div>
        <details>
		<summary role="button" tabindex="0">
        Ive forgotten my password. How can I reset it?
		</summary>
		<div>
           
<h3>On Android/iOS App:<h3>
    <ul>
<li>From the login screen, type your registered email id and click NEXT.</li>
<li>Click on Forgot Password?. A reset password link would be sent to your registered email id in a few minutes.</li>
<li>Once you receive an email, click on reset password. This link will expire in 24 hours.</li>
<li>Change your password and use your new password to log in again.</li>
<li>If you dont see our mail, check the spam/junk & promotions folders in your mailbox.</li>
        </ul>
       
<h3>On desktop/mobile site:<h3>
<ul>
    
<li>From the login screen, click on Forgot Password.</li>
<li>Enter your registered email ID and click on Send Password.</li>
<li>A reset password link would be sent to your registered email id in a few minutes.</li>
<li>Once you receive an email, click on reset password. This link will expire in 24 hours.</li>
<li>Change your password and use your new password to log in again.</li>
<li>If you dont see our mail, check the spam/junk & promotions folders in your mailbox.</li>

</ul>



        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        I forgot the mobile number/email id I used to register on matchonsports.

		</summary>
		<div>
          <p>If you have forgotten your registered email id, you can login using your registered (verified) mobile number. An OTP will be sent to you on that number, which you can use to login successfully.</p>
<p>If you have forgotten your registered mobile number, you can login with your email, Facebook and Google ids as well</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        I am not receiving the OTP.


		</summary>
		<div>
       <p> The OTP is usually sent within 30 seconds. If you havent received it in that time, you may probably be in a low network zone. You can request for a new OTP by clicking on the Resend OTP link that appears after 30 seconds. Alternately, you can login using your registered email id and password or via Facebook or Google.</p>
<p>If none of these steps are working, please check your connection and retry once you have better connectivity.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        When I try to login using my mobile number, I am receiving an error that the mobile number does not exist.

		</summary>
		<div>
        <p>From an account security point of view, your mobile number needs to be verified. This is because login via mobile number requires OTP authentication and only verified mobile numbers are allowed to use this feature.</p>
<p>No worries if your mobile number is not verified yet. You can login first using your registered email id, Facebook or Google id and then get your mobile number verified by visiting the Verification section in the App/website. Once the mobile verification is successful, you can login with your registered mobile number.</p>
        </div>
    </details>
    <details>
		<summary role="button" tabindex="0">
        How do I change my password?

		</summary>
		<div>
          <p>Simple! Please go to Me --> Full Profile/Personal Details to change your password. In case you have forgotten your existing password, you will need to reset it from the login page. The steps to reset password are mentioned in the reset password FAQ above.</p>
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