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
    }

?>
	
	