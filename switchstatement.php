<?php 
  $title = "Switch Statement";
  include "includes/header.php"
?>
  <h1>Switch Statement</h1>
  <?php
    $grade = 'D';

    switch ($grade) {
      case 'A': 
        echo '<h2 style = "color: teal">YOU ARE A SUPERSTAR</h2>';
        break;
      case 'B':
        echo '<h2 style = "color: salmon">YOU ARE A GOOD!</h2>';
        break;
      case 'C':
        echo '<h2 style = "color: blue">YOU PASSED</h2>';
        break;
      default:
      echo '<h2 style = "color: crimson">YOU FAILED</h2>';
      break;
    }
  ?>

<?php include "includes/footer.php"; ?>