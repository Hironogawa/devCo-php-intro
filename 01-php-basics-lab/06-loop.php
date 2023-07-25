<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Intro | Functions</title>
</head>

<body>
  <?php
    // To create an array we use the array() function in PHP.
    $variables = array("This", "is", "an", "array.");

    $emptyString = '';

    /*
      foreach loop

      With can go trough an array with a loop (foreach loop in this example)
      and pass the value from current loop to a variable.

    */
    foreach($variables as $value) {
      $emptyString .= $value . " ";
    }
    echo "<h1>$emptyString</h1>";
    

    // for loop
    for($i=0; $i <= 10; $i++) {
      // If statment inside the for loop to prevent the comma appearing on the last value.
      if($i < 10){
        // if kleiner als 10, zeige ein Komma an.
        echo $i . ", ";
      } else {
        // else zeige kein Komma an.
        echo $i; 
      }
      
    }


    echo '<br><br>';


    /*
      The while loop executes the command until the condition is false,
      in our case it will display the sentence The number is: ... with a number that gets incremented on each loop pass.
    */
    $x = 1;

    while($x <= 5) {
      echo "The current number is: $x <br><br>";
      $x++;
    }
  ?>
</body>
</html>