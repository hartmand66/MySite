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
      echo "you were asked if you played chess and you said", $_POST['chess'];
	   $playschess = $_POST	['chess'];
	   echo "you were asked if you played chess and you said  ", $playschess;
	?>
		
         <br/>
         <a href="input3.php"><b>Return</b></a>

     </body>

</html>
