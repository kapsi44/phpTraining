<html>
<body>
<?php
$s= "hello friends come gdg gt3e dgdga e4tegfsgasd";
echo "<br>";
echo "{".substr($s,0,20) . "} " .substr($s,21) ;

$phrase  = "You, should, eat, fruits, vegetables, and ,fiber, every, day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");
$comma = array (",");
$under= array("_");

$newphrase = str_replace($comma, $under, $phrase);
echo "<br>". $newphrase;


header('Content-type: image/jpeg');

flopImage('/home/aspire864/Pictures/2.jpg');

$image->blurImage(5,3);
echo $image;

function flopImage($imagePath) {
	$imagick = new \Imagick(realpath($imagePath));
	$imagick->flopImage();
	header("Content-Type: image/jpg");
	echo $imagick->getImageBlob();
}


?>
</body>
</html>