<?php
	include_once '../config/config.php';
	echo "Welcome DUDE!!!!";
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
   
  
   $sql = 'SELECT id, user_name, first_name FROM user_details';
  // mysqli_select_db('Gangouts');
   $retval = mysqli_query($conn , $sql );
   
   if(! $retval )
   {
      die('Could not get data: ' );
   }
   
   while($row = mysqli_fetch_assoc($retval))
   {
      echo "EMP ID :{$row['id']}  <br> ".
         "EMP NAME : {$row['user_name']} <br> ".
         "EMP SALARY : {$row['first_name']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysqli_close($conn);
?>
	
	?>