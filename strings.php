<?php
/* data types
 */
 $name = "David J. Hartmann";
 $age = 30;
 $c = $age + 1;
 $a=10;
 $b=55;
 echo $name,$age,$c;
 echo $b;
 echo 'my name is'.$name.'and I am'.$age;
 echo $a.$b;
 echo "<br/>";
 // String lenght function in php
 $name_length = strlen($name);
 echo strlen($name);
 
 for($i=0; $i<$name_length; $i++){
	 echo "I am at postion $i";
	 echo "<br/>";
	 echo strpos($name,'a');
	 echo "<br/>";
	 
	 }

?>
