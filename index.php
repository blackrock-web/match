<?php
$servername = "localhost";
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$database = "test2"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Close connection
$conn->close();
?>

