<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Variable</title>
  </head>

  <body>
    <?php
        echo '<h1>Welcome to your third PHP site</h1>';


        /*
          A PHP variable starts with a "dollar sign" $myVariableName. Variables are casesensetive, write it in camelcase.
        */

        $myVariable = 'This';

        $midFrag = 'text is saved in a';
        $lastFrag = 'PHP variable.';

        $startTag = '<p>';
        $endTag = '</p>';

        /*
          Like for example JavaScript we can concatinate strings to create dynamic text.
          In PHP we use the dot symbol to chain our word fragments together.
        */
        echo '<h2>'.$myVariable.'</h2>';

        echo $startTag . $myVariable  . " " .  $midFrag  . " " .  $lastFrag . $endTag;
    ?>

  </body>

</html>