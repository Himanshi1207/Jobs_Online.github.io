<?php
include("connection/connection.php");
error_reporting(0);
?>
<?php
$showAlert=false;
$compName = $_GET['compName'];
$compEmail = $_GET['compEmail'];
$compPass = $_GET['compPass'];
$confirmPass = $_GET['confirmPass'];
$compDesc = $_GET['compDesc'];
if($compPass === $confirmPass){
  $query = "INSERT INTO `empreg` VALUES ('$compName','$compEmail','$compDesc','$compPass','$confirmPass')";
  $result = mysqli_query($conn, $query);
}
else{
  echo "password doesn't match";
}
if($result){
  $showAlert=true;
}

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
  <style>
    .c-received {

  padding: 5px 10px;
  color: white;
  background-color: #124143;
  border-radius: 5px;
}
</style>

  <div class="wrapper">
    <h2>REGISTER</h2>
    <form action="#">
      <?php
    if($showAlert){
    echo '<div class="c-received">
        <p class="c-receivepara" padding-left: 5px;
        color: #3c4043;
        font-size: 20px;
        background-color: #f5c656;
        border-radius: 5px >Registered successfully now you can Login </p>
      </div>';
    }
    ?>
      <div class="input-box">
        <input type="text" name = "compName" placeholder="Enter company name" required>
      </div>
      <div class="input-box">
        <input type="email" name = "compEmail" placeholder="Enter company email" required>
      </div>
      <div class="input-box">
        <input type="text"  name = "compDesc"placeholder="Company description" required>
      </div>
      <div class="input-box">
        <input type="password" name = "compPass"  placeholder="Create password" required>
      </div>
      <div class="input-box">
        <input type="password" name = "confirmPass" placeholder="Confirm password" required>
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
