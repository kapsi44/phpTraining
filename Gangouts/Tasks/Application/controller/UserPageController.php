<?php
include_once '../../Config/config.php';

Class UserPageController extends Controller
{
	private $email_id = "";
	private $password = "";	
	public function __set($name, $value)
	{	
		$this->$name = $value;
		
		return $this;
	}	
	public function __get($name)
	{		
		return $this->$name;
	}
	public function accessUser()
	{
		$user = new UserLogin();
		$con = new Controller();
		if($user->checkUser() === true) {
			$con->render('userPage');
		} else {
			echo "Invalid user";
		}		
	}	
	public function  displayFriends()
	{
		$user = new UserLogin();
		$friends = $user->checkFriends();
		
		return $friends;
	}
}
