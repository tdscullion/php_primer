<?php 
  $title = "Date and Time";
  include "includes/header.php"
?>
  <h1>Date and Time Manipulation</h1>

  <?php
  $datenow = getdate();
    echo "Todays date: <br>";
    echo $datenow['mday'] . '<br>';
    echo $datenow['mon'] . '<br>';
    echo $datenow['year'] . '<br>';
    
    
    echo "Todays date: " . $datenow['mday'] . '/' .  $datenow['mon'] . '/' . $datenow['year'] . '<br>';

    echo time();
  ?>

<?php include "includes/footer.php"; ?>