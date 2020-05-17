<?php
// this is from video 45
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
		 <!--   <form action ="handler.php" method ="get"> line below could also have been "get" but that would made the variables visible in the url                          --> 
        <form action ="handler2.php" method ="post"> 
          Do you play checkers?<br/>
          Yes<input type ="checkbox" value="Yes" name = "checkbox1"> <br/>
          No<input type ="checkbox" value="No" name = "checkbox2"> <br>
           
            <input type = "submit" value="Submit"/>
        </form>
        
        <p>This is the about page</p>  
        
     </body>

</html>



