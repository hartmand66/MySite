<?php
// this is from video 47
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
      $food = $_POST['food'];
      
      foreach($food as $value ){
		  echo $value, "<br/>";
		  
		  }
      
      
	?>
		
         <br/>
         <a href="input4.php"><b>Return</b></a>

     </body>

</html>
