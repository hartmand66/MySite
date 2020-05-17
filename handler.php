<?php
// this is from video 42 and 43
// suber global 
$name = $_POST['name'];// this can be $_GET or $_REQUEST as well as $_GET as super globals
$surname = $_POST['surname'];

?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
        <h2>Handling your data </h2> 
        <?php echo "Your name is $name  $surname! How are you? <br/>"; ?>
        
         <a href="form.php"><b>Return</b></a>

     </body>

</html>
