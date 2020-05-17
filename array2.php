<?php

$fruit = array ("strawberries", "bananas","apples","raspberry","oranges","blueberries");
$food = array ("burgers","pizza","fries","pies");
// you can extract parts of an array
$new_array= array_slice($fruit, 2, 2);
// you can concatenate two arrays
$merged_array = array_merge($fruit,$food);


// list out each element of the merged array
foreach($merged_array as $value){
	echo $value, '<br/>';
	
	}
	
	
?>
