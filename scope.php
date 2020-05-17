<?php
$mynewvar = 4;  // global value by default


function scoper(){
     $myvar = 20; // local value by default
     echo "$myvar is the value of myvar"; 	
	 echo "</br>";
	 echo "$mynewvar is the value of myvar"; 	// can print the global value
	 
	}
	
	scoper();
	 echo "</br>";
	 echo "</br>";
	 echo "</br>";
	 echo "$myvar is the value of myvar"; // can't print the local value
	 echo "</br>";
	 echo "$mynewvar is the value of myvar"; 	


?>
