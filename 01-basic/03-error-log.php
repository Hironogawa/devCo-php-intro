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
        /*
          To display errors in our development environment, we need to activate it in php.ini.

          !!! Do not activate it on your production server (live server)

          Open your Terminal/command line interface

          We need to edit that file, usually we find it under ...
          Linux: /etc/php/8.2/cli/php.in       Info: The version number can be differend depending on the installed PHP version
        */

        error_log('My Error output');



        /* 
          Log values of a variable example:
 
          $variableName = 'Text inside the Variable';
          error_log($variableName);
        */

    ?>

  </body>

</html>