<?php
$hostname = "localhost";
$user = "root";
$pass = "12345";
$dbname = "grocerydb";
// Create a connection
$conn = new mysqli($hostname, $user, $pass, $dbname);

// Check for connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Connected successfully
echo "Connected to MySQL successfully";
?>