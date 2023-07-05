<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
   
  </head>

  <body>
    <?php
        echo '<h1>Welcome to your first PHP site</h1>';  

        /*
          PHP functions
          We start a function in PHP with "function" followed by the function name.
        */
        function meineFunktion($parameterName) {
            echo '<p>What an ' . $parameterName . ' to learn a little "backend" development as well.</p>';
            
        }

        function addOne($number) {
          echo $number + 1;
        }

        function multiply($number) {
          echo 100 * $number;
        }
        multiply(3);

        echo "<br>";
        function countDouble($num) {
          return $num + 2;
        }
      
        $var = countDouble(2);
        

        echo "My new Number is: $var";
        echo "<br>";
        function countOneUp($num) {
          // ein for loop
          for($i=0; $i <= 10; $i++) {
            // ein if statement
            if($i < 10){
              // if kleiner als 10, zeige ein Komma an.
              echo $num + $i . ", ";
            } else {
              // else zeige kein Komma an.
              echo $num + $i; 
            }
           
          }
        }
        
        countOneUp(1);
        echo '<br>';
        countOneUp(10);






        /* PHP variable */
        $argumentVariable = 30; 
        $varZwei = "<b>Another Text</b>"; 

        
        meineFunktion('Neuer Text');

 
        
        
    
    ?>

  </body>

</html>