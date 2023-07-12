<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Intro | Functions</title>
   
  </head>

  <body>
  <h1>Intro to PHP functions</h1>

    <?php
        /*
          PHP functions
          We start a function in PHP with "function" followed by the function name.
        */
        function meineFunktion($parameterName) {
            echo '<p>What an ' . $parameterName . ' to learn a little "backend" development as well.</p>';
            
        }


        //PHP variable
        $myWord = "<b>Opportunity</b>"; 

        // function call 
        meineFunktion($myWord);



        
        function addOne($number) {
          // This function displays the given number plus one.
          echo $number + 1;
        }

        function addOneReturn($number){
          /* 
            This function returns the given number, incremented by one.
            Good for saving it in a variable or work with the returned value.
          */
          return $number + 1;

        }

        function multiplyByHundred($number) {
          // Multiplies the number by 100 and display the value in the broweser.
          echo 100 * $number;
        }

        echo '<p>Output of the multiplyByHundred function: ';
        multiplyByHundred(3);

        echo "<br>";


        function countUpDouble($num) {
          // increment the given number by to and returns it
          return $num + 2;
        }
      
        $var = countUpDouble(2);
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
    
    ?>

  </body>

</html>