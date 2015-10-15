<?php
include_once '../config/config.php';

class connection
{
    
    public $conn = "";
    
    public function __autoload($class)
    {
        if (file_exists("includes/{$class}.php")) {
            include_once("includes/{$class}.php");
        } else {
            "File doesn't exist";
        }
    }
    
    
    function __construct()
    {
        $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if (!$conn) {
            echo "connection failed ";
        } else {
            echo 'Connected successfully';
        }
        
    }
    
    function insert()
    {
        
        $query_reg = "insert into registration_details(id,first_name,last_name,user_name,dob,gender,password,email,bld_grp)
							values('','$firstname','$lastname','$username','$dob','$gender','$password','$email','$bloodGrp')";
        $result1   = mysqli_query($conn, $query_reg);
        
        if ($result1) {
            echo "\n Input fetched";
        } else {
            echo "\n fail";
        }
    }
}
?>
	
	