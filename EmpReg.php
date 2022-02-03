<?php
include("connection/connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/style_register.css">
</head>
<body>
  <div class="wrapper">
    <h2>REGISTER</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" placeholder="Enter company name" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Enter company email" required>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Company description" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="EmpLog.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
