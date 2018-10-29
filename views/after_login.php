<?php  
	session_start();
	if(!isset($_SESSION['useremail'])){
		header("location:logout.php");
	}
?>
