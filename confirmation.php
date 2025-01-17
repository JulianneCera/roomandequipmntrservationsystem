<?php
// Start a session to store form data
session_start();

// Save form data from POST request to session variables
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['studentNumber'] = $_POST['studentNumber'];
  $_SESSION['program'] = $_POST['program'];
  $_SESSION['yearSection'] = $_POST['yearSection'];
  $_SESSION['contactNumber'] = $_POST['contactNumber'];
  $_SESSION['birthdate'] = $_POST['birthdate'];
  $_SESSION['email'] = $_POST['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Sign Up</title>
</head>
<body>
  <h1>Confirm Your Sign Up</h1>
  <p>Please review your details before confirming:</p>
  <ul>
    <li><strong>Full Name:</strong> <?php echo htmlspecialchars($_SESSION['name']); ?></li>
    <li><strong>Student Number:</strong> <?php echo htmlspecialchars($_SESSION['studentNumber']); ?></li>
    <li><strong>Program:</strong> <?php echo htmlspecialchars($_SESSION['program']); ?></li>
    <li><strong>Year and Section:</strong> <?php echo htmlspecialchars($_SESSION['yearSection']); ?></li>
    <li><strong>Contact Number:</strong> <?php echo htmlspecialchars($_SESSION['contactNumber']); ?></li>
    <li><strong>Birthdate:</strong> <?php echo htmlspecialchars($_SESSION['birthdate']); ?></li>
    <li><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['email']); ?></li>
  </ul>
  <form action="finalize.php" method="POST">
    <button type="submit">Confirm Sign Up</button>
  </form>
  <button onclick="window.history.back()">Go Back</button>
</body>
</html>
