<?php
// this is from video 45
// super global 


?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
        <h2>Handling your data </h2> 
    <?php
      echo "You selected : <br/>";
      $food = $_POST['food'];
      
      foreach ($food as $key => $value){
		  echo $value.'<br/>';		  
		  
		  }
      
		
	?>
		
         <br/>
         <a href="input2.php"><b>Return</b></a>

     </body>

</html>
