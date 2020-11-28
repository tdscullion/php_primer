<?php 
  $title = "Array";
  include "includes/header.php"
?>
  <h1>Arrays</h1>
  <?php 
  // a variable
    $num = 3;
  // an array
    // Only one datatype
    $nums = [1,20,63,48,55,26,75,78,96,10];
    // You can access the value in a subscript of the array using the index
    echo $nums[5];

    echo "<p>$nums[9]</p>";

    $size = count($nums);
    echo "<p>Array nums is size: $size </p>";

    for ($count = 0; $count < $size; $count++){
      echo "<p>$nums[$count]</p>";
      
    }
  ?>
  
<?php include "includes/footer.php"; ?>