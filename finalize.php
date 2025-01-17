<?php
// Start session
session_start();

// Here you could add code to save the data in a database

// Clear session after final confirmation
session_unset();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up Complete</title>
</head>
<body>
  <h1>Sign Up Complete!</h1>
  <p>Your sign-up has been successfully confirmed. Thank you!</p>
</body>
</html>
