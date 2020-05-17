<?php
// this is from video 42 and 43
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
		 <!--   <form action ="handler.php" method ="get"> line below could also have been "get" but that would made the variables visible in the url                          --> 
        <form action ="handler.php" method ="post"> 
            name:<input type = "text" name = "name" />  "  "
            surname:<input type = "text" name = "surname" />  
            
            <input type = "submit" value="write"/>
        </form>
        <p>This is the about page</p>  
        
     </body>

</html>



