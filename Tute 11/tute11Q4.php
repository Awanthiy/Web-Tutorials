<!DOCTYPE html>
<html>
<head>
  <title>Day of the Week</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Day of the Week</h1>
  <form method="post">
    <label for="dayNumber">Enter a number (1 to 7):</label>
    <input type="number" id="dayNumber" name="dayNumber" required min="1" max="7">
    <button type="submit" name="showDay">Show Day</button>
  </form>

  <?php
    if (isset($_POST['showDay'])) {
      $dayNumber = (int)$_POST['dayNumber'];
      $dayOfWeek = '';

      switch ($dayNumber) {
        case 1:
          $dayOfWeek = 'Monday';
          break;
        case 2:
          $dayOfWeek = 'Tuesday';
          break;
        case 3:
          $dayOfWeek = 'Wednesday';
          break;
        case 4:
          $dayOfWeek = 'Thursday';
          break;
        case 5:
          $dayOfWeek = 'Friday';
          break;
        case 6:
          $dayOfWeek = 'Saturday';
          break;
        case 7:
          $dayOfWeek = 'Sunday';
          break;
        default:
          $dayOfWeek = 'Invalid number';
          break;
      }
  ?>

  <p>Day of the Week: <?php echo $dayOfWeek; ?></p>
  <?php } ?>
</body>
</html>