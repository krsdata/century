<?php
session_start();
if(isset($_SESSION["reg"]))
{
if($_SESSION["reg"]==1)
{
$_SESSION["reg"]=2;

include_once ("connectionnew.php");
$user = $_POST['username'];
$email= $_POST['email'];
$password =$_POST['password'];



$pass=$user;
$pass1=$password;



$email=trim($email);
$pass=trim($pass);
$pass1=trim($pass1);


$email=str_replace(' ','t',$email);
$pass=str_replace(' ','t',$pass);
$pass1=str_replace(' ','t',$pass1);

$email=str_replace(';','t',$email);
$pass=str_replace(';','t',$pass);
$pass1=str_replace(';','t',$pass1);

$email=str_replace('=','t',$email);
$pass=str_replace('=','t',$pass);
$pass1=str_replace('=','t',$pass1);

$email=str_replace(')','t',$email);
$pass=str_replace(')','t',$pass);
$pass1=str_replace(')','t',$pass1);

$email=str_replace('(','t',$email);
$pass=str_replace('(','t',$pass);
$pass1=str_replace('(','t',$pass1);


$user=$pass;
$password=$pass1;



$qry="SELECT * FROM `user` WHERE `email`='$email'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);
if($rows>=1)
{
 $_SESSION["log"]=4;
    echo "<script type='text/javascript'>alert('User Already exists. Please change your Email ID');
    window.location='register.php';
    </script>";
     
}
else
{
     $qry1="INSERT INTO `user`(`username`, `email`, `password`) VALUES ('$user','$email','$password')";
    $result = mysqli_query($con,$qry1);
$_SESSION["name"] = $user ;
        $_SESSION["email"] =$email;
 $_SESSION["log"]=3;

    echo "<script type='text/javascript'>alert('User Added Sucessfully');
    window.location='home.php';
    </script>";
}


}
}
else
{
header("Location: register.php");

}

?>