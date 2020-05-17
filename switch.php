<?php
/* data types
 */
 $apples = 4;
 $name = "David";
 $age = 30;
 $c = $age + 1;
 $a=10;
 $b=55;
 $number=0;
  echo "<br/>";
 if($number>0){
	 echo "The number $number is positive";
	 }
	 elseif($number==0){
		 echo "The number $number is not positive or negative";
		 }
		 else{
			 echo "The number $number is negative";
			 }
 echo "<br/>";
switch($apples){
	case 1;
	echo " you have $apples"; 
	break;
	case 2;
	echo " you have $apples why ?"; 
	break;
	case 3;
	echo " you have $apples why not share ?"; 
	break;
	default:
	echo "This is the default";
	}			 
 echo "<br/>";
			 
 echo $name," ",$age,"   ",$c;
 echo "<br/>";
 echo $b;
 echo "<br/>";
 echo "my name is $name and I am $age ";
 echo "<br/>";
 echo $a."  ".$b;
 
 

?>
