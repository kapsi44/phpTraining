<?php 

$image = $_FILES['uploaded_file']['name'];
$tmpImage =$_FILES['uploaded_file']['tmp_name'];
$imageSize =$_FILES['uploaded_file']['size'];
$imageType =$_FILES['uploaded_file']['type'];
$div =explode(',', $tmpImage);





?>