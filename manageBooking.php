<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Sid'])) {
    $Sid = $conn->real_escape_string($_POST['Sid']);
    $sql = "SELECT * FROM bookings WHERE Sid = '$Sid'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Fetch and return results as JSON
        $bookings = [];
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        echo json_encode($bookings);
    } else {
        // No results found
        echo json_encode(["error" => "No bookings found for Sid: $Sid."]);
    }
} else {
    // Invalid request
    echo json_encode(["error" => "Invalid request. Please provide a valid Sid."]);
}

$conn->close();
?>
