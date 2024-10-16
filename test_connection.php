<?php
$servername = "localhost";
$username = "root";
$password = "1234"; // Leave empty if no password
$dbname = "Database: aic_eldoret_training_college_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
