<?php
 $error = array('errorType' => FALSE, 'errorMsg' => "");
$username =$_POST['username'];


if (!ctype_alnum($username)) {
	$error['errorType'] = true;
	$error['errorMsg']  = "Username should have alphnumeric characters";
	echo $error['errorMsg'];	
}
?>

<html>
<body>

<input type="text" name="username" value="kapso1159@">
<input type="submit" name="submit" value="ok"/>
</body></html>