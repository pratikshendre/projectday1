<?php  
	require_once 'helper.php';
	final class project extends helper{
		function userAdd($data){
			// echo "Function TEST";
			// print_r($data);
			$name = $data['uname'];
			// echo $name;
			$mobile = $data['umobile'];
			$email = $data['uemail'];
			$password = sha1($data['upass']);
			// echo $password;
			$this->insert(
				"users",
				"name,mobile,emailid,password",
				"'$name','$mobile','$email','$password'");

			
		}
		function emailCheck($emailid){
			// echo $emailid;
			// select count(emailid) as total from users where emailid='pratik@gmail.com'
			$ans = $this->select(
				"count(emailid) as total",
				"users",
				"emailid='$emailid'"
			);	
			// print_r($ans);
			$final = $ans[0]['total'];
			// echo $final;
			return $final;
		}
		function checkUser($data){
			// print_r($data);
			$email = $data['uemail'];
			$password = sha1($data['upass']);
			// echo $email;
			// echo $password;

			//select password from users emailid='$email';
			$ans = $this->select(
				"password",
				"users",
				"emailid='$email'"
			);
			// var_dump($ans);
			// print_r($ans);

			if(is_array($ans)){
				$dbpass = $ans[0]['password'];
				// echo $dbpass;
				if($dbpass == $password){
					return true;
				}
				else{
					// return "Invalid Password";
					return false;
				}
			}
			else{
				// return "Invalid emailid";
				return false;
			}
		}

		function check_current_pass($txtbox_pass,$email){
			// echo $email;
			$ans = $this->select("password","users","emailid='$email'");
			// print_r($ans);
			$dbpass = $ans[0]['password'];
			return ($dbpass == $txtbox_pass)?true:false;
		}

		function update_password($txt_pass,$email){
			// echo $txt_pass;
			$this->update(
				"users",
				"password='$txt_pass'",
				"emailid='$email'"
			);
		}

		function getUserData($email){
			// echo $email;
			return $this->select("name,mobile,status","users","emailid='$email'");
		}
		function add_city($name){
			$this->insert("city" , "cname" , "'$name'");
		}
		function get_city(){
			//select * from city where 1
			return helper::select("*","city","1");
		}
		function insert_area($name,$id){
			$this->insert("area" , "aname,acid" , "'$name','$id'");
		}
		function checkAreaExist($name,$id){
			$ans = $this->select(
				"count(*) as total",
				"area",
				"aname='$name' and acid='$id'"
			);
			// print_r($ans);
			return $ans[0]['total'];	
		}

		function get_all_area_by_city($data){
			// echo $data;
			return helper::select("aid,aname","area","acid='$data'");
		}

		function insertTheater($name,$aid){
			$this->insert("theater" , "th_name,th_areaid" , "'$name','$aid'");
		}

		function get_theater_by_areaid($aid){
			return helper::select("th_id,th_name","theater","th_areaid='$aid'");
		}

		function insert_screen($name,$tid)
		{
			helper::insert("screen","sc_name,sc_thid","'$name','$tid'");
		}

		function get_screen_by_theaterid($thid){
			return helper::select("sc_id,sc_name","screen","sc_thid='$thid'");
		}

		function insert_seats($sid,$amt,$seatno)
		{
			helper::insert(
					"seats",
					"se_amount,se_no,se_screen_id",
					"'$amt','$seatno','$sid'"
			);
			
		}

		function update_seats($sid,$seatno,$amount)
		{
			helper::update(
				"seats",
				"se_amount='$amount'",
				"se_no='$seatno' and se_screen_id='$sid'"
			);
		}

		function insert_movie($name,$desc,$dest){
			parent::insert(
					"movies",
					"m_name,m_path,m_desc",
					"'$name','$dest','$desc'"
			);
		}

		function get_movie_by_name($name){
			return parent::select(
					"*",
					"movies",
					"m_name like '$name%'"
			);
		}

		function insert_assign_movie($scid,$mid,$eDate)
		{
			$sDate = date('Y-m-d');
			parent::insert(
					"movie_screen",
					"ms_movieid,ms_screenid,ms_end,ms_start",
					"'$mid','$scid','$eDate','$sDate'"
			);
		}

		function get_all_movies()
		{
			return parent::select(
					"m_id,m_name,m_path,m_desc",
					"movies",
					"1"
			);	
		}

		function get_movie_details($id){
			return parent::select(
					"m_id,m_name,m_path,m_desc",
					"movies",
					"m_id='$id'"
			);
		}

		function get_theater_by_movie($mid){
			/*
              select th_id,th_name,sc_id,sc_name from theater,movie_screen,screen where ms_movieid='$mid' and ms_screenid=sc_id and sc_thid=th_id
            */
             return $this->select(
             	"th_id,th_name,sc_id,sc_name",
             	"theater,movie_screen,screen",
             	"ms_movieid='$mid' and ms_screenid=sc_id and sc_thid=th_id"

             );
		}

		function get_th_name($id){
			return $this->select(
             	"th_name",
             	"theater",
             	"th_id='$id'"

             );
		}
		function get_screen_name($id){
			return $this->select(
             	"sc_name",
             	"screen",
             	"sc_id='$id'"

             );
		}

		function get_seats_by_screen_id($id){
			return helper::select(
				"se_id,se_amount,se_no",
				"seats",
				"se_screen_id='$id'"
			);
		}

		function getDates($sid,$mid){
			return helper::select(
				"ms_end,ms_start",
				"movie_screen",
				"ms_movieid='$mid' and ms_screenid='$sid'"
			);
		}
	}
	$obj =new project();