<?php
$servername = "localhost"; 
$username = "root"; 
$password = "1234"; 
$dbname = "aic_eldoret_training_college_management"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname); // This line creates the connection

// Check connection and display error message if any
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
    //var_dump($conn);
}


?>
