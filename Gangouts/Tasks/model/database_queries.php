<?php 

class database
{
	function insert()
	{
		echo 'test';
		$insert_query = "insert into registration_details(id, first_name,last_name,user_name,gender,dob,password,email,bld_grp ) 
							values('','$firstname','$lastname','$username','$year-$month-$day','$gender','$password','$email','$bloodGrp')";
		$result1 = mysqli_query($conn, $insert_query);
		if ($result1) {
			echo "\n Input fetched";
		} else {
			echo "\n fail";
		}
	}
	 function select()
	 {
	 $select_query ="select * from  " 	
	 	
	 }
	function delete()
	{
		
		
	}
	
	
}




?>