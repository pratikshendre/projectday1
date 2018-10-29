<?php  
	require_once '../models/project.php';
	// print_r($_POST);
	if(empty($_POST['cname'])){
		echo "Please Enter Name";
	}
	else{
		$obj->add_city($_POST['cname']);
		echo "City Added";
	}
?>