<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EventifyMe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];

    $sql = "DELETE FROM bookings WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        echo "Booking deleted successfully!";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Booking</title>
</head>
<body>
    <h1>Delete Booking</h1>
    <form method="POST">
        <label for="id">Booking ID:</label>
        <input type="number" id="id" name="id" required>
        <button type="submit">Delete</button>
    </form>
</body>
</html>
