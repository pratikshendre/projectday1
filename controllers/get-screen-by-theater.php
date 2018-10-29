<?php 
	require_once '../models/project.php';
	// print_r($_POST);
	// exit;
	if(!empty($_POST['thid'])){
		$res = $obj->get_screen_by_theaterid($_POST['thid']);
		// print_r($res);
		if(is_array($res)){
			echo "<option value=''>Please Select From List</option>";
			foreach($res as $val){
				$id = $val['sc_id'];
				echo "<option value='$id'>".$val['sc_name']."</option>";
			}
		}
		else{
			echo "<option value=''>no screens Found</option>";
		}
	}
?>