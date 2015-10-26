<?php
include_once '../../Config/config.php';

class UserDetails extends Query

{  
	public function insertUser()
	{	
		$table_name="user_details";
		$add['user_name'] = $_POST['username'];
		$add['first_name'] = $_POST['firstname'];
		$add['last_name'] = $_POST['lastname'];
		$add['age'] = date('Y')-$_POST['year'];
		$add['gender'] = $_POST['gender'];
		$add['password'] = md5($_POST['password']);
		$add['blood_group'] = $_POST['bloodGroup'];
		$add['email'] = $_POST['email'];
		$add['mobile']= $_POST['mobile'];
		$db_queries=new Query();
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$que= $db_queries->insert($table_name,$add);
		$result1    = mysqli_query($conn, $que);
		if ($result1) {
			return true;
		} else {
			echo false;
		}
	}
	public function	insertUserMobile()
	{   $add['mobile_no'] = $_POST['mobile'];
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME); 
		$table_name= "mobile";
		$db_queries=new Query();
		$query= $db_queries->insert($table_name,$add);	
		$result1    = mysqli_query($conn, $query);
		if ($result1) {
			return true;
		} else {
			return false;
		}
	}
	
	public function selectUser()
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
	