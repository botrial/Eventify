<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully <br>";

    $name = $_POST["name"];
    
// Handle the form submission
/* if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve form data
    $name = $_POST["name"];
    $userID = $_POST["id"];
    $date = $_POST["date"];
    $hall = $_POST["hall"];
    $timing = $_POST["timing"];
    $duration = $_POST["duration"];

    // Validate the inputs
    if (empty($name) || empty($userID) || empty($date) || empty($hall) || empty($timing) || empty($duration)) {
        echo "<script>alert('Please fill in all required fields.'); window.history.back();</script>";
        exit;}


    // Prepare and bind the SQL statement
    $stmt = $conn->prepare("INSERT INTO bookings (name, date, hall, timing, duration) VALUES (?, ?, ?, ?, ?)");

    // Bind parameters
    $stmt->bind_param("ssssi", $name, $date, $hall, $timing, $duration);

    // Execute the statement/*
    if ($stmt->execute()) {
        echo "Booking successfully added!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request method.";
}*/
?>