<?php
session_start();

$email=$_POST["mobile1"];
$pass=$_POST["aadhar1"];
$pass1=$_POST["pan1"];
$pass2="test";
$gmail1=$_SESSION["email"];

include("connectionnew.php");

$_SESSION["broker"]="27";



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


$tyu=rand(100,900);


$ttfile=basename($_FILES["fileToUpload"]["name"]);
$target_dir = "proof/".$tyu."_".$pass1."_";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}













$ttfile1=basename($_FILES["fileToUpload1"]["name"]);
$target_dir = "proof/".$tyu."_".$pass."_";
$target_file = $target_dir . basename($_FILES["fileToUpload1"]["name"]);
$uploadOk1 = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload1"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk1 = 1;
    } else {
        echo "File is not an image.";
        $uploadOk1 = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk1 = 0;
}
// Check file size
if ($_FILES["fileToUpload1"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk1 = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "jpeg") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk1 = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk1 == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload1"]["tmp_name"], $target_file)) {
        echo "The file ". basename( $_FILES["fileToUpload1"]["name"]). " has been uploaded.";

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}


$ttfile=$tyu."_".$pass1."_".$ttfile;
$ttfile1=$tyu."_".$pass."_".$ttfile1;


echo $ttfile."->".$ttfile1;


$qry="SELECT * FROM `user1` WHERE `userid`='$gmail1'";
$result = mysqli_query($con,$qry);
$rows = mysqli_num_rows($result);

//echo "$qry";
if($rows>=1)
{

   $qry1="UPDATE `user1` set  mobile='$email',address='$pass',Idproof='$pass1'  where userid='$gmail1'";
    $result1 = mysqli_query($con,$qry1);

  
}
else
{

 $qry1="INSERT INTO `user1`(`userid`, `mobile`, `address`, `Idproof`) VALUES ('$gmail1','$email','$pass','$pass1')";
    $result1 = mysqli_query($con,$qry1);



}


if($uploadOk==1)
{




  $qry1="UPDATE `user1` set  idproof1='$ttfile' where userid='$gmail1'";
    $result1 = mysqli_query($con,$qry1);






}

if($uploadOk1==1)
{




  $qry1="UPDATE `user1` set  address1='$ttfile1'  where userid='$gmail1'";
    $result1 = mysqli_query($con,$qry1);






}








include("homepath1.php");

?>