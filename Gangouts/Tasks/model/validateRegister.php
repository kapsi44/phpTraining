<?php
//include_once 'connect.php';
include_once '../controller/signup.php';


class Register
{
    
    private $email;
    private $username;
    private $first_name;
    private $last_name;
    private $mobile;
    private $gender;
    private $day;
    private $month;
    private $year;
    private $dob;
    private $age;
    private $blood_group;
    private $password;
    private $confirm_password;
    
    
    public function __autoload($class)
    {
        if (file_exists("includes/{$class}.php")) {
            include_once("includes/{$class}.php");
        } else {
            "File doesn't exist";
        }
    }
    
    public function __set($name, $value)
    {
       
        $this->$name = $value;
        return $this;
    }
    
    public function __get($name)
    {	echo "getting values";
        return $this->$name;
    }
    
    function __construct()
    {
        //include_once '../controller/variables.php';
    }
    public $error = array('errorType' => FALSE, 'errorMsg' => "");
    
    const MIN=3;
    const MAX=30;
    public function validate()
    {    
    	$sign=new SignupController();
    	$sign->getDetails();
    	
    	echo "validate";
    	 $this->error;
         echo $this->username;   
        
        //$error = array('errorFlag' => false, 'errorMsg' => "");
        if (!ctype_alnum($this->username)) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should have alphnumeric characters";
        }
        // if username is not 3-20 characters long, throw error
        if (strlen($this->username) < self::MIN OR strlen($this->username) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Username should be within 3-20 characters long";
        }
        
        # Validate First Name #
        // if its not alpha numeric, throw error
        if (!ctype_alpha(str_replace(array("'","-"), "", $this->first_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be alpha characters only.";
        }
        // if first_name is not 3-20 characters long, throw error
        if (strlen($this->first_name) < self::MIN OR strlen($this->first_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "First name should be within 3-20 characters long";
        }
        
        # Validate Last Name #
        // if its not alpha numeric, throw error
        if (!ctype_alpha(str_replace(array("'","-"), "", $this->last_name))) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be alpha characters only.";
        }
        // if first_name is not 3-20 characters long, throw error
        if (strlen($this->last_name) < self::MIN OR strlen($this->last_name) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Last name should be within 3-20 characters long.";
        }
        
        # Validate Password #
        // if first_name is not 3-20 characters long, throw error
        if (strlen($this->password) < self::MIN OR strlen($this->password) > self::MAX) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Password should be within 3-20 characters long.";
        }
        
        # Validate Confirm Password #
        // if first_name is not 3-20 characters long, throw error
        if ($this->confirm_password != $this->password) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Confirm password mismatch.";
        }
        
        # Validate Email #
        // if email is invalid, throw error
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) { // you can also use regex to do same
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid email address.";
        }
        
        # Validate Phone #
        // if phone is invalid, throw error
        if (!ctype_digit($this->mobile) OR strlen($this->mobile) != 10) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid phone number.";
        }
        
        # Validate Gender #
        // if gender is not selected or invalid, throw error
        if ($this->gender != 'male' && $this->gender != 'female') {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your gender.";
        }
        
        # Validate Blood Group #
        // if blood group is not selected, throw error
        if ($this->blood_group == 0) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Please select your blood group.";
        }
        
        # Validate Date of Birth (DOB) #
        // if day is not 1-31, throw error
        if (intval($this->day) < 1 OR intval($this->day) > 31) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid day between 1-31.";
        }
        // if month is not 1-12, throw error
        if (intval($this->month) < 1 OR intval($this->month) > 12) {
            $error['errorType'] = true;
            $error['errorMsg']  = "Enter a valid month between 1-12.";
        }
        // if age is below 18 , throw error
        if ($this->age < 18) {
            $error['errorType'] = true;
            $error['errorMsg']  = "You should be at least 18 years old.";
        }
        
        if ($error['errorType'] === false) {
            return true;
        } else {
            return $error;
        }
        
    }
}
?>