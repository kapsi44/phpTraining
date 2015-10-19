<?php
include_once 'database_queries.php';
include_once '../config/config.php';
include_once '../controller/signup_controller.php';
include_once '../view/register.php';
class user_details
{  
	public function insertUser()
	{	
		$table_name="user_details";
		$add['user_name'] = $_POST['username'];
		$add['first_name']= $_POST['fn'];
		$add['last_name'] = $_POST['ln'];
		$add['age']       = date('Y')-$_POST['year'];
		$add['gender']    = $_POST['gender'];
		$add['password']  = $_POST['password'];
		$add['blood_group']= $_POST['bloodGroup'];
		$db_queries=new database();
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query= $db_queries->insert($table_name,$add);
		$result1    = mysqli_query($conn, $query);
		echo $query;
		if ($result1) {
			return true;
		} else {
			echo false;
		}
	}
	
	public function insertUserAddress()
	{   $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
		$table_name= "address";
		$query= $db_queries->insert($table_name,$add);	
		$result1    = mysqli_query($conn, $query);
	}
	
	public function	insertUserMobile()
	{   $add['mobile'] = $_POST['mobile'];
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
		$table_name= "mobile";
		$query= $db_queries->insert($table_name,$add);	
		$result1    = mysqli_query($conn, $query);
		
	}
	
	public function insertUserEmail()
	{	$add['user_email'] = $_POST['email'];
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
		$table_name= "email";
		$query= $db_queries->insert($table_name,$add);	
		$result1    = mysqli_query($conn, $query);
		
		
	}

   public function selectUser()
   {
   	
   	
   	
   }
}
	