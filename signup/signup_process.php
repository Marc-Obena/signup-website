<?php
include 'connect.php'; // Include the database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $full_name = $_POST['fullName'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password for security
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];

    // Insert data into the database
    $sql = "INSERT INTO users (full_name, email, username, password, phone, dob) 
            VALUES ('$full_name', '$email', '$username', '$password', '$phone', '$dob')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign-up successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
