<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ngo_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO coordinators (username, password) VALUES ('$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New coordinator registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
