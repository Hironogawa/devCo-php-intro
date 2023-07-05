<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
  </head>

  <body>
        <?php
      $variables = array("This", "is", "an", "array.");

      $emptyString = '';

      // foreach loop

      foreach($variables as $value) {
        $emptyString .= $value . " ";
      }
      echo "<h1>$emptyString</h1>";
      




      $num = 1;
      // for loop
      for($i=1; $i <= 10; $i++) {
        // ein if statement
        if($i < 10){
          // if kleiner als 10, zeige ein Komma an.
          echo $num + $i . ", ";
        } else {
          // else zeige kein Komma an.
          echo $num + $i; 
        }
       
      }
      echo '<br>';
      // while loop
      $x = 1;

      while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
      }
      
    ?>

  </body>

</html>