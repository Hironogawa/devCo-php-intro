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




        function createNewLine() {
          // This function creates a new line.
          echo '<br><br>';
        }




        function addOne($number) {
          // This function displays the given number plus one.
          echo $number + 1;
        }

        createNewLine();
      
        
        function countUpDouble($num) {
          /*
            This function returns the given number plus two.
            We use the return keyword to return the value.
            we can store the returned value in a variable or use it directly in our code.
          */

          return $num + 2;
        }
      
        $var = countUpDouble(2);
  
        echo "My new Number is: $var";
        createNewLine();

        function multiplyByHundred($number) {
          // Multiplies the number by 100 and display the value in the broweser.
          return 100 * $number;
        }

        echo 'Output of the multiplyByHundred function: ';
        echo multiplyByHundred(3);

        createNewLine();



        function countOneUp($num) {

          // sets the max count for the for loop.
          $maxCount = 9;

          echo 'Counting from ' . $num . ' to ' . ($num + $maxCount) . ': ';
          // for loop to count from the given number to the maxCount defined above.
          for($i=0; $i <= $maxCount; $i++) {
            // if statement to check if the current number is smaller than 10.
            if($i < $maxCount){
              // if true, show a comma after the number.
              echo $num + $i . ", ";
            } else {
              // else don't show a comma after the number.
              echo $num + $i; 
            }
           
          }
        }
        
        countOneUp(1);
    
    ?>

  </body>

</html>