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
	
     public function select()
     {
     	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
     	 
     
     	$sql = 'SELECT id, user_name, blood_group FROM user_details';
     	// mysqli_select_db('Gangouts');
     	$retval = mysqli_query($conn , $sql );
     	 
     	if(! $retval ) {
     		die('Could not get data: ' );
     	}
     	while($row = mysqli_fetch_assoc($retval)) {
     		echo    "USER ID :{$row['id']}  <br> ".
     				"USER NAME : {$row['user_name']} <br> ".
     				" Blood Group : {$row['blood_group']} <br> ".
     				"--------------------------------<br>";
     	}
     	 
     	echo "You are successfully Registered\n";
     	 
     	mysqli_close($conn);
     
     
     }


}


?>