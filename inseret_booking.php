<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Drop the table if it already exists
$conn->query("DROP TABLE IF EXISTS bookings");

// SQL to create table
$sql = "CREATE TABLE bookings (
  id INT(11) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) NOT NULL,
  date DATE NOT NULL,
  hall VARCHAR(100) NOT NULL,
  timing TIME NOT NULL,
  duration INT(11) NOT NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'bookings' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection
$conn->close();
?>
