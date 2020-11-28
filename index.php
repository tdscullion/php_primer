<?php 
  $title = "Index";
  include "includes/header.php"
?>

  <!-- Basic html -->
  <h1>Hello HTML - PHP Primer</h1>

<?php
  // Printing to HTML using echo
    echo 'hello php';
    echo '<br>';
    echo 'second line';
    echo '<br>';
  


    $name = 'Tom';
    $age = 39;
    echo $name;
    echo '<h1>My name is: ' . $name . ' </h1>';
    echo '<h1>My age is: ' . $age . ' </h1>';
?>

  <button type="button" class="btn btn-primary">Click Me</button>
  <button type="button" class="btn btn-danger">Click Me</button>
  <button type="button" class="btn btn-warning">Click Me</button>

<?php include "includes/footer.php"; ?>