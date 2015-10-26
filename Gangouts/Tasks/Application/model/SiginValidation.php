<?php
include_once '../../Config/config.php';

class SigninValidation extends Signin_controller
{
	public function checkUser() 	
	{   
		$user = new Signin_controller();
		$user->email_id = $_POST['email'];  
		$stmt = $mysqli->prepare("SELECT id, label FROM test WHERE id = $user->email");
	}	
}
