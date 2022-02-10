<?php
include("connection/connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-jobatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <link rel="stylesheet" href="css/style_register.css">
</head>
<body>
  <div class="wrapper">
    <h2>REGISTER</h2>
    <form action="#">
      <div class="input-box">
        <input type="text" name="jobName" placeholder="Enter your name" required>
      </div>
      <div class="input-box">
        <input type="email" name="jobEmail" placeholder="Enter your email" required>
      </div>
      <div class="input-box">
        <input type="password" name="jobPass" placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name="confirmPass"  placeholder="Confirm password" required>
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="Submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="JobLog.php">Login now</a></h3>
      </div>
    </form>
  </div>
</body>
</html>
<?php
$jobName = $_GET['jobName'];
$jobEmail = $_GET['jobEmail'];
$jobPass = $_GET['jobPass'];
$confirmPass = $_GET['confirmPass'];
// $jobDesc = $_GET['jobDesc'];
if($jobPass === $confirmPass){
  $query = "INSERT INTO `jobreg` VALUES ('$jobName','$jobEmail','$jobPass','$confirmPass')";
  $result = mysqli_query($conn, $query);
}
else{
  echo "password doesn't match";
}
if($result)
    echo "Logged in successfully!";
else
    echo "Please try again later!";
?>