<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>PHP Intro | From Result Page</title>
</head>
<body>
  <?php

    /*
      Create some text-variables

    - titleText
    - headlineText
    - bodyText

    */

    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];



    $title = "Hello $vorname";
    $headline = "Nice to meet you, we haven't stored you data.";
    $body = "The data is temporarly stored and will be deleted if you close the window";

    require "block/pageIntro.php";

    displayIntro($title, $headline, $body);

  ?>

</body>
</html>