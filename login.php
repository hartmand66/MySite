<?php
// this is from video 42 and 43 and 44
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
		 <!--   <form action ="handler.php" method ="get"> line below could also have been "get" but that would made the variables visible in the url                          --> 
        <form action ="verify.php" method ="post"> 
            username:<input type = "text" name = "username" /> <br/>
            password:<input type = "password" name = "password" />  
            <br/>
            <textarea name='data'> 
            </textarea><br/>
            <input type = "submit" value="Login"/>
        </form>
        <p>This is the about page</p>  
        
     </body>

</html>



