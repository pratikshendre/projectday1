<?php  
	require_once '../models/project.php';
	// print_r($_POST);

	if(!empty($_POST['moviedata'])){
		$data = $_POST['moviedata'];
		// echo $data;
		$result = $obj->get_movie_by_name($_POST['moviedata']);
		// print_r($result);
		if(is_array($result)){
			foreach($result as $val){
				echo "<li>";
				echo "<span>".$val['m_name']."</span>";
				echo "<span><img src='".$val['m_path']."' width=30 height=30 /></span>";
				echo "<span><input type='radio' value='".$val['m_id']."' name='movieid' /></span>";
				echo "</li>";
			}
		}
		else{
			echo "No movies Found";
		}
	}
	else{
		echo "No movies Found";
	}
?>