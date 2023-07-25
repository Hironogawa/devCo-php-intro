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
        Ths line below will throw an error, do you know why? Read the error in your broweser or log.
      */
      echo '<h1>My first PHP error' . '</h1>';
    ?>

    <?php
        /*
          We can generate custom errors, for that PHP provides the error_log() function.
        */
        $d = "\n \n ----------------- My Error Log ----------------- \n \n";

        // We can pass a string to the error_log() function.
        $varialeX = 'This is my first error log.';
        error_log($d.$varialeX.$d);

        $varialeX .= 'Another custom error log.';
        error_log($d.$varialeX.$d);
    ?>

  </body>

</html>