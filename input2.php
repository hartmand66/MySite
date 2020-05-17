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
        <form action ="handler3.php" method ="post"> 
          What are your favorite foods?<br/><br/>
          Pizza<input type ="checkbox" value="Pizza" name = "food[]"> <br/>
          Spaghetti<input type ="checkbox" value="Spaghetti" name = "food[]"> <br>
          Steak<input type ="checkbox" value="Steak" name = "food[]"> <br>
          Chicken<input type ="checkbox" value="Chicken" name = "food[]"> <br>
          Burger<input type ="checkbox" value="Burger" name = "food[]"> <br> 
           
            <input type = "submit" value="Submit"/>
        </form>
        
        <p>This is the about page</p>  
        
     </body>

</html>



