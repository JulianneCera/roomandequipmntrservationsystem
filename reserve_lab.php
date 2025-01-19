<?php
// Get the selected lab from the query parameter
$lab_name = isset($_GET['lab']) ? htmlspecialchars($_GET['lab']) : 'Unknown Laboratory';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reserve <?php echo $lab_name; ?></title>
  <link rel="stylesheet" href="styles-laboratories.css">
</head>
<body>
  <div class="container">
    <h1>Reserve <?php echo $lab_name; ?></h1>
    <form action="submit_reservation.php" method="post">
      <input type="hidden" name="lab_name" value="<?php echo $lab_name; ?>">
      <label for="name">Your Name:</label>
      <input type="text" id="name" name="name" required><br><br>
      <label for="date">Reservation Date:</label>
      <input type="date" id="date" name="date" required><br><br>
      <label for="time">Reservation Time:</label>
      <input type="time" id="time" name="time" required><br><br>
      <button type="submit">Submit Reservation</button>
    </form>
    <button onclick="history.back()">Back</button>
  </div>
</body>
</html>
