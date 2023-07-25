<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Read</title>
  </head>

  <body>
        <h1>Read documents with PHP</h1>
        <?php
          /*
            With PHP we also can read files from our server.

            We firstly define which file to open with the fopen function. For that we pass the filename as the first argument to the fucntion.
            As second argument we define the read mode. You can read more about the fopen function and modes here: https://www.w3schools.com/php/func_filesystem_fopen.asp
          */
    
          $readFile = fopen("writtenByPhp.txt", "r") or die("Unable to open file!");

          /*
            The we can read the file with fread().
            The first argument is the file we opened and the second argument defines how many bytes it should read.
            We can get the full byte count of the file wih the filesize() function.
          */
          echo  "<pre>" . fread($readFile, filesize("writtenByPhp.txt")) . "</pre>";

          // Always close the file aftwerwards
          fclose($readFile);
        ?>
</body>

</html>