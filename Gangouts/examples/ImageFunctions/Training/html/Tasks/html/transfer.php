<html>
<head>
<title>Connecting MySQL Server</title>
</head>
<body>
<?php
   $dbhost = '127.0.0.1';
   $dbuser = 'root';
   $dbpass = 'MYSECRET';
   $dbname = 'Hangouts'; 
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
   if(! $conn )
   {
     die('Could not connect: ' . mysql_error());
   }
   echo 'Connected successfully';
   		if (@$_POST["submit"] <> "") {
   				$email       = $_POST['email'];
   				$name        = $_POST['name'];
   				$mobile      = $_POST['mobile'];
   				$street      = $_POST['street'];
   				$city        = $_POST['city'];
   				$country     = $_POST['country'];
   				$website     = $_POST['website'];
			   	$nationality = $_POST['nationality'];
			   	$gender      = $_POST['gender'];
			    $day         = $_POST['day'];
			    $month       = $_POST['month'];
			    $year        = $_POST['year'];
			    $bloodGrp    = $_POST['bloodGroup'];
				$password    = $_POST['Password'] ;   
			    	
				/*
					$query_reg  = "insert into registration_details(id, name,dob, gender,password,email,bld_grp ) values('','$name','$year-$month-$day','$gender','$password','$email','$bloodGrp')";
				    $query_mob  = "insert into mobile(user_id,mobile_no)values('','$mobile')";
				    $query_adr  = "insert into address(user_id,street,city)values('','$street','$city')";
				    $query_con  = "insert into country(user_id,country)values('','$country')";
				    
				    $result1 = mysqli_query($conn, $query_reg);
				    $result2 = mysqli_query($conn, $query_mob);
				    $result3 = mysqli_query($conn, $query_adr);
				    $result4 = mysqli_query($conn, $query_con);
				    if($result1 && $result2 && $result3 && $result4 ) {
				    	echo "\n Input fetched";
				    }
				    	else {
				    		echo "\n fail";
				    	}*/
				    
			/*		$statement =$conn->prepare("select name from registration_details where email= ?");
				    $statement->bind_param('s',$email); 
					$statement->execute();
					$statement->bind_result($returned_name);
					while($statement->fetch()){
						echo "\n". $returned_name . '<br />';
					}
					$statement->free_result();*/
					
					
					
					$check="SELECT name FROM registration_details WHERE Email = '$email'";
					$rs = mysqli_query($conn,$check);
					$data = mysqli_fetch_array($rs, MYSQLI_NUM);
					if($data[0] > 1) {
						echo "\n User Already in Exists<br/>";
					}
					
					else
					{
						$newUser="INSERT INTO registration_details(id, name,dob, gender,password,email,bld_grp ) values('','$name','$year-$month-$day','$gender','$password','$email','$bloodGrp')";
						if (mysqli_query($con,$newUser))
						{
							echo "\n You are now registered<br/>";
						}
						else
						{
							echo "\n Error adding user in database<br/>";
						}
					}
   		
   		
   		}
   mysql_close($conn);
?>
</body>
</html>
