<?php 
include_once '../config/config.php';

class database
{
	public $conn = "";
	function __construct()
	{
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$conn) {
			return false;
		} else {
			return true;
		}
	
	}
	
     
     
     
     public function insert ($table, $data)
     {   
         $column = implode(",",array_keys($data));
         $value="'".implode("','",$data)."'";
		 $query  = "insert into $table ($column)values($value)";
         return $query;
     }
	


}


?>