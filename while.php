<?php
/* data types
 */
 $name = "David";
 $age = 30;
 $c = $age + 1;
 $a=10;
 $b=55;
 echo $name,$age,$c;
 echo $b;
 echo 'my name is'.$name.'and I am'.$age;
 echo $a.$b;
 
 while($x<=10){
	 echo "The value of x is $x";
	 echo "<br/>";
	 $x++;
	 
 }
 echo "<br/>";
 $y=101;
 do{
	 echo "The value of y is $y";
	 echo "<br/>";
	 $y++;	 
 }
 while ($y<=10);
 
 for ($i=0; $i<1000; $i++){
	 echo "I'm going to do this 1000 times and you can't stop me";
	 echo "<br/>";
	 if ($i==10){
		 break;
		 }
	 }
echo "<br/>";echo "<br/>";	 
for ($j=0; $j<10; $j++){
	 	 if ($j%2==0){
		 continue;
		 }
		 echo $j,'<br/>';
	 }
?>
