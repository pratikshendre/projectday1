<?php  
	require_once '../models/project.php';
	// print_r($_POST);
	if(empty($_POST['aname'])){
		echo "please Enter Area Name";
	}
	else if(empty($_POST['cityid'])){
		echo "please Select City";
	}
	else{
		$res = $obj->checkAreaExist($_POST['aname'],$_POST['cityid']);
		// print_r($res);
		// exit;
		if($res>0){
			echo "Area Exist";
		}
		else{
			$obj->insert_area($_POST['aname'],$_POST['cityid']);
			echo "Area Added";	
		}		
	}
?>