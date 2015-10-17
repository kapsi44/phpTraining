<?php
include_once 'database_queries.php';
include_once '../config/config.php';
include_once '../controller/signup.php';
class user_details
{
	public function insertUser()
	{	
		$sign                   = new SignupController();
		/*$sign->first_name       = $_POST['fn'];
		$sign->last_name        = $_POST['ln'];
		$sign->user_name        = $_POST['username'];
		$sign->gender           = $_POST['gender'];
		$sign->day              = $_POST['day'];
		$sign->year             = $_POST['year'];
		$sign->month            = $_POST['month'];
		$sign->blood_group      = $_POST['bloodGroup'];
		$sign->password         = $_POST['password'];*/
		//$sign->user_name        = $_POST['username'];
		
		echo $sign->user_name;
		$table_name="user_details";
		$add['user_name']= "";
		$db_queries=new database();
		$user_query = $db_queries->insert($table_name,$add);
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query= $db_queries->insert($table_name,$add);
		$result1    = mysqli_query($conn, $query);
		if ($result1) {
			echo "\n Input fetched";
		} else {
			echo "\n fail";
		}
	}
	
	public function insertUserAddress()
	{
		
		
	}
	
	public function	insertUserMobile()
	{
		
		
	}
	
	public function insertUserEmail()
	{
		
		
		
	}

   public function selectUser()
   {
   	
   	
   	
   }
}
	