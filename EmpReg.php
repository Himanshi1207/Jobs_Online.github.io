<?php
include("connection/connection.php");
error_reporting(0);
?>
<?php
$showAlert=false;
$showError=false;
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
  $showError = "password doesn't match";
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
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body {
  min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: linear-gradient(to right, #004d39 0%, #124143 100%);
}
.wrapper {
  position: relative;
  max-width: 430px;
  width: 100%;
  background: #fff;
  padding: 34px;
  border-radius: 6px;
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
}
.wrapper h2 {
  position: relative;
  font-size: 22px;
  font-weight: 600;
  color: #124143;
}

.wrapper form .input-box {
  height: 52px;
  margin: 18px 0;
}
form .input-box input {
  height: 100%;
  width: 100%;
  outline: none;
  padding: 0 15px;
  font-size: 17px;
  font-weight: 400;
  color: #333;
  border: 1.5px solid #c7bebe;
  border-bottom-width: 2.5px;
  border-radius: 6px;
  transition: all 0.3s ease;
}
.input-box input:focus,
.input-box input:valid {
  border-color: #124143;
}
form .policy {
  display: flex;
  align-items: center;
}
form h3 {
  color: #124143;
  font-size: 14px;
  font-weight: 500;
  margin-left: 10px;
}
.input-box.button input {
  color: #fff;
  letter-spacing: 1px;
  border: none;
  background: #124143;
  cursor: pointer;
}
.input-box.button input:hover {
  background: #124143;
}
form .text h3 {
  color: #333;
  width: 100%;
  text-align: center;
}
form .text h3 a {
  color: #124143;
  text-decoration: none;
}
form .text h3 a:hover {
  text-decoration: underline;
}
    .c-received {
  padding: 5px 10px;
  color: white;
  background-color: #124143;
  border-radius: 5px;
}
.redness{
  background:red;
}
</style>

  <div class="wrapper">
    <h2>REGISTER</h2>
    <form action="#">
      <?php
    if($showAlert){
    echo '<div class="c-received">
        <p class="c-receivepara">Registered successfully now you can Login </p>
      </div>';
    }
    if($showError){
      echo '<div class="c-received redness">
          <p class="c-receivepara">'.$showError.' </p>
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
