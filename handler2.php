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
        if(isset($_POST["checkbox1"])){
	         $yes = $_POST['checkbox1']; 
	         echo "$yes awesome you enjoy checkers<br/>";
		 }
        elseif (isset($_POST["checkbox2"])){
		     $no = $_POST['checkbox2'];
		     echo "$no you don't like to play checkers <br/>";
		}
		
	?>
		
         <br/>
         <a href="input.php"><b>Return</b></a>

     </body>

</html>
