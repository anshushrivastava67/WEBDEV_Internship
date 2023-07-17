<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "login_register";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Login user
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["l_user"];
    $password = $_POST["l_pass"];

    // Check if the provided credentials exist in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $message = "Login Successfull!!..";
        echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
    } else {
        $message = "Invalid Username or password!!..";
        echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
    }
}

$conn->close();
?>

