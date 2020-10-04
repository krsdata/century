<?php
require_once "../db/config.php";
session_start();
//print_r($_POST);die();
if($_SERVER["REQUEST_METHOD"] == "POST" && $_SESSION["username"] != ""){
 
  $userid = $_POST["userid"];
  $refid = $_POST["refid"];
  $percent = $_POST["percent"];

  mysqli_autocommit($conn, FALSE);

  $sql = "SELECT refid FROM refer1 WHERE refid = '$refid'";
  $exe = mysqli_query($conn,$sql);
  $row = mysqli_fetch_assoc($exe);
  $ref_id = $row['refid'];
  if ($refid == $ref_id) {
    $_SESSION['TYPE'] = "9";
    header("location: ../views/promoter?userid=".$userid);
    exit();
  }

  $qry = "UPDATE `refer1` SET `refid` = '$refid', `percent` = '$percent' WHERE `userid` = '$userid' ";
  $res = mysqli_query($conn,$qry);

  $qry1 = "UPDATE `user` SET `status` = '4' WHERE `email` = '$userid' ";
  $res1 = mysqli_query($conn,$qry1);

  if ($qry and $qry1) {
    mysqli_commit($conn);
    $_SESSION['TYPE'] = "1";
  }else{
    mysqli_rollback($link);
    $_SESSION['TYPE'] = "0";
  }
  mysqli_close($conn);
  header("location: ../views/promoter?userid=".$userid);
  
}else
  {
    $_SESSION['TYPE'] = "2";
    header("location: ../views/promoter?userid=".$userid);
    exit;
  }
?>