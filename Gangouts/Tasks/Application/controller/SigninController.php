<?php
include_once '../../bootstrap.php';

class SigninController
{
	private $email_id = "";
	private $password = "";
	
	public function __contruct()
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
	
	public function sigin_user()
	{
		
		
		
	}
	





}