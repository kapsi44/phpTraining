<?php

$host= "127.0.0.1";
$user ="root";
$pass= "";
$name="Gangouts";

$conn =mysqli_connect($host,$user,$pass,$name);

if(!$conn){
echo "connect fail";

}
else 
{
echo "sucess";
}
?>