<?php
include_once '../model/validateRegister.php';
include_once '../view/register.php';
include_once '../model/database_queries.php';
include_once '../config/config.php';
include_once '../model/user_details.php';
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
    {
        return $this->$name;
    }
    
    
    
    
    
    public function addUser()
    {
        echo $this->user_name;
        $reg   = new Register();
        $user =new user_details();
        if ($reg->validate() === true) {
            echo "valdiated";
        	$user->insertUser();
            
        }
        
        
        //if($reg->validate()===true) {
        //$con = new connection();
        //$con->insert();
        //echo "You have been Successfully Registered";
        //} else {
        
        //return $reg->validate();
        //	} 
        
    }
    
    public function deleteUser()
    {
        
        
        
    }
    
    public function editUser()
    {
        
        
        
    }
    
    
    
}