<?php
	echo "Success";
	include_once '../controller/signup.php';
	include_once '../model/connect.php';
//include_once 'php/insertion.php';
	if (isset($_POST['submit'])) {
    	$u = new SignupController();
    	$u->addUser();
    
}

?>
