<?php 
  $title = "While/Do While Loop";
  include "includes/header.php"
?>
  <h1>While Loop</h1>
  <?php
  // Pre condition loop
    $grade = 0;
    while($grade < 10) {
      echo '<p>I am less than 10</p>';
      $grade++;
    }

    echo '<p>Exit loop</p>';
  ?>

  <h1>Do-While Loop</h1>
  <?php
  // Post condition loop
    $grade = 0;
    do{
      echo '<p>I am do-while looping</p>';
      $grade++;
    } while ($grade < 10);
    echo '<p>Exit loop</p>';
  ?>

<?php include "includes/footer.php"; ?>