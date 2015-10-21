<?php
//include '../view/signin.php'; 
include '../config/config.php';
//include '../view/signup.php';
Class UserProfile 
{
	public function __autoload($class) 
	{
		include_once 'controller/$class';
	}	
	
	public function checkUser()
	{
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		
		$user = new UserPageController();
		$user->email_id = $_POST['email_id'];
		$user->password = $_POST['password'];
				
		$check = "Select first_name from user_details where user_name = $user->email_id AND password = $user->password ";
		$retval = mysqli_query($conn , $check );
		while($row = mysqli_fetch_assoc($retval)){
			
			echo    "hello :{$row['first_name']}  <br> "; 
		}
		
	}
	
	
}