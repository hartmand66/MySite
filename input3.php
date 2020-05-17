<?php
// this is from video 47
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
		 <!--   <form action ="handler.php" method ="get"> line below could also have been "get" but that would made the variables visible in the url                          --> 
        <form action ="handler4.php" method ="post"> 
         Do you play chess? <br/>
         Yes<input type="radio" value = "yes" name = "chess">
         No<input type="radio" value = "no" name = "chess">  
         
         
         <input type = "submit" value="Submit"/>
        </form>
        
        <p>This is the about page</p>  
        
     </body>

</html>



