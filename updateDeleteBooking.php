<?php
// updateDeleteBooking.php

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventifyme";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check the type of request (update or delete)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingId = $conn->real_escape_string($_POST['hiddenBookingId']);

    if (isset($_POST['update'])) {
        // Update booking details
        $name = $conn->real_escape_string($_POST['name']);
        $date = $conn->real_escape_string($_POST['date']);
        $hall = $conn->real_escape_string($_POST['hall']);
        $timing = $conn->real_escape_string($_POST['timing']);
        $duration = (int)$_POST['duration'];

        $sql = "UPDATE bookings SET 
                    name = '$name', 
                    date = '$date', 
                    hall = '$hall', 
                    timing = '$timing', 
                    duration = $duration 
                WHERE id = '$bookingId'";

        if ($conn->query($sql) === TRUE) {
            echo "Booking updated successfully.";
        } else {
            echo "Error updating booking: " . $conn->error;
        }
    } elseif (isset($_POST['delete'])) {
        // Delete booking
        $sql = "DELETE FROM bookings WHERE id = '$bookingId'";

        if ($conn->query($sql) === TRUE) {
            echo "Booking deleted successfully.";
        } else {
            echo "Error deleting booking: " . $conn->error;
        }
    } else {
        echo "Invalid action.";
    }
} else {
    echo "Invalid request.";
}

$conn->close();
?>
