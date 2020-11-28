<?php 
  $title = "If Statement";
  include "includes/header.php"
?>
<h1>If Statement</h1>
  <?php 
     // An If statement that will carry out an action based on the value of the variable passed

     echo '<h2>If Statement</h2>';

      $grade = 50;

      if ($grade >= 50) {
        echo '<h3 style = "color: teal">You have passed</h3>';
      } else {
        echo '<h3 style = "color: crimson">You have failed</h3>';
      }

      $grade = 'B';
      if ($grade == 'A') {
        echo '<h2 style = "color: teal">YOU ARE A SUPERSTAR</h2>';
      } else if ($grade == 'B') {
        echo '<h2 style = "color: gold">YOU DID WELL!</h2>';
      } else {
        echo '<h2 style = "color: crimson">YOU HAVE FAILED</h2>';
      }
  ?>

<?php include "includes/footer.php"; ?>