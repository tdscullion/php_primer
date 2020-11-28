<?php 
  $title = "String Manipulation";
  include "includes/header.php"
?>

<h1>PHP String Manipulation</h1>
  <?php 
  // String Concatination
    $phrase1 = "Student who came late";
    $phrase2 = "in class, stand with rock";
    $name = "tom scullion";
    $uppercase = "HELLO I WAS UPPERCASE";
    echo $phrase1 . " " . $phrase2;
    echo '<br>';
    echo '<hr>';
  // String Transformation
    echo 'Uppercase first letter: ' . ucfirst($name) . '<br>';
    echo 'Uppercase first letter for each word: ' . ucwords($name) . '<br>';
    echo 'Uppercase: ' . strtoupper($name) . '<br>'; 
    echo 'Lowercase: ' . strtolower($uppercase) . '<br>'; 
    echo '<hr>';
    echo 'Repeat String: ' . str_repeat('a', 10) . '<br>'; 
    echo 'Repeat String: ' . strtoupper(str_repeat('a', 10)) . '<br>'; 
    echo 'Get a substring: ' . substr($name, 4 ) . '<br>';
    echo  "Get position of string: " . strpos($name, 'll') . "<br>";
    echo 'Find the length of a string: ' . strlen($name) . "<br>";
    echo 'Without trim: ' . "A" . " B C D " . "E" . '<br/>'; 
    echo 'Trim spaces on both sides: '. "A" . trim(" B C D "). "E" . '<br/>';
    echo 'Trim spaces on left: '. "A" . ltrim(" B C D "). "E" . '<br/>';
    echo 'Trim spaces on right: '. "A" . rtrim(" B C D "). "E" . '<br/>';

    echo "Replace string with another: " . str_replace("stand", "sit", $phrase2) . '<br>';
    ?>

<?php include "includes/footer.php"; ?>