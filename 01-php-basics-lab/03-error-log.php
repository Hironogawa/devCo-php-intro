<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Error Logs</title>
  </head>

  <body>
    <?php
      /*
        Ths line below will trow an error, do you know why? Read the error in your broweser or log.
      */
      echo '<h1>My first PHP error';
    ?>

    <?php
        /*
          We can generate custom errors, for that PHP provides the error_log() function.
        */
        $varialeX = 'Neuer Text';

        echo 'I am an error';
        error_log($varialeX);

        $varialeX .= ', zweiter Teil.';
        
        error_log($varialeX);
    ?>

  </body>

</html>