<?php  
	session_start();
	session_regenerate_id(true);
	unset($_SESSION['useremail']);
	session_destroy();
	header("location:login.php");
?>