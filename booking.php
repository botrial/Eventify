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
    // echo "Connected successfully <br>";

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

    $sql = "INSERT INTO bookings (name, Sid, date,hall, timing, duration ) VALUES ('$name','$userID', '$date', '$hall', '$timing','$duration')";
    $stmt = $conn -> query($sql);
?>