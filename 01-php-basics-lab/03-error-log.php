<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Error Logs</title>
  </head>

  <body>
    <?php
      echo '<h1>My first PHP error';
    ?>
    <?php

        $varialeX = 'Neuer Text';

        echo 'I am an error';
        error_log($varialeX);

        $varialeX .= ', zweiter Teil.';
        
        
        error_log($varialeX);
    ?>

  </body>

</html>