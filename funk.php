<?php
// simple function and passing an argument
$item = "list";
$me = "Dave";
$scores = array(45,99,87,89,55);

     function bob(){
		 // statements
		 //return value
		 echo "I was displayed by a function <br/>";
		  }
		  
	function who($name){
		 // statements
		 //return value
		 echo "Who are you, you are $name <br/>"; 
	   }
	
	 function averager($array){
		 
		 $total =0;
		
		 foreach ($array as $value){
			 $total += $value;			 
		 }
		 $grand = $total/count($array);
		 echo "The average is $grand <br/>";
						
	}
	
    
	
    bob();
    who($me);
    averager($scores);
    

?>
