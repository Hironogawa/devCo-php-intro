<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  
  <link rel="stylesheet" href="../../assets/css/style.css">

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


    /*
      We import here the functioon from pageIntro and pass the PHP varibles as arguments to our function to build our first page entry here.
    */
    require "block/pageIntro.php";

    displayIntro($title, $headline, $body);

  ?>

<!--
  We can send with a regular HTML Form data to our PHP backend. 
-->
  <form action="result.php" method="post">
    <label for="vorname">Vorname: </label>
    <input type="text" name="vorname">

    <label for="nachname">Nachname: </label>
    <input type="text" name="nachname">

    <input type="submit" value="senden">
  </form>

</body>
</html>