<?php  
	require_once '../models/project.php';
	// print_r($_POST);
	$ans = $obj->checkUser($_POST);
	if($ans){
		$_SESSION['useremail'] = $_POST['uemail'];
		// ------------- 15/10/2018 -------------//
		$res = $obj->getUserData($_POST['uemail']);
		// print_r($res);
		$_SESSION['userstatus'] = $res[0]['status'];
		$_SESSION['username'] = $res[0]['name'];
		$_SESSION['usermobile'] = $res[0]['mobile'];
		// ------------- 15/10/2018 -------------//
		// exit;
		echo "done";
	}
	else{
		echo "Invalid Credential";
	}
?>