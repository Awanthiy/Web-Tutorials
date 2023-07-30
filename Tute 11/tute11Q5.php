<!DOCTYPE html>
<html>
<head>
  <title>Fruits Array</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Fruits Array</h1>

  <?php
    // Create an array called 'fruits'
    $fruits = array('Apple', 'Banana', 'Orange', 'Mango', 'Grapes');

    // Use foreach loop to print each element of the array
    foreach ($fruits as $fruit) {
      echo "<p>$fruit</p>";
    }
  ?>
</body>
</html>