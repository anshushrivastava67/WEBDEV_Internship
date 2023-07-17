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

// Register user
if (isset($_POST["r_sub"])) {
    $username = $_POST["r_user"];
    $password = $_POST["r_pass"];
    $name=$_POST["r_name"];
    // Insert data into the database
    $sql = "INSERT INTO users (name,username, password) VALUES ('$name','$username', '$password')";


    if ($conn->query($sql) === TRUE) {
        $message = "Registration successful!";
        echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('$message');window.location.href = 'index.php';</script>";
    }
}
else{
    echo "Failed";
}

$conn->close();
?>
