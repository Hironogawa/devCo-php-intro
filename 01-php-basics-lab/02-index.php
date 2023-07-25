<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | PHP tags</title>
  </head>

  <body>
    <!--
      We neeed to declare our script inside the PHP open and closing tags.
      Remember like the <script> Tag in JavaScript.
    -->
    <?php
      /*
        echo is like document.write() in JavaScript.
      */
      echo '<h1>Welcome to your first PHP site</h1>'; // PHP needs a semicolon on every script end or it will throw an error.

      /*
        Without echo, nothing will be displayed in the browser and PHP will throw an error.
      */
      '<h1>I will not display without echo!</h1>';

    ?>
    <!-- We can write regular HTML in our PHP files (outside of the PHP tags-->
    <p>This text is saved in a PHP variable</p>

    <?php echo '<p>Another line of text' ?>
  </body>
</html>