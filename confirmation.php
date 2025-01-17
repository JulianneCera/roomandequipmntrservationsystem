<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<?php
// Retrieve submitted data
$name = htmlspecialchars($_POST['name']);
$studentNumber = htmlspecialchars($_POST['studentNumber']);
$program = htmlspecialchars($_POST['program']);
$yearSection = htmlspecialchars($_POST['yearSection']);
$contactNumber = htmlspecialchars($_POST['contactNumber']);
$birthdate = htmlspecialchars($_POST['birthdate']);
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Confirm Signup</title>
  <link rel="stylesheet" href="styles-signup.css"> <!-- Same CSS file -->
</head>
<body>
  <div class="container">
    <header>
      <h1>Confirmation</h1>
      <p>Please verify your information below.</p>
    </header>
  </div>

  <main>
    <div class="form-container">
      <form action="submit.php" method="POST">
        <p><strong>Full Name:</strong> <?php echo $name; ?></p>
        <input type="hidden" name="name" value="<?php echo $name; ?>">

        <p><strong>Student Number:</strong> <?php echo $studentNumber; ?></p>
        <input type="hidden" name="studentNumber" value="<?php echo $studentNumber; ?>">

        <p><strong>Program:</strong> <?php echo $program; ?></p>
        <input type="hidden" name="program" value="<?php echo $program; ?>">

        <p><strong>Year and Section:</strong> <?php echo $yearSection; ?></p>
        <input type="hidden" name="yearSection" value="<?php echo $yearSection; ?>">

        <p><strong>Contact Number:</strong> <?php echo $contactNumber; ?></p>
        <input type="hidden" name="contactNumber" value="<?php echo $contactNumber; ?>">

        <p><strong>Birthdate:</strong> <?php echo $birthdate; ?></p>
        <input type="hidden" name="birthdate" value="<?php echo $birthdate; ?>">

        <p><strong>Email:</strong> <?php echo $email; ?></p>
        <input type="hidden" name="email" value="<?php echo $email; ?>">

        <button type="submit">Confirm</button>
      </form>

      <button onclick="history.back()">Edit Information</button>
    </div>
  </main>
</body>
</html>
