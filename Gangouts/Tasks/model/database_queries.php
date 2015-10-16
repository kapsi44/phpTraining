<?php 
include_once '../config/config.php';

class database
{
	public $conn = "";
	function __construct()
	{
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		if (!$conn) {
			echo "connection failed ";
		} else {
			echo 'Connected successfully';
		}
	
	}
	
     
     
     
     function insert ($table, $data, $pdo)
     {
         foreach($data as $column => $value)
         {
        	$insert_query = "INSERT INTO {$table} ({$column}) VALUES (:{$column});";
        	$result1 = mysqli_query($this->conn, $insert_query);
        	$stmt = $pdo->prepare($sql);
        	$stmt->execute(array(':'.$column => $value));
         }
     }
	


}


?>