<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
  </head>

  <body>
        <?php
        echo '<h1>Welcome to your first PHP site</h1>';  

        /*
          PHP functions

          We start a function in PHP with "function" followed by the function name.
        */
        function viewVariable($parameterName) {
            echo '<p>What an' . $parameterName . 'to learn a little "backend" development as well.</p>';
        }
        /* PHP variable */
        $argumentVariable = 'opportunity';  

        /* PHP function call */
        viewVariable($argumentVariable);
   
 
    ?>

  </body>

</html>