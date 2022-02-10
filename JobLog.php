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
  <style>
    @import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap");
    * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
html,
body {
  display: grid;
  height: 100vh;
  width: 100%;
  place-items: center;
  background: linear-gradient(to right, #004d39 0%, #124143 100%);
}

.container {
  background: #fff;
  max-width: 350px;
  width: 100%;
  padding: 25px 30px;
  border-radius: 5px;
  box-shadow: 0 10px 10px rgba(0, 0, 0, 0.15);
}
.container form .title {
  color:#124143;
  font-size: 30px;
  font-weight: 600;
  margin: 20px 0 10px 0;
  position: relative;
}
.container form .input-box {
  width: 100%;
  height: 45px;
  margin-bottom: 25px;
  position: relative;
}
.container form .input-box input {
  width: 100%;
  height: 100%;
  outline: none;
  font-size: 16px;
  border: none;
}
.container form .underline::before {
  content: "";
  position: absolute;
  height: 2px;
  width: 100%;
  background: #ccc;
  left: 0;
  bottom: 0;
}

.container form .button {
  margin: 40px 0 20px 0;
}
.container .input-box input[type="submit"] {
  padding:12px;
  background: linear-gradient(to right, #004d39 0%, #124143 100%);
  font-size: 17px;
  color: #fff;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
.container .option {
  font-size: 14px;
  text-align: center;
}
.container .facebook a,
.container .twitter a {
  display: block;
  height: 45px;
  width: 100%;
  font-size: 15px;
  text-decoration: none;
  padding-left: 20px;
  line-height: 45px;
  color: #fff;
  border-radius: 5px;
  transition: all 0.3s ease;
}

.container .facebook i,
.container .twitter i {
  padding-right: 12px;
  font-size: 20px;
}
.container .twitter a {
  background: linear-gradient(to right, #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .twitter a:hover {
  background: linear-gradient(to left, #00acee 0%, #1abeff 100%);
  margin: 20px 0 15px 0;
}
.container .facebook a {
  background: linear-gradient(to right, #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}
.container .facebook a:hover {
  background: linear-gradient(to left, #3b5998 0%, #476bb8 100%);
  margin: 20px 0 50px 0;
}
    </style>
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
      <a href="home.php" class="input-box button">
        <input type="submit" name="" value="Login">
</a>
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

$query = "Select * from jobreg where jobEmail='$email' AND jobPass='$pass'";
$result = mysqli_query($conn, $query);

// if($result)
//     echo "Logged in successfully!";
// else
//     echo "Please try again later!";
?>