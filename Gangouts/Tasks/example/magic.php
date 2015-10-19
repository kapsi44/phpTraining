<?php
class magic{

   private $a = ["abc"=>"ABC", "xyz"=>"XYZ"]; 
	
	public function __construct() {
    echo "hello ";
  }
  public function __destruct() {
  	echo "bye";
  	  	
  	}
  	
  	
  	public function __unset($s)
  	{
  		
  		echo "unseting";
  	}
  	public function hello(){
  		
  		echo "hello ";
  	}
     
} 
 

$an = new Animal ();
//echo $an->created;
 //unset($an);
 $an->hello();
?>

