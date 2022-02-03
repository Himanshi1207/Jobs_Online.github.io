<?php

$servername = "localhost";
$username = "root";
$password = "himanshi@12";
$dbname = "jobPortal";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(! $conn)
    echo "Connection failed";

?>