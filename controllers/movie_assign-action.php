<?php  
	require_once '../models/project.php';
	// print_r($_POST);

	if(empty($_POST['screenid'])){
		echo "please select Screen";
	}
	else if(!isset($_POST['movieid'])){
		echo "please select Movie";
	}
	else if(empty($_POST['endDate']))
	{
		echo "Please Enter End Date";
	}
	else{
		$obj->insert_assign_movie($_POST['screenid'],$_POST['movieid'],$_POST['endDate']);
		echo "movie Added In Screen";
	}
?>