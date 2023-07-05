<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Read</title>
  </head>

  <body>
        <h1>Read Document</h1>
        <?php
          $readFile = fopen("writtenByPhp.txt", "r") or die("Unable to open file!");
          echo  "<pre>" . fread($readFile, filesize("writtenByPhp.txt")) . "</pre>";
          fclose($readFile);
        ?>
</body>

</html>