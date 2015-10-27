<?php
include_once '../../Config/config.php';
include_once '../view/signin.php';

class SigninController
{
	public $email = "";
    public $pass = "";
	
	public function __set($name, $value)
	{	
		$this->$name = $value;
		
		return $this;
	}	
	public function __get($name)
	{
		return $this->$name;
	}
	public function signinAction()
    {
    	 $this->email = $_POST['email_id'];
        $this->pass = $_POST['password'];
		$user=$_SESSION['email'];
    	$sign=new UserLogin();
    	if(isset($_POST['submit'])) {
    		$count=1;
    		while($count<3){
	    		if(empty($this->email) || empty($this->pass)) {
	    		echo "*please fill the fields";
	    		} elseif($sign->checkUser() === true) {
	    			$_SESSION['email_id'] = $this->email;
	    			$control->render("userPage");
	    		} else {
	    			$count++;
	    		}
	    		$sign->blockUser($user);
    			echo "You Are Blocked";
    		}
    	}
    }


}