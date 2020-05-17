<?php
// this is from video 42 and 43
// suber global 
$username = $_POST['username'];      // this can be $_GET or $_REQUEST as well as $_GET as super globals
$password = $_POST['password'];
$data = $_POST['data'];

?>
<!DOCTYPE html>
<html>
     <head>
          <title>Woking with fom values</title>

     </head>
     <body>
        <h2>Handling your data </h2> 
        <?php echo "Your name is $username  $password ! How are you? <br/>"; 
              echo $data;        
         ?>
         <br/>
         <a href="login.php"><b>Return</b></a>

     </body>

</html>
