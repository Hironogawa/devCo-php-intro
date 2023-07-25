<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
  </head>

  <body>
        <h1>Write to a document with PHP</h1> 
        <?php
          /*
            With PHP we can also manipulate files on our "server". In this example we write text to a file.


            To write to a file, we need to open it first with the fopen() function.
     
            The fopen() function needs two arguments:
            1. The file to open
            2. The mode to open the file in ("a" stands for append)

            There is:
            "r" - Read only. Starts at the beginning of the file
            "w" - Write only. Opens and truncates the file; or creates a new file if it doesn't exist. Place file pointer at the beginning of the file
            "a" - Write only. Opens and writes to the end of the file or creates a new file if it doesn't exist

            You can finde more modes here on W3Schools: https://www.w3schools.com/php/func_filesystem_fopen.asp
           
            The or die here is to prevent misbehaving if an error occurs.

          */
          $writeFile = fopen("writtenByPhp.txt", "a") or die("Unable to open file!");

          // Here we store the text to a variable and pass it as an argument to the fwrite function to write it to the file
          $txt = "My First Line\n";
          /*

          Than we can use the fwrite() function to write to the file.

          The fwrite() function needs two arguments:
          1. The file to write to
          2. The text to write to the file
          
          */

          fwrite($writeFile, $txt);

          // Here we append another line to our file
          $txt = "My Second Line\n";
          fwrite($writeFile, $txt);

          // Always close the file afterwards with fclose()
          fclose($writeFile);

        ?>

        <?php echo "<p>PHP wrote a new file for you, take a look inside your current folder.</p>"; ?>
</body>

</html>