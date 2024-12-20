<?php
$servername = "localhost";  // Database server address
$username = "root";         // Database username
$password = "";             // Database password
$dbname = "EventifyMe";     // Database name

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection is successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create the event_bookings table if it doesn't exist
$SQL = "CREATE TABLE IF NOT EXISTS event_bookings (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    event_name VARCHAR(255) NOT NULL,
    person_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

// Execute the query to create the table
if ($conn->query($SQL) === TRUE) {
    echo "Table 'event_bookings' created successfully or already exists.<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $eventName = $_POST['eventName'];
    $personName = $_POST['personName'];
    $email = $_POST['email'];

    // Prepare the SQL query to insert booking details
    $sql = "INSERT INTO event_bookings (event_name, person_name, email) 
            VALUES ('$eventName', '$personName', '$email')";

    // Check if the query was successful
    if ($conn->query($sql) === TRUE) {
        echo "Booking successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
