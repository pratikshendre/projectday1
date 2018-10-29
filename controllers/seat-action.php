<?php  
	require_once '../models/project.php';
	// print_r($_POST);

	if(empty($_POST['screenid'])){
		echo "Please Select Screen Name";
	}
	else if(empty($_POST['seat_amount']) || !ctype_digit($_POST['seat_amount']) || $_POST['seat_amount']<=0 ){
		echo "Please Enter Amount";
	}
	else if($_POST['fromseat'] > $_POST['toseat'])
	{
		echo "Please Select Seats ";
	}
	else{
		$screenid=$_POST['screenid'];
		for($i=$_POST['fromseat'];$i<=$_POST['toseat'];$i++){
			$re = $obj->select(
				"count(*) as cnt",
				"seats",
				"se_screen_id='$screenid' and se_no='$i'"
			);

			// print_r($re);
			// echo "<br />";

			if($re[0]['cnt']==0){
				$obj->insert_seats($_POST['screenid'],$_POST['seat_amount'],$i);

			}
			if($re[0]['cnt']==1){
				$obj->update_seats($_POST['screenid'],$i,$_POST['seat_amount']);
			}
		}

		echo "Seats Updated";

	}
?>