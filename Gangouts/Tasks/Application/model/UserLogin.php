<?php
include_once '../../Config/config.php';
include_once '../view/signin.php';

Class UserLogin
{
	private $id="";
	private $password="";
	public $row ="";
	public function checkUser()
	{
		$this->id = $_POST['email_id'];
	    $this->password = md5($_POST['password']);
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query="select * from user_details where email='$this->id' AND password ='$this->password'";
		$retval = mysqli_query($conn , $query );
		$count=mysqli_num_rows($retval);
		if ($count==1) {
			return true;
		} else {
			return false;
		}
	}
	public function checkFriends()
	{
		$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		$query='select * from user_details';
		$retval = mysqli_query($conn , $query );
		return $retval;
	}	
}
?>
