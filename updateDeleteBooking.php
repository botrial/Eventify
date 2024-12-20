<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $bookingId = $_POST['hiddenBookingId'];
    $name = $_POST['name'];
    $date = $_POST['date'];
    $hall = $_POST['hall'];
    $timing = $_POST['timing'];
    $duration = $_POST['duration'];

    if (isset($_POST['update'])) {
        $sql = "UPDATE bookings SET name = ?, date = ?, hall = ?, timing = ?, duration = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssii", $name, $date, $hall, $timing, $duration, $bookingId);

        if ($stmt->execute()) {
            echo "Booking updated.";
        } else {
            echo "Error updating: " . $stmt->error;
        }
    } elseif (isset($_POST['delete'])) {
        $sql = "DELETE FROM bookings WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $bookingId);

        if ($stmt->execute()) {
            echo "Booking deleted.";
        } else {
            echo "Error deleting: " . $stmt->error;
        }
    }
}

$conn->close();
?>
