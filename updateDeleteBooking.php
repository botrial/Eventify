<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

// Connect to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if action is provided
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'update') {
        // Update Booking
        $id = $_POST['id'];
        $name = $_POST['name'];
        $date = $_POST['date'];
        $hall = $_POST['hall'];
        $timing = $_POST['timing'];
        $duration = $_POST['duration'];

        // Validate inputs
        if (empty($id) || empty($name) || empty($date) || empty($hall) || empty($timing) || empty($duration)) {
            echo "Error: All fields are required.";
            exit;
        }

        $sql = "UPDATE bookings SET name = ?, date = ?, hall = ?, timing = ?, duration = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssii", $name, $date, $hall, $timing, $duration, $id);

        if ($stmt->execute()) {
            echo "Booking updated successfully.";
        } else {
            echo "Error updating booking: " . $stmt->error;
        }
        $stmt->close();

    } elseif ($action === 'delete') {
        // Delete Booking
        $id = $_POST['id'];

        // Validate input
        if (empty($id)) {
            echo "Error: Booking ID is required.";
            exit;
        }

        $sql = "DELETE FROM bookings WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            echo "Booking deleted successfully.";
        } else {
            echo "Error deleting booking: " . $stmt->error;
        }
        $stmt->close();

    } else {
        echo "Error: Invalid action.";
    }
} else {
    echo "Error: Invalid request method.";
}

$conn->close();
?>
