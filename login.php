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
  <title>Document</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
  <div class="container">
    <form action="#">
      <div class="title">Login</div>
      <div class="input-box underline">
        <input type="text" name="email" placeholder="Enter Your Email" required>
        <div class="underline"></div>
      </div>
      <div class="input-box">
        <input type="password" name="password" placeholder="Enter Your Password" required>
        <div class="underline"></div>
      </div>
      <div class="input-box button">
        <input type="submit" name="" value="Continue">
      </div>
    </form>
      <div class="option">or Connect With Social Media</div>
      <div class="twitter">
        <a href="#"><i class="fab fa-twitter"></i>Sign in With Twitter</a>
      </div>
      <div class="facebook">
        <a href="#"><i class="fab fa-facebook-f"></i>Sign in With Facebook</a>
      </div>
  </div>
</body>
</html>

<?php
$email = $_GET['email'];
$pass = $_GET['password'];

$query = "INSERT INTO loginjob VALUES ('$email', '$pass')";
$result = mysqli_query($conn, $query);

if($result)
    echo "Logged in successfully!";
else
    echo "Please try again later!";
?>