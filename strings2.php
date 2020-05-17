<?php

$string = 'in the beginning, in the end and in the middle.';
$find='in';
$offset =0;
$find_length = strlen($find);
echo $find_length, $string, $find,$find_lenght;
echo "<br/>";
 
$isTrue = 'false';
 
echo $isTrue;
echo "<br/>";
$isit = strpos($string,$find,$offset);
echo "I found it at $isit";
 while($i <= 10){
	 echo $i;
	 $i++;
	 }
 
 
?>
