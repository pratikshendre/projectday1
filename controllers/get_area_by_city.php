<?php  
	require_once '../models/project.php';
	// echo 122;
	// print_r($_POST);
	$cid = $_POST['city'];
	// echo $cid;
	$result = $obj->get_all_area_by_city($cid);
	// print_r($result);

	if(is_array($result)){
		echo "<option value=''>Please Select Area</option>";
		foreach($result as $val){
			$id = $val['aid'];
			echo "<option value='$id'>".$val['aname']."</option>";
		}
	}
	else{
		echo "<option value=''> No Area Found </option>";
	}
?>