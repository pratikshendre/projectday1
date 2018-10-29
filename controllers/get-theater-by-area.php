<?php 
	require_once '../models/project.php';
	// print_r($_POST);
	if(!empty($_POST['areaid'])){
		$res = $obj->get_theater_by_areaid($_POST['areaid']);
		// print_r($res);
		if(is_array($res)){
			echo "<option value=''>Please Select From List</option>";
			foreach($res as $val){
				$id = $val['th_id'];
				echo "<option value='$id'>".$val['th_name']."</option>";
			}
		}
		else{
			echo "<option value=''>no theater Found</option>";
		}
	}

?>