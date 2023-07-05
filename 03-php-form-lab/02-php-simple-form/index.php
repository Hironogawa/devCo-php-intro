<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <title>PHP Intro | Forms in PHP</title>
</head>
<body>
  <?php

    /*
      Create some text-variables

    - titleText
    - headlineText
    - bodyText

    */

    $title = "Welcome to our PHP Form Building LAB";
    $headline = "This site is build with PHP, we use it to parse the HTML input values to our backend and process for new conent.";
    $body = "We learn how to pass the content to our server and display it in the browser, later we maybe use the session storage to pressist the data.";

    require "block/pageIntro.php";

    displayIntro($title, $headline, $body);

  ?>
  <form action="result.php" method="post">
    <label for="vorname">Vorname: </label>
    <input type="text" name="vorname">

    <label for="nachname">Nachname: </label>
    <input type="text" name="nachname">

    <input type="submit" value="senden">
  </form>

</body>
</html>