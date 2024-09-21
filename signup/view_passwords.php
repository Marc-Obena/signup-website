<?php
include 'connect.php';  // Include your database connection script

// Query to fetch data from the users table
$sql = "SELECT username, password FROM users";
$result = $conn->query($sql);

// Check if any records exist
if ($result->num_rows > 0) {
    // Output data for each row
    echo "<table border='1'>
            <tr>
                <th>Username</th>
                <th>Hashed Password</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row['username'] . "</td>
                <td>" . $row['password'] . "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}

// Close the database connection
$conn->close();
?>
