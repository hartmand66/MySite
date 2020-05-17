<?php
$people= array('Dave','Leigh','Derin','Trevor');

//$new_string = implode(' ',$people);
//echo $new_string;

$string = 'The key to immortality not dying';
$new_array = explode(' ',$string);

foreach($new_array as $value){
	
      echo $value, '<br/>';	
	
	}
?>
