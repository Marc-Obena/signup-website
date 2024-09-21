<?php
// Database connection variables
$servername = "localhost";  // Usually "localhost" when using XAMPP, WAMP, or local servers
$username = "root";         // Default username for MySQL in XAMPP/WAMP
$password = "";             // Default password is empty (leave as "" if using XAMPP/WAMP)
$dbname = "signup_db";      // The name of your database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully to the database!";
}
?>
