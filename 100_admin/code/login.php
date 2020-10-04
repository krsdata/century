<?php
require_once "../db/config.php";
$ip = $_SERVER['REMOTE_ADDR'];
$username = $password = "";
$username_err = $password_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    if(empty($username_err) && empty($password_err)){
        $sql = "SELECT * FROM admin_login WHERE username = '$username' AND password = '$password' AND user_type = '1'";
        $result = mysqli_query($conn,$sql);
		$rows = mysqli_num_rows($result);
		$data = mysqli_fetch_assoc($result);
		//print_r($data);die;
		session_start();
                            
		$_SESSION["loggedin"] = true;
		$_SESSION["id"] = $data['id'];
		$_SESSION["username"] = $data['username'];//exit;
		$_SESSION["is_login"] = $data['is_login'];
		if($rows == 1)
		{
			$id = $data['id'];
			$qry = "UPDATE `admin_login` SET `is_login` = '1', `login_ip` = '$ip' WHERE `id` = '$id' ";
			mysqli_query($conn,$qry);
			
			header("location: ../views/index");
			exit;
		}
		else
		{
			session_destroy();
			unset($_SESSION);
			session_unset();
			header("location: ../index?ERR_MSG=1");
			exit;
		}
    }
    
    mysqli_close($conn);
}
?>