<?php
     // This is brilliant and very useful was PHP 30
     
     $people = array('Bob','Carol','Ted','Alice');
     $debts = array('ryan'=>150,'ned'=>21,'bob'=>44,'fred'=>99);
    
    
     echo "ryan owes me  ",$debts['ryan'],'<br/>';


// foreach loop (array as variable or key)
// then you put in your loop code and refer to the individulal array
// item by the variable or key name
foreach ($debts as $key => $value ){
	// repeating code goes here
	
	echo $value,"<br/>";
	
	}
	
	foreach ($people as $i ){
	// repeating code goes here
	
	echo $i,'<br/>';
	
	}
?>
