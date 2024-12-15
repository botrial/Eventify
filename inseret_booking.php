<?php

var_dump($_POST);
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br>";
    

// Drop the table if it already exists
$conn->query("DROP TABLE IF EXISTS bookings");

// SQL to create table
$sql = "CREATE TABLE bookings (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    userID int(6) NOT NULL,  
    name VARCHAR(255) NOT NULL,
    date DATE NOT NULL,
    hall VARCHAR(100) NOT NULL,
    timing VARCHAR(100) NOT NULL,
    duration INT(11) NOT NULL
)";

// Execute the query
if ($conn->query($sql) === TRUE) {
    echo "Table 'bookings' created successfully!";
} else {
    echo "Error creating table: " . $conn->error;
}

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $userID = $_POST['id'];
    $date = $_POST['date'];
    $hall = $_POST['hall'];
    $timing = $_POST['timing'];
    $duration = $_POST['duration'];

    // Validate the inputs
    if (empty($name) || empty($userID) || empty($date) || empty($hall) || empty($timing) || empty($duration)) {
        die("Please fill in all required fields.");
    }

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO bookings (name, userID, date, hall, timing, duration) VALUES ('$name', '$userID', '$date', '$hall', '$timing' , '$duration')";
    mysqli_query($conn,$sql);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Booking successfully added!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
