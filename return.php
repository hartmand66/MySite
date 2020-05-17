<?php
$apples = 10;
$oranges=12;

function adder($arg1, $arg2){
	
	
	$sum = $arg1 + $arg2;
	
	return $sum;
	}

$mynewval = adder($apples,$oranges);
$myoldval = adder (5,6);

echo $mynewval,'<br/>';
echo $myoldval, '</br>';

?>
