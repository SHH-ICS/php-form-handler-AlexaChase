<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <title>Hello, World! Form</title>
  </head>

  <body>
    
    <?php
    $userName = "";
    if ( isset( $_POST['userName'] ) ){
      $userName = $_POST['userName'];
    }
    echo "<h1>Welcome ".$userName."!</h1>\n";
    ?>
    
  </body>
  
</html>
