<?php
include_once '../../Config/config.php';

class SigninController
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
}