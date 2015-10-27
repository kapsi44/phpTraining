<?php
include_once '../../Config/config.php';
$key=$_GET['key'];
$array = array();
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

$query=mysql_query("select * from user_details where first_name LIKE '%{$key}%'");
$retval = mysqli_query($conn , $query );
while($row=mysqli_fetch_assoc($retval))
{
	$array[] = $row['username'];
}
echo json_encode($array);
?>