<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['Sid'])) {
    $Sid = $conn->real_escape_string($_POST['Sid']);
    $sql = "SELECT * FROM bookings WHERE Sid = '$Sid'";
    $result = $conn->query($sql);

    if ($result) {
        $bookings = [];
        while ($row = $result->fetch_assoc()) {
            $bookings[] = $row;
        }
        echo json_encode($bookings);
    } else {
        echo json_encode(["error" => "No bookings found."]);
    }
} else {
    echo json_encode(["error" => "Invalid request."]);
}

$conn->close();
?>
