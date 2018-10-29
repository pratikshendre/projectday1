<?php  
	if(isset($_SESSION['userstatus']) && $_SESSION['userstatus']!=0){
		header("location:index.php");
	}
?>