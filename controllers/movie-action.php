<?php  
	require_once '../models/project.php';
	// print_r($_POST);
	// print_r($_FILES);

	if(empty($_POST['mname'])){
		echo "Please Enter Movie Name";
	}
	else if(empty($_POST['mdesc']))
	{
		echo "Please Enter Movie Desc";
	}
	else if(empty($_FILES['path']['name']))
	{
		echo "please select Image";
	}
	else if($_FILES['path']['type']!="image/png" && $_FILES['path']['type']!="image/gif" && $_FILES['path']['type']!="image/jpeg")
	{
		echo "please select Image Only";
	}
	else if($_FILES['path']['size']>2*1024*1024)
	{
		echo "Please upload image upto 2MB";
	}
	else{
		$filename= $_FILES['path']['name'];
		// echo $filename;
		$tmp = $_FILES['path']['tmp_name'];
		$dest = "../assets/uploads/".time().$filename;
		$res = move_uploaded_file($tmp,$dest);
		 // var_dump($res);

		$obj->insert_movie($_POST['mname'],$_POST['mdesc'],$dest);
		echo "movie Added";
	}
?>