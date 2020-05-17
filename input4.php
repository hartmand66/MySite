<?php
// this is from video 48 Input from select lists
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
		 <!--   <form action ="handler.php" method ="get"> line below could also have been "get" but that would made the variables visible in the url                          --> 
        <form action ="handler5.php" method ="post"> 
         What are your favorite foods?<br/>
         <select multiple name ="food[]">
         <option value="Steak">Steak</option>
         <option value="Salad">Salad</option>
         <option value="Macaroni">Macaroni</option>
         <option value = "Pizza">Pizza</option>
         </select>
         <br/><br/>
         
         <input type = "submit" value="Submit"/>
        </form>
        
        <p>This is the about page</p>  
        
     </body>

</html>



