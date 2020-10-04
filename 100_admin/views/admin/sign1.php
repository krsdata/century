<?php
session_start();


$email=$_POST["email"];
$pass=$_POST["password"];


include("../../db/config.php");





if(!$conn)
{
    echo "Error in connection";
 header("Location: index.php");
}


//$email=mysqli_real_escape_string($con, $_POST["email"]);
//$pass=mysqli_real_escape_string($con, $_POST["password"]);

$email=trim($email);
$pass=trim($pass);


$email=str_replace(' ','t',$email);
$pass=str_replace(' ','t',$pass);

$email=str_replace(';','t',$email);
$pass=str_replace(';','t',$pass);

$email=str_replace('=','t',$email);
$pass=str_replace('=','t',$pass);

$email=str_replace(')','t',$email);
$pass=str_replace(')','t',$pass);

$email=str_replace('(','t',$email);
$pass=str_replace('(','t',$pass);


//$email=strip_tags(trim($email));
//$pass=strip_tags(trim($pass));

//$params = array($email, $pass);


//$email=mysqli_real_escape_string($link11, trim($email));
//$pass=mysqli_real_escape_string($link11, trim($pass));


$qry="SELECT * FROM `admin_login` WHERE `username`='$email' and `password`='$pass'";
$result = mysqli_query($conn,$qry);
$rows = mysqli_num_rows($result);

//echo "$qry";

if($rows==1)
{
//echo "$qry";
    while ($rows = mysqli_fetch_array($result)) 
    {
           $_SESSION["email"] = $rows['username'];
    }
    $_SESSION["log333"]=3;
 header("Location: home/mycontests_new.php");
}
else
{
$_SESSION["log333"]=4;
 header("Location: ../admin");
}

?>