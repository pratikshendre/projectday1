<?php
	require_once '../models/project.php';  
	// print_r($_POST);

	if(empty($_POST['cpass']) || empty($_POST['npass']) || empty($_POST['cnpass'])){
		echo "Please Enter All Records";
	}
	else if($_POST['npass']!=$_POST['cnpass'])
	{
		echo "New & confirm new pass does not match";
	}
	else if($_POST['cpass']==$_POST['npass'])
	{
		echo "New pass should be diff from current pass";
	}
	else{
		$curpass = sha1($_POST['cpass']);
		// echo $curpass;
		$ans = $obj->check_current_pass($curpass,$_SESSION['useremail']);
		// var_dump($ans);
		if($ans){
			$newpass = sha1($_POST['npass']);
			$obj->update_password($newpass,$_SESSION['useremail']);
			echo "Password Updated";
		}
		else{
			echo "Current password invalid";
		}
	}
?>