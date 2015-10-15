<?php
include_once '../model/validateRegister.php';
include_once '../view/register.php';

class SignupController 
{
	
	public function __autoload($class)
	{
		if (file_exists("includes/{$class}.php")) {
			include_once("includes/{$class}.php");
		} else {
			"File doesn't exist";
		}
	}
	
	public function getDetails()
	{
		$reg = new Register();
		$reg->first_name= $_POST['fn'];
		$reg->last_name= $_POST['ln'];
		$reg->user_name= $_POST['username'];
		$reg->mobile= $_POST['mobile'];
		$reg->gender= $_POST['gender'];
		$reg->day= $_POST['day'];
		$reg->year= $_POST['year'];
		$reg->month= $_POST['month'];
		$reg->blood_group= $_POST['bloodGroup'];
		$reg->password= $_POST['password'];
		$reg->confirm_password= $_POST['confirmPassword'];
		$reg->email= $_POST['email'];
	
	}
	
	
	public function addUser()
	{	echo "adduser";
		$reg = new Register();
	    $reg->validate();
	    
	    if($reg->validate()===true) {
			$con = new connection();
			$con->insert();
			echo "You have been Successfully Registered";
		} else {
			
			return $reg->validate();
		} 
		
	}
	
	public function deleteUser()
	{
		
		
		
	}
	
	public function editUser()
	{
		
		
		
	}
	
	

}