<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
  </head>

  <body>
        <h1>Write to Document</h1> 
        <?php
          $writeFile = fopen("writtenByPhp.txt", "a") or die("Unable to open file!");
          $txt = "My First Line\n";
          fwrite($writeFile, $txt);
          $txt = "My Second Line\n";
          fwrite($writeFile, $txt);
          fclose($writeFile);
        ?>

</body>

</html>