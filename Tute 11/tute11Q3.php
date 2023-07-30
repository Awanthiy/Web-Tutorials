<!DOCTYPE html>
<html>
<head>
  <title>Electricity Bill Calculator</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      text-align: center;
      margin: 20px;
    }
  </style>
</head>
<body>
  <h1>Electricity Bill Calculator</h1>
  <form method="post">
    <label for="units">Enter the number of units consumed:</label>
    <input type="number" id="units" name="units" required>
    <button type="submit" name="calculate">Calculate Bill</button>
  </form>

  <?php
    if (isset($_POST['calculate'])) {
      $units = (int)$_POST['units'];
      $totalBill = 0;

      if ($units <= 50) {
        $totalBill = $units * 3.50;
      } elseif ($units <= 100) {
        $totalBill = 50 * 3.50 + ($units - 50) * 4.00;
      } elseif ($units <= 150) {
        $totalBill = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
      } else {
        $totalBill = 50 * 3.50 + 50 * 4.00 + 50 * 5.20 + ($units - 150) * 6.50;
      }
  ?>

  <p>Total Electricity Bill: Rs. <?php echo number_format($totalBill, 2); ?></p>
  <?php } ?>
</body>
</html>