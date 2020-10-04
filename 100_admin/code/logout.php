<?php 
session_start();
ob_start();
session_destroy();
unset($_SESSION);
session_unset();
function logout(){
	session_destroy();
}
header("Location:../index");
?>