<?php  
session_start();
// print_r($_SESSION);
if(isset($_SESSION['useremail'])){
	header("location:index.php");
}