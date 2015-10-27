<?php
include_once '../../Config/config.php';

Class AdminLogin
{
	private $id = "";
	private $password = "";
	
	public function checkAdmin()
	{
		$this->id = $_POST['adminId'];
	    $this->password = $_POST['adminPassword'];
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = 'select * from admin';
		$retval = mysqli_query($conn , $query );
		while($row = mysqli_fetch_assoc($retval)) {
			if($row["user_id"] == $this->id AND $row["password"] == $this->password) {
				return true;
			} else {
				return false;
			}
			
		}		
	}
	public function displayUsers()
	{
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query = 'select * from user_details';
		$retval = mysqli_query($conn ,$query);
		
		return $retval;
	}
	public function unblock($user)
	{
			$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
			$query= "update user_details SET status='Working' where email='$user'";
			$retval = mysqli_query($conn ,$query);
			return true;
	}
}	
?>