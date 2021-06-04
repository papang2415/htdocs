<?php

session_start();

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'tutorial';

$_SESSIION['user'] = [];

$conn =  new mysqli($host, $username, $password, $database);

if (!$conn->connect_errno) {
    echo "<center><h1>Please Log In</h1></center>";
} else {
    header('location: ./pages/error.php');
}
 

//register
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "INSERT INTO users(username,email,password)
     VALUES ('$username','$email','$password')";

    if ($conn->query($sql)) {
        echo "Data Inserted Succesfully";
    } else {
        echo $conn->error;
        // header('location: ./pages/error.php');
    }

}

//log in

if(isset($_POST['login'])){
        $email  =$_POST['email'];
        $password   = $_POST['password'];

        $sql = "SELECT *FROM users WHERE email = '$email' AND password = '$password'";

    $result = $conn->query($sql);
    if($result->num_rows >0){
        $user = $result->fetch_assoc();
        redirect("./../pages/dashboard.php?id=".$user['id']);
    }else{
        // redirectError('./error.php');
        echo $conn->error;
    }
}

function redirectError(String $location){
    return header("location: $location");
}

function redirect(String $location){
    return header("location: $location");
}