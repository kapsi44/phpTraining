<?php
	include_once '../config/config.php';
	include_once '../model/user_details.php';
	
	echo "Welcome DUDE!!!!";
	$user= new user_details();
	$user->selectUser();
?>
	
