<?php  
	require_once('parameters.php');
	abstract class connection implements parameter{
		protected $conn = "";
		function __construct(){
			$this->conn = new mysqli(
				self::HOSTNAME,
				self::USERNAME,
				self::PASSWORD,
				self::DATABASE
			);
			// print_r($this->conn);
			if(session_id()==""){
				session_start();
				// echo session_id();
			}
		}
		function __destruct(){
			$re = $this->conn->close();
			// var_dump($re);
		}
	}