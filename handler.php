<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="styles.css">
    <link rel="apple-touch-icon" href="Favicon/apple-touch-icon.png">
    <link rel="icon" href="Favicon/favicon-16x16.png">
    <link rel="icon" href="Favicon/favicon-32x32.png">
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
