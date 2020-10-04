<?php
session_start();

$email=$_POST["name1"];
$pass=$_POST["account1"];
$pass1=$_POST["bank1"];
$pass2=$_POST["ifsc1"];
$gmail1=$_SESSION["email"];

include("connectionnew.php");

$_SESSION["broker"]="25";



if(!$con)
{
    echo "Error in connection";
  include("homepath.php");
}


//$email=mysqli_real_escape_string($con, $_POST["email"]);
//$pass=mysqli_real_escape_string($con, $_POST["password"]);

$email=trim($email);
$pass=trim($pass);
$pass1=trim($pass1);
$pass2=trim($pass2);

//$email=str_replace(' ','t',$email);
//$pass=str_replace(' ','t',$pass);

$email=str_replace(';','t',$email);
$pass=str_replace(';','t',$pass);
$pass1=str_replace(';','t',$pass1);
$pass2=str_replace(';','t',$pass2);

$email=str_replace('=','t',$email);
$pass=str_replace('=','t',$pass);
$pass1=str_replace('=','t',$pass1);
$pass2=str_replace('=','t',$pass2);

$email=str_replace(')','t',$email);
$pass=str_replace(')','t',$pass);
$pass1=str_replace(')','t',$pass1);
$pass2=str_replace(')','t',$pass2);

$email=str_replace('(','t',$email);
$pass=str_replace('(','t',$pass);
$pass1=str_replace('(','t',$pass1);
$pass2=str_replace('(','t',$pass2);


//$email=strip_tags(trim($email));
//$pass=strip_tags(trim($pass));

//$params = array($email, $pass);


//$email=mysqli_real_escape_string($link11, trim($email));
//$pass=mysqli_real_escape_string($link11, trim($pass));


$qry="SELECT * FROM `user2` WHERE `userid`='$gmail1'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);

//echo "$qry";
if($rows>=1)
{

   $qry1="UPDATE `user2` set  name='$email',bankname='$pass1',ifsc='$pass2',accnumber='$pass'  where userid='$gmail1'";
    $result1 = mysqli_query($con,$qry1);

  
}
else
{

 $qry1="INSERT INTO `user2`(`userid`, `name`, `bankname`, `ifsc`,`accnumber`) VALUES ('$gmail1','$email','$pass1','$pass2','$pass')";
    $result1 = mysqli_query($con,$qry1);



}

  include("homepath1.php");

?>