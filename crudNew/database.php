<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sd_204";

// $servername = "192.168.0.17";
// $username = "jollyGwapa";
// $password = "lamiko";
// $dbname = "sd_204";

// $servername = "192.168.0.16";
// $username = "juanEnciso";
// $password = "lamiko";
// $dbname = "sd_204"; 

// $servername = "192.168.0.15";
// $username = "joyLami";
// $password = "lamiko";
// $dbname = "employee"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>