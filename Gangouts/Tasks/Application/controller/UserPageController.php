<?php
//include '../view/sigin.php';
Class UserPageController 
{
	private $email_id = "";
	private $password = "";
	
	public function __construct()
	{
		
	
	}
	
	public function __set($name, $value)
	{
	
		$this->$name = $value;
		return $this;
	}
	
	public function __get($name)
	{
		return $this->$name;
	}
	
	public function displayName() 
	{
		
		
	}
	public function displayDetails()
	{
		
		
	}
	public function  displayFriends()
	{
		
	}
	
	public function addFriend() 
	{
		
	
	}
	public function sendRequest()
	{
		
		
	}
	
}
