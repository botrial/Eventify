<?php
// manageBooking.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a Booking ID is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['bookingId'])) {
    $bookingId = $conn->real_escape_string($_POST['bookingId']);

    // Fetch booking details
    $sql = "SELECT * FROM bookings WHERE id = '$bookingId'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $booking = $result->fetch_assoc();
        echo json_encode($booking);
    } else {
        echo json_encode(["error" => "Booking not found."]);
    }
} else {
    echo json_encode(["error" => "Invalid request."]);
}

$conn->close();
?>
