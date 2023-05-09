<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();

$email = $_POST['Email'];
$password = $_POST['password'];

//database connect

$conn = new mysqli('localhost', 'root', '', 'projectx');

if ($conn->connect_error) {
    die('connection failed: ' .$conn->connect_error);
} else {
    $sql = "SELECT * FROM projectx1 WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if ($result->num_rows > 0) {
        echo "Login Successful";
    } else {
        echo "Invalid Email or Password";
    }
    
    $conn->close();
}
?>


