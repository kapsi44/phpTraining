<?php 

function inputTags($type, $id , $name, $class=NULL)    {
echo "<input type= '$type' id='$id' palceholder='$name' name='$name' class='$class'/> ";    

$aray = array("type"=>"$type","id"=> "$id", "name"=>"$name", "placeholder" => "$name" ,"class" => "$class"  );
    echo "<input ";
        foreach($aray as $key => $value) {
            echo  " $key = $value ";
        }
    echo " >" ;
}

function selectTags($id,$name){
$aray =array("id"=>"$id", "name"=> "$name");

echo "<select ";
foreach($aray as $key => $value) {
            echo  " $key = $value ";
        }
    echo " >";
}

function option($array){
		$aray =explode(",", $array);
		foreach($aray as $value){
			echo "<option value='$value'> $value </option>";
		}
		
	}

function daysOption(){
		
		for($i=1;$i<=31;$i++){
			echo "<option value='$i'> $i </option>";	
		}
		
	}

function createRangeSelect($label, $name, $start, $end) {
  $options = array();
  $options[] = '<option value="">--?--</option>';
  foreach ( range($start, $end) as $v ) {
    $options[] = "<option value='$v'>$v</option>";
  }
  echo "<div style='clear:both;' >";
  echo "<label class='cf_label' style='width: 150px;'>{$label}</label>";
  echo "<select class='validate[\"required\"]' id='{$name}' size='1' name='{$name}' >";
  echo implode("\n", $options);
  echo '</select></div>';
}

function monthOption($array){
		$options = explode(",", $array);
		foreach($options as $value){
			$val= substr($value, 0,3);
			echo "<option value='$val'> $value </option>";
		}
	}	



?>



    <html>
        <body>
            <?php inputTags('text','fn','first','text');
                  inputTags('password','pwd','pass','password');
            selectTags(o1,selct) ;         
createRangeSelect('Day', 'day', 0, 31);
createRangeSelect('Month', 'month', 1, 12);
createRangeSelect('Year', 'year', 2000, 2020);
createRangeSelect('Hour', 'hour', 0, 24);
createRangeSelect('Minute', 'minute', 0, 60);
createRangeSelect('Second', 'second', 0, 60);           

 ?>
<select>
<?php monthOption("January,Febuary,March"); ?>
</select>

</body>
</html>   
