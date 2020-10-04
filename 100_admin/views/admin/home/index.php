<?php
session_start();

if(isset($_SESSION["broker"]))
{
$id=intval($_SESSION["broker"]);

if($id==1)
{
include("home.php");
}
if($id==2)
{
include("contests1.php");
}
if($id==3)
{
include("matchteam.php");
}
if($id==4)
{
include("team1.php");
}
if($id==5)
{
include("selectedteam1.php");
}
if($id==7)
{
include("contests2.php");
}
if($id==8)
{
include("matchteam1.php");
}
if($id==9)
{
include("contests3.php");
}
if($id==10)
{
include("preview1.php");
}
if($id==11)
{
include("preview.php");
}
if($id==12)
{
include("team12.php");
}
if($id==13)
{
include("mycontests.php");
}
if($id==14)
{
include("my_account.php");
}
if($id==15)
{
include("contestslivenew.php");
}
if($id==16)
{
include("contestslivenew1.php");
}
if($id==17)
{
include("previewlivenew.php");
}
if($id==18)
{
include("contestscompletednew.php");
}
if($id==19)
{
include("contestscompletednew1.php");
}
if($id==20)
{
include("previewcompletednew.php");
}
if($id==21)
{
include("more.php");
}
if($id==22)
{
include("helpme.php");
}
if($id==23)
{
include("fantasy.php");
}
if($id==24)
{
include("terms.php");
}
if($id==25)
{
include("bank.php");
}
if($id==26)
{
include("myaccount1.php");
}
if($id==27)
{
include("personal.php");
}




else
{
header("Location: logout.php");
//header("Location: http://matchonsports.com");
}



}
else
{
header("Location: logout.php");

}



?>