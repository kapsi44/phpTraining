
<?php
//include_once '../model/SignupValidation.php';
//include_once '../view/signup.php';
//include_once '../model/Query.php';
//include_once '../config/config.php';
//include_once '../model/UserDetails.php';
include_once '../../bootstrap.php';
class SignupController
{
    
    private $email = "";
    private $user_name = "";
    private $first_name = "";
    private $last_name = "";
    private $mobile = "";
    private $gender = "";
    private $day = "";
    private $month = "";
    private $year = "";
    private $dob = "";
    private $age = "";
    private $blood_group = "";
    private $password = "";
    private $confirm_password = "";

    public function __construct($post)
    {
    	$this->first_name       = $post['fn'];
    	$this->last_name        = $post['ln'];
    	$this->user_name        = $post['username'];
    	$this->mobile           = $post['mobile'];
    	$this->gender           = $post['gender'];
    	$this->day              = $post['day'];
    	$this->year             = $post['year'];
    	$this->month            = $post['month'];
    	$this->blood_group      = $post['bloodGroup'];
    	$this->password         = $post['password'];
    	$this->confirm_password = $post['confirmPassword'];
    	$this->email            = $post['email'];
    	$this->age              = date('Y') - $this->year;
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
    
	public function addUser()
    {
        echo $this->user_name;
        $reg   = new SignupValidation();
        $user =new user_details();
        if ($reg->validate() === true) {
            if($user->insertUser()===true) {
               header('Location: /Gangouts/Tasks/view/userPage.php');
            } else {
			   echo "Sorry You are not Registered";
		    }
        }
        
    }
}
?>