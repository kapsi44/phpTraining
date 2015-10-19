<?php

/*
 A string that doesn't contain the delimiter will simply
return a one-length array of the original string.
*/
$input1 = "hello , world";
$input2 = "hello,there";
print( implode( ',', $input1 ) );
print_r( explode( ',', $input2 ) );

?>

<?php

$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone

// Empty string when using an empty array:
echo implode('hello', $array); // string(0) ""
$chi=utf8_encode("無為平");
echo strlen($chi);

?>