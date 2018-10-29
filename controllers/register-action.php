<?php  
	require_once '../models/project.php';
	unset($_POST['ucpass']);
	// print_r($_POST);
	//check email id exist or not??
	
	$count = $obj->emailCheck($_POST['uemail']); 
	// echo $count;
	// exit;
	if($count > 0){
		echo "Emailid already exist";
	}
	else{
		$obj->userAdd($_POST);
		echo "User Added";
	}
?>