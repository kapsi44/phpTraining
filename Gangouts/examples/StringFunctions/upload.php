<?php 

	if(isset($_POST['submit'])) {
	$type = explode(".",$_FILES['fileToUpload']['name']);
	
	$filename = $_FILES["fileToUpload"]['name'];
	
	$upfile = $_FILES["fileToUpload"]['tmp_name'];
	
	echo "<br>";	
	
	if(strtolower(end($type)) == 'csv') {
		
		
		$dis = strtolower($type[0]);
	    
		echo $dis . '_{' .date ("H:i:s", filemtime($upfile)) . '}.csv' ;
		echo "<br>";
		echo "$file was last modified: " . date ("F d Y H:i:s.", filemtime($upfile));
		echo "<br/>".'The size of '.$file . ' : ' . filesize($upfile) . ' bytes '. "<br/>"; 
		$time=date ("F d Y H:i:s.", filemtime($upfile));
		$con= file_get_contents($upfile);
		
		//$len = array_count_values($con);
		//echo $len;
		 $dat = explode(",",$con);
	     
		echo '<html><body><table border="1">';
        
		$f = fopen($upfile,"r");
		
		while (($line = fgetcsv($f)) !== false) {
        	echo "<tr>";
        		foreach ($line as $cell) {
                		echo "<td>" . $cell . "</td>";
        			}
        	echo "</tr>\n";
		}  fclose($f);
		move_uploaded_file ($_FILES["fileToUpload"]["tmp_name"],"/var/www/html/uploads/" . $_FILES["fileToUpload"]["name"]."_{$time}.csv") or die ("Failure to upload content");
			echo "</table></body></html>";
   
	}
   
   else {

		echo $file . " is not csv file";
	}
	
	}
?>

<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select .csv file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload File" name="submit">
</form>
<h1><?php echo $filename ?> </h1>
</body>
</html>