<?php  
	require_once 'connection.php';
	abstract class helper extends connection{
		function insert($tablename,$colname,$values){
			// echo "TEST";
			// echo $tablename;
			// echo $colname;
			// echo $values;

			//query preparation
			$str = "insert into $tablename ($colname) values ($values)";
			// echo $str;

			//query execution
			// print_r($this->conn);
			$result = $this->conn->query($str) or die($this->conn->error);
			// var_dump($result);
		}

		function select($colname,$tablename,$condition){
			$str = "select $colname from $tablename where $condition";
			// echo $str;
			$result = $this->conn->query($str) or die($this->conn->error);
			// echo "<pre>";
			// print_r($result);
			// echo "</pre>";

			if($result->num_rows > 0)
			{
				// fetch_array() Mixed array
				// MYSQLI_NUM = > Numeric array
				// MYSQLI_ASSOC = > Associative array
				while($ans = $result->fetch_array(MYSQLI_ASSOC))
				{
					// echo "<pre>";
					// print_r($ans);
					// echo "</pre>";
					$data[] = $ans;
				}
				// echo "<pre>";
				// print_r($data);
				// echo "</pre>";
				return $data;
			}
			else{
				return false;
			}
		}
		
		function delete($tablename,$condition){
			$str = "delete from $tablename where $condition";
			// echo $str;
			$result = $this->conn->query($str) or die($this->conn->error);
			// var_dump($result);
		}
		
		function update($tablename,$records,$condition){
			// echo "TEST";
			// echo $tablename;
			// echo $records;
			// echo $condition;

			//query prepare
			$str = "update $tablename set $records where $condition";
			// echo $str;

			// print_r($this->conn);
			$result = $this->conn->query($str) or die($this->conn->error);
			// var_dump($result);
		}
	}