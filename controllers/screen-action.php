<?php  
	require_once '../models/project.php';
	// print_r($_POST);
	$obj->insert_screen($_POST['screen_name'],$_POST['theaterid']);
	echo "Screen Name Added";
?>