<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Variable</title>
  </head>

  <body>
    <?php
        /*
          A PHP variable starts with a "dollar sign" $myVariableName. Variables are casesensetive, write it in camelcase.
        */

        $firstFragment = 'This';

        $secondFragment = 'text is saved in ';
        $lastFragment = 'PHP variables.';

        $startTag = '<p>';
        $endTag = '</p>';

        /*
          Like for example JavaScript we can concatinate strings to create dynamic text.
          In PHP we use the dot symbol to chain our word fragments together.
        */
        echo '<h1>Welcome to '.$lastFragment.'</h1>';

        echo $startTag . $firstFragment . " " .  $secondFragment  . " " .  $lastFragment . $endTag;
    ?>

  </body>

</html>