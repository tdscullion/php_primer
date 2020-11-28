<?php 
  $title = "Function";
  include "includes/header.php"
?>
  <h1>Functions</h1>
  <?php

      //Defining a function
      function writeMessage() {
        echo "You smell like cheese and look like a mouse. </br>";
      }

      //Call a function
      writeMessage();
      writeMessage();
     
      //Function with parameters
      function addNumbers($num1, $num2) {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br>";
      }

      addNumbers(7, 8);
      addNumbers(57872875, 843276);

      $num = 500;

      function changeNum (&$num) {
        $num = $num + 10;
      }

      function returnProduct($num1, $num2) {
        return $num1 * $num2;
      }

      
      echo $num . '<br>';
      changeNum($num);
      echo $num . '<br>';
  
      $returnValue = returnProduct(12, 30);
      echo $returnValue . '<br>';

  ?>

<?php include "includes/footer.php"; ?>