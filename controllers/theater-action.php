<?php  
	require_once '../models/project.php';
	print_r($_POST);

	if(empty($_POST['tname'])){
		echo "please enter name";
	}
	else if(empty($_POST['cityid'])){
		echo "please Select City";
	}
	else if(empty($_POST['areaid'])){
		echo "please Select Area";
	}
	else{
		$obj->insertTheater($_POST['tname'],$_POST['areaid']);
		echo "Record Added";
	}
?>